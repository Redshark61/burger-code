<?php
require './db.php';

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

$nameError = $descriptionError = $priceError = $categoryError = $imageError = $name = $price = $description = $image = $category = "";


if (!empty($_POST)) {
    $name = checkInput($_POST['name']);
    $price = checkInput($_POST['price']);
    $description = checkInput($_POST['description']);
    $category = checkInput($_POST['category']);
    $image = checkInput($_FILES['image']['name']);
    $imagePath = "../images/" . basename($image);
    $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
    $isSuccess = true;
    $isUploadSuccess = false;

    if (empty($name)) {
        $nameError = "Ce champs est obligatoire";
        $isSuccess = false;
    }
    if (empty($price)) {
        $priceError = "Ce champs est obligatoire";
        $isSuccess = false;
    }
    if (empty($description)) {
        $descriptionError = "Ce champs est obligatoire";
        $isSuccess = false;
    }
    if (empty($category)) {
        $categoryError = "Ce champs est obligatoire";
        $isSuccess = false;
    }
    if (empty($image)) {
        $imageError = "Ce champs est obligatoire";
        $isSuccess = false;
    } else {
        $isUploadSuccess = true;
        if ($imageExtension != 'jpg' && $imageExtension != 'jpeg' && $imageExtension != 'png' && $imageExtension != 'gif') {
            $imageError = "Les fichiers autorisé sont : *.jpg, *.jpeg, *.png, *.gif";
            $isUploadSuccess = false;
        }
        if (file_exists($imagePath)) {
            $imageError = "Le fichier existe déjà";
            $isUploadSuccess = false;
        }
        if ($_FILES['image']['size'] > 50000000) {
            $imageError = "La taille des fichiers ne doit pas excéder les 5Mo";
            $isUploadSuccess = false;
        }
        if ($isUploadSuccess) {
            if (!move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                $imageError = 'Il y a eu une erreur lors de l\'upload';
                $isUploadSuccess = false;
            }
        }
    }
    if ($isSuccess && $isUploadSuccess) {
        $bdd = Database::connect();
        $response = $bdd->prepare("INSERT INTO items (name, description, price, category, image) values(?,?,?,?,?)");
        $response->execute(array($name, $description, $price, $category, $image));
        Database::disconnect();
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/styles.css">

    <title>Insérer un item</title>
</head>

<body>

    <h1 class="text-logo">
        <span class="glyphicon glyphicon-cutlery"></span>
        Burger code
        <span class="glyphicon glyphicon-cutlery"></span>
    </h1>
    <div class="container admin">
        <div class="row">
            <h1><strong>Ajouter un item</strong></h1>
            <br>
            <form action="./insert.php" method="POST" class="form" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nom : </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom" value="<?= $name ?>">
                    <span class="help-inline"><?= $nameError ?></span>
                </div>
                <div class="form-group">
                    <label for="description">Description : </label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?= $description ?>">
                    <span class="help-inline"><?= $descriptionError ?></span>
                </div>
                <div class="form-group">
                    <label for="price">Prix : </label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Prix" value="<?= $price ?>">
                    <span class="help-inline"><?= $priceError ?></span>
                </div>
                <div class="form-group">
                    <label for="category">Catégorie : </label>
                    <select class="form-control" id="category" name="category">
                        <?php
                        $bdd = Database::connect();
                        foreach ($bdd->query('SELECT * FROM categories') as $row) {
                            echo "<option value='{$row['id']}'>{$row['name']}</option>";
                        }
                        Database::disconnect();
                        ?>
                    </select>
                    <span class="help-inline"><?= $categoryError ?></span>
                </div>

                <div class="form-group">
                    <label for="image">Sélectionner une image : </label>
                    <input type="file" id="image" name="image">
                    <span class="help-inline"><?= $imageError ?></span>
                </div>

                <br>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">
                        <span class="glyphicon glyphicon-pencil"></span> Ajouter</button>
                    <a href="./index.php" class="btn btn-primary"><span class='glyphicon glyphicon-arrow-left'></span> Retour</a>
                </div>
            </form>

        </div>
    </div>

</body>

</html>