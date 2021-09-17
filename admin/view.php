<?php

require './db.php';

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    if (is_numeric($data)) {
        return $data;
    } else {
        echo "Ce n'est pas un chiffre, on nous arnaque chef !";
        exit();
    }
}

if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}

$bdd = Database::connect();
$response = $bdd->prepare("SELECT items.name, items.id, items.description, items.price, items.image, categories.name AS category FROM items INNER JOIN categories ON items.category = categories.id WHERE items.id = ?");

$response->execute(array($id));
$item = $response->fetch();
Database::disconnect();
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

    <title><?= $item['name'] ?></title>
</head>

<body>

    <h1 class="text-logo">
        <span class="glyphicon glyphicon-cutlery"></span>
        Burger code
        <span class="glyphicon glyphicon-cutlery"></span>
    </h1>
    <div class="container admin">
        <div class="row">
            <div class="col-sm-6">
                <h1><strong>Voir un item</strong></h1>
                <br>
                <form action="">
                    <div class="form-group"><label>Nom : <?= $item['name'] ?></label></div>
                    <div class="form-group"><label>Prix : <?= number_format((float)$item['price'], 2, '.', '') ?>€</label></div>
                    <div class="form-group"><label>Catégorie : <?= $item['category'] ?></label></div>
                    <div class="form-group"><label>Description : <?= $item['description'] ?></label></div>
                    <div class="form-group"><label>Image : <?= $item['image'] ?></label></div>

                </form>
                <br>
                <div class="form-actions">
                    <a href="./index.php" class="btn btn-primary"><span class='glyphicon glyphicon-arrow-left'></span> Retour</a>
                </div>
            </div>

            <div class="col-sm-6 site">
                <div class="thumbnail">
                    <img src="../images/<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
                    <div class='price'><?= number_format((float)$item['price'], 2, '.', '') ?>€</div>
                    <div class="caption">
                        <h4><?= $item['name'] ?></h4>
                        <p><?= $item['description'] ?></p>
                        <a href="#" class="btn btn-order" role="button">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>