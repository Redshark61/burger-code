<?php
require './admin/db.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/styles.css">

    <title>Burger Code</title>
</head>

<body>

    <div class="container site">
        <h1 class="text-logo">
            <span class="glyphicon glyphicon-cutlery"></span>
            Burger code
            <span class="glyphicon glyphicon-cutlery"></span>
        </h1>

        <nav>
            <ul class="nav nav-pills">
                <?php

                $bdd = Database::connect();
                $response = $bdd->query('SELECT * FROM categories');
                $categories = $response->fetchAll();

                foreach ($categories as $category) {
                    if ($category['id'] == '1') {
                        echo "<li class='active' role='presentation'><a href='#{$category['id']}' data-toggle='tab'>{$category['name']}</a></li>";
                    } else {
                        echo "<li role='presentation'><a href='#{$category['id']}' data-toggle='tab'>{$category['name']}</a></li>";
                    }
                }

                ?>
            </ul>
        </nav>



        <div class="tab-content">
            <?php
            foreach ($categories as $category) {
                if ($category['id'] == '1') {
                    echo "<div class='tab-pane active' id='{$category['id']}'>";
                } else {
                    echo "<div class='tab-pane' id='{$category['id']}'>";
                }

                echo '<div class="row">';
                $response = $bdd->prepare('SELECT * FROM items WHERE items.category = ?');
                $response->execute(array($category['id']));

                while ($item = $response->fetch()) {
                    echo
                    "<div class='col-sm-6 col-md-4'>
                        <div class='thumbnail'>
                            <img src='images/{$item['image']}' alt='Menu 1'>
                            <div class='price'>" . number_format($item['price'], 2, '.', '') . "€</div>
                            <div class='caption'>
                                <h4>{$item['name']}</h4>
                                <p>{$item['description']}</p>
                                <a href='#' class='btn btn-order' role='button'>
                                    <span class='glyphicon glyphicon-shopping-cart'></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>";
                }
                echo '</div></div>';
            }
            Database::disconnect();
            ?>


        </div>
    </div>

    </div>
    </div>

</body>

</html>