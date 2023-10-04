<?php include './inc/img/header.inc.php'; ?>

<!-- Appel a la base de données -->
<main class="row">
    
    <div id="carouselExample1" class="carousel text-center slide py-5 col-6">
        <h1 class=" mb-3 text-center">Les casquettes</h1>
        <div class="carousel-inner">
            <?php

                try{
                    $userName = "root";
                    $password = '';
                    $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
                    $maBase = new PDO ($dsn, $userName, $password );

                    // $req est un PDOStatement qui effectue une requete sql afin de pouvoir s'en servir en se connectant a $maBase
                    $req = $maBase->query('SELECT * FROM t_produit INNER JOIN t_categorie ON t_produit.id_categorie = t_categorie.id_categorie');
                    
                    $res = $req->fetchAll();
                    foreach($res as $key => $value){
                        if($value[2] == 4){
                            if ($key == 1 ) {
                                echo("<div class=\"carousel-item\">
                                <div class=\"card p-0 m-0 mx-auto\" style=\"width: 18rem;\">
                                <img src=\"./inc/img/BOOTIC_IMG/".$value[12]."/".$value[8].".webp\" class=\"card-img-top\" alt=\"Image d'une casquette\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">".$value[3]."</h5>
                                    <p class=\"card-text\">Prix : ".$value[9]." €</p>
                                    <p class=\"card-text\">Taille :".$value[6]."</p>
                                    <p class=\"card-text\">".$value[4]."</p>
                                    <a href=\"#\" class=\"btn btn-secondary\">Ajouter au panier</a>
                                </div>
                                </div>
                                </div>");
                            } else {
                                echo("<div class=\"carousel-item active\">
                                <div class=\"card mx-auto\" style=\"width: 18rem;\">
                                <img src=\"./inc/img/BOOTIC_IMG/".$value[12]."/".$value[8].".webp\" class=\"card-img-top\" alt=\"Image d'une casquette\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">".$value[3]."</h5>
                                    <p class=\"card-text\">prix : ".$value[9]." €</p>
                                    <p class=\"card-text\">Taille : ".$value[6]."</p>
                                    <p class=\"card-text\">".$value[4]."</p>
                                    <a href=\"#\" class=\"btn btn-secondary\">Ajouter au panier</a>
                                </div>
                                </div>
                                </div>");
                            }
                            
                        }

                    }
                }   
                    // Si la connexion ne se fait pas, try renvois a catch, qui contient les messages d'erreur dans PDOException $e et qu'il l'echo de manière beaucoup plus lisible.

                catch (PDOException $e){
                    echo'Erreur :'. $e->getMessage();
                }

                ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
                <!-- LES SWEATS -->
    
    <div id="carouselExample2" class="carousel text-center slide py-5 col-6">
        <h1 class=" mb-3 text-center">Les sweats</h1>
        <div class="carousel-inner">
            <?php

                try{
                    $userName = "root";
                    $password = '';
                    $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
                    $maBase = new PDO ($dsn, $userName, $password );

                    // $req est un PDOStatement qui effectue une requete sql afin de pouvoir s'en servir en se connectant a $maBase
                    $req = $maBase->query('SELECT * FROM t_produit');
                    
                    $res = $req->fetchAll();
                    foreach($res as $key => $value){
                        if($value[2] == 3){
                            if ($key == 1 ) {
                                echo("<div class=\"carousel-item\">
                                <div class=\"card p-0 m-0 mx-auto\" style=\"width: 18rem;\">
                                <img src=\"./inc/img/BOOTIC_IMG/".$value[12]."/".$value[8].".webp\" class=\"card-img-top\" alt=\"Image d'une \">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">".$value[3]."</h5>
                                    <p class=\"card-text\">Prix : ".$value[9]." €</p>
                                    <p class=\"card-text\">Taille :".$value[6]."</p>
                                    <p class=\"card-text\">".$value[4]."</p>
                                    <a href=\"#\" class=\"btn btn-secondary\">Ajouter au panier</a>
                                </div>
                                </div>
                                </div>");
                            } else {
                                echo("<div class=\"carousel-item active\">
                                <div class=\"card mx-auto\" style=\"width: 18rem;\">
                                <img src=\"./inc/img/BOOTIC_IMG/".$value[12]."/".$value[8].".webp\" class=\"card-img-top\" alt=\"Image d'une ".$value[3]."\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">".$value[3]."</h5>
                                    <p class=\"card-text\">prix : ".$value[9]." €</p>
                                    <p class=\"card-text\">Taille : ".$value[6]."</p>
                                    <p class=\"card-text\">".$value[4]."</p>
                                    <a href=\"#\" class=\"btn btn-secondary\">Ajouter au panier</a>
                                </div>
                                </div>
                                </div>");
                            }
                            
                        }

                    }
                }   
                    // Si la connexion ne se fait pas, try renvois a catch, qui contient les messages d'erreur dans PDOException $e et qu'il l'echo de manière beaucoup plus lisible.

                catch (PDOException $e){
                    echo'Erreur :'. $e->getMessage();
                }

                ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

                    <!-- LES T-SHIRT -->
    
                    <div id="carouselExample3" class="carousel text-center slide py-5 col-6">
        <h1 class=" mb-3 text-center">Les T-shirt</h1>
        <div class="carousel-inner">
            <?php

                try{
                    $userName = "root";
                    $password = '';
                    $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
                    $maBase = new PDO ($dsn, $userName, $password );

                    // $req est un PDOStatement qui effectue une requete sql afin de pouvoir s'en servir en se connectant a $maBase
                    $req = $maBase->query('SELECT * FROM t_produit');
                    
                    $res = $req->fetchAll();
                    foreach($res as $key => $value){
                        if($value[2] == 2){
                            if ($key == 1 ) {
                                echo("<div class=\"carousel-item\">
                                <div class=\"card p-0 m-0 mx-auto\" style=\"width: 18rem;\">
                                <img src=\"./inc/img/BOOTIC_IMG/".$value[12]."/".$value[8].".webp\" class=\"card-img-top\" alt=\"Image d'une \">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">".$value[3]."</h5>
                                    <p class=\"card-text\">Prix : ".$value[9]." €</p>
                                    <p class=\"card-text\">Taille :".$value[6]."</p>
                                    <p class=\"card-text\">".$value[4]."</p>
                                    <a href=\"#\" class=\"btn btn-secondary\">Ajouter au panier</a>
                                </div>
                                </div>
                                </div>");
                            } else {
                                echo("<div class=\"carousel-item active\">
                                <div class=\"card mx-auto\" style=\"width: 18rem;\">
                                <img src=\"./inc/img/BOOTIC_IMG/".$value[12]."/".$value[8].".webp\" class=\"card-img-top\" alt=\"Image d'une ".$value[3]."\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">".$value[3]."</h5>
                                    <p class=\"card-text\">prix : ".$value[9]." €</p>
                                    <p class=\"card-text\">Taille : ".$value[6]."</p>
                                    <p class=\"card-text\">".$value[4]."</p>
                                    <a href=\"#\" class=\"btn btn-secondary\">Ajouter au panier</a>
                                </div>
                                </div>
                                </div>");
                            }
                            
                        }

                    }
                }   
                    // Si la connexion ne se fait pas, try renvois a catch, qui contient les messages d'erreur dans PDOException $e et qu'il l'echo de manière beaucoup plus lisible.

                catch (PDOException $e){
                    echo'Erreur :'. $e->getMessage();
                }

                ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


</main>

<?php include './inc/img/footer.inc.php'; ?>