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

    <title>Admin</title>
</head>

<body>
    <h1 class="text-logo">
        <span class="glyphicon glyphicon-cutlery"></span>
        Burger code
        <span class="glyphicon glyphicon-cutlery"></span>
    </h1>

    <div class="container admin">
        <div class="row">
            <h1><strong>Liste des items</strong>
                <a href="./insert.php" class="btn btn-success btn-lg"> <span class="glyphicon glyphicon-plus"></span>Ajouter</a>
            </h1>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Catégorie</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    require './db.php';

                    $bdd = Database::connect();
                    $response = $bdd->query('SELECT items.name, items.id, items.description, items.price, categories.name AS category
                    FROM items INNER JOIN categories 
                    ON items.category = categories.id ORDER BY items.id DESC');

                    while ($item = $response->fetch()) {
                        echo "<tr>
                        <td>{$item['name']}</td>
                        <td>{$item['description']}</td>
                        <td>{$item['price']}</td>
                        <td>{$item['category']}</td>
                        <td style='width: 300px;'>
                            <a href='./view.php?id={$item['id']}' class='btn btn-default'><span class='glyphicon glyphicon-eye-open'></span> Voir</a>
                            <a href='./update.php?id={$item['id']}' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span> Modifier</a>
                            <a href='./delete.php?id={$item['id']}' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Supprimer</a>
                        </td>
                    </tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>