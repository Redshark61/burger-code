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
                <li class="active" role="presentation"><a href="#1" data-toggle="tab">Menu</a></li>
                <li role="presentation"><a href="#2" data-toggle="tab">Snacks</a></li>
                <li role="presentation"><a href="#3" data-toggle="tab">Burgers</a></li>
                <li role="presentation"><a href="#4" data-toggle="tab">Salades</a></li>
                <li role="presentation"><a href="#5" data-toggle="tab">Boisson</a></li>
                <li role="presentation"><a href="#6" data-toggle="tab">Dessert</a></li>
            </ul>
        </nav>

        <div class="tab-content">
            <div class="tab-pane active" id="1">
                <div class="row">

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/m1.png" alt="Menu 1">
                            <div class='price'>8.90€</div>
                            <div class="caption">
                                <h4>Menu classique</h4>
                                <p>Burger classique + moyenne frite + boisson</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/m2.png" alt="Menu 2">
                            <div class='price'>9.50€</div>
                            <div class="caption">
                                <h4>Menu Bacon</h4>
                                <p>Burger bacon + moyenne frite + boisson</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/m3.png" alt="Menu 3">
                            <div class='price'>10.90€</div>
                            <div class="caption">
                                <h4>Menu Big</h4>
                                <p>Burger double steak + moyenne frite + boisson</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/m4.png" alt="Menu 4">
                            <div class='price'>9.90€</div>
                            <div class="caption">
                                <h4>Menu Fry</h4>
                                <p>Burger au poulet frit + moyenne frite + boisson</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/m5.png" alt="Menu 5">
                            <div class='price'>10.90€</div>
                            <div class="caption">
                                <h4>Menu Fish</h4>
                                <p>Burger au poisson + moyenne frite + boisson</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/m6.png" alt="Menu 6">
                            <div class='price'>11.90€</div>
                            <div class="caption">
                                <h4>Menu Big Fry</h4>
                                <p>Burger bacon, double steak + moyenne frite + boisson</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="2">
                <div class="row">

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/s1.png" alt="Snacks 1">
                            <div class='price'>3.90€</div>
                            <div class="caption">
                                <h4>Frites</h4>
                                <p>Pommes de terre française</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/s2.png" alt="Snacks 2">
                            <div class='price'>3.40€</div>
                            <div class="caption">
                                <h4>Onion Ring</h4>
                                <p>Oignon frit</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/s3.png" alt="Snacks 3">
                            <div class='price'>5.90€</div>
                            <div class="caption">
                                <h4>Nuggets</h4>
                                <p>Nuggets de poulet</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/s4.png" alt="Snacks 4">
                            <div class='price'>3.50€</div>
                            <div class="caption">
                                <h4>Cheesy Nuggets</h4>
                                <p>Nuggets au fromage</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/s5.png" alt="Snacks 5">
                            <div class='price'>5.90€</div>
                            <div class="caption">
                                <h4>Chick Fry</h4>
                                <p>Ailes de poulet sauce BBQ</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="3">
                <div class="row">

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/b1.png" alt="Burger 1">
                            <div class='price'>5.90€</div>
                            <div class="caption">
                                <h4>Classique</h4>
                                <p>Steak, salade, tomates, cornichons, oignons, sauce au choix</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></bpan> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/b2.png" alt="Burger 2">
                            <div class='price'>6.90€</div>
                            <div class="caption">
                                <h4>Bacon</h4>
                                <p>Steak, bacon, salade, tomates, cornichons, oignons, sauce au choix</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></bpan> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/b3.png" alt="Burger 3">
                            <div class='price'>6.90€</div>
                            <div class="caption">
                                <h4>Big</h4>
                                <p>2 Steak, salade, tomates, cornichons, oignons, sauce au choix</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></bpan> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/b4.png" alt="Burger 4">
                            <div class='price'>6.90€</div>
                            <div class="caption">
                                <h4>Fry</h4>
                                <p>Poulet frit, salade, tomates, cornichons, oignons, sauce au choix</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></bpan> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/b5.png" alt="Burger 5">
                            <div class='price'>5.90€</div>
                            <div class="caption">
                                <h4>Fish</h4>
                                <p>Poisson pané, salade, tomates, sauce au choix</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></bpan> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/b5.png" alt="Burger 5">
                            <div class='price'>6.90€</div>
                            <div class="caption">
                                <h4>Big Fry</h4>
                                <p>2 Steak, bacon, salade, tomates, cornichons, oignons, sauce au choix</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></bpan> Commander
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="4">
                <div class="row">

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/sa1.png" alt="Salade 1">
                            <div class='price'>8.90€</div>
                            <div class="caption">
                                <h4>César Poulet Pané</h4>
                                <p>Poulet pané + salade césar et sa sauce</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/sa2.png" alt="Salade 2">
                            <div class='price'>8.90€</div>
                            <div class="caption">
                                <h4>César Poulet Grillé</h4>
                                <p>Poulet grillé + salade césar et sa sauce</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/sa3.png" alt="Salade 3">
                            <div class='price'>5.90€</div>
                            <div class="caption">
                                <h4>Salade Light</h4>
                                <p>Salade + tomates + concombre + maïs + vinaigrette</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/sa4.png" alt="Salade 4">
                            <div class='price'>7.90€</div>
                            <div class="caption">
                                <h4>Poulet Pané</h4>
                                <p>Poulet pané + salade et sauce au choix</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/sa5.png" alt="Salade 5">
                            <div class='price'>7.90€</div>
                            <div class="caption">
                                <h4>Poulet Grillé</h4>
                                <p>Poulet grillé + salade et sauce au choix</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="5">
                <div class="row">

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/bo1.png" alt="Boisson 1">
                            <div class='price'>1.90€</div>
                            <div class="caption">
                                <h4>Coca Cola Classique</h4>
                                <p>Petit moyen ou grand</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/bo2.png" alt="Boisson 2">
                            <div class='price'>1.90€</div>
                            <div class="caption">
                                <h4>Coca Cola Light</h4>
                                <p>Petit moyen ou grand</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/bo3.png" alt="Boisson 3">
                            <div class='price'>1.90€</div>
                            <div class="caption">
                                <h4>Coca Cola Zéro</h4>
                                <p>Petit moyen ou grand</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/bo4.png" alt="Boisson 4">
                            <div class='price'>1.90€</div>
                            <div class="caption">
                                <h4>Fanta</h4>
                                <p>Petit moyen ou grand</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/bo5.png" alt="Boisson 5">
                            <div class='price'>1.90€</div>
                            <div class="caption">
                                <h4>Sprite</h4>
                                <p>Petit moyen ou grand</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/bo6.png" alt="Boisson 6">
                            <div class='price'>1.90€</div>
                            <div class="caption">
                                <h4>Nestea</h4>
                                <p>Petit moyen ou grand</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="6">
                <div class="row">

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/d1.png" alt="Dessert 1">
                            <div class='price'>4.90€</div>
                            <div class="caption">
                                <h4>Fondant au chocolat</h4>
                                <p>Au choix : chocolat blanc ou au lait</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/d2.png" alt="Dessert 2">
                            <div class='price'>2.90€</div>
                            <div class="caption">
                                <h4>Muffin</h4>
                                <p>Au choix : au fruits ou au chocolat</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/d3.png" alt="Dessert 3">
                            <div class='price'>2.90€</div>
                            <div class="caption">
                                <h4>Beignet</h4>
                                <p>Au choix : au chocolat ou à la vanille</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/d4.png" alt="Dessert 4">
                            <div class='price'>3.90€</div>
                            <div class="caption">
                                <h4>Milkshake</h4>
                                <p>Au choix : fraise, vanille ou chocolat</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="images/d5.png" alt="Dessert 5">
                            <div class='price'>4.90€</div>
                            <div class="caption">
                                <h4>Sundae</h4>
                                <p>Au choix : fraise, caramel ouy chocolat</p>
                                <a href="#" class="btn btn-order" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Commander
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

</body>

</html>