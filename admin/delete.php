<?php
require './db.php';

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}

if (!empty($_POST)) {
    $id = checkInput($_POST['id']);
    $bdd = Database::connect();
    $response = $bdd->prepare('DELETE FROM items WHERE id=?');
    $response->execute(array($id));
    Database::disconnect();
    header('Location: ./index.php');
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

    <title>Supprimer un item</title>
</head>

<body>

    <h1 class="text-logo">
        <span class="glyphicon glyphicon-cutlery"></span>
        Burger code
        <span class="glyphicon glyphicon-cutlery"></span>
    </h1>
    <div class="container admin">
        <div class="row">
            <h1><strong>Supprimer un item</strong></h1>
            <br>
            <form action="./delete.php" method="POST" class="form" role="form">
                <input type="hidden" name="id" value="<?= $id ?>">
                <p class="alert alert-warning">Êtes-vous sûr de vouloir supprimer ?</p>
                <div class="form-actions">
                    <button type="submit" class="btn btn-default">Oui</button>
                    <a href="./index.php" class="btn btn-warning">Non</a>
                </div>
            </form>

        </div>
    </div>

</body>

</html>