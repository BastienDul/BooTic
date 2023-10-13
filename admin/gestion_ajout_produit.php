<?php include '../inc/img/header.inc.php'; ?>

<main class="bg-secondary">


    <?php

    $creationPage = $_GET['action'];


    try {



        include '../inc/img/connexionDb.inc.php';

        $req = $maBase->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie)');

        if ($creationPage == "C") {


            echo ' <div class="container p-3">
        <div class="row text-start">
            <form method="post" action="data.php?action=C" class="form" enctype="multipart/form-data">
                <div class="col-12 text-center">
                    <h4>Ajout d\'un produits</h4>
                </div>
                <div class="col-12 col-lg-6 mt-5">
                    <h3>Ajouter un produit a la boutique : </h3>
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">reference :</label>
                    <textarea id="story" name="reference" rows="0" cols=""></textarea>            
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">categorie : </label>
                    <select name="categorie" id="">
                        <label for="">categorie : </label>
                        <option name="categorie" value="" disabled>-- Choix de la catégorie --</option>
                        <option name="categorie" value= 3 >Sweats</option>
                        <option name="categorie" value= 2 >T-shirt</option>
                        <option name="categorie" value= 4 >Casquette</option>
                        <option name="categorie" value= 1 >Sac</option>
                    </select>        
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">titre : </label>
                    <textarea id="story" name="titre" rows="0" cols=""></textarea>            
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">description :</label>
                    <textarea name="description" id="" cols="30" rows="0" class="" placeholder=""></textarea>
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">couleur :</label>
                    <textarea id="story" name="couleur" rows="0" cols=""></textarea>            
                </div>
                <div class="col-12 d-flex flex-column mt-3 w-25">
                    <select name="taille" id="">
                        <label for="">Taille : </label>
                        <option name="taille" value="" disabled>-- Choix de la taille --</option>
                        <option name="taille" value="S">S</option>
                        <option name="taille" value="M">M</option>
                        <option name="taille" value="L">L</option>
                        <option name="taille" value="XL">XL</option>
                        <option name="taille" value="TU">TU</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genre" value=m id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Homme
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genre" value=f id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                        Femme
                        </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" value=mixte id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                    Mixte
                    </label>
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">image :</label>
                    <input type="file" name="file">
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">prix :</label>
                    <textarea id="story" name="prix" rows="0" cols=""></textarea>
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">stock : </label>
                    <textarea id="story" name="stock" rows="0" cols="" placeholder="Nombre en"></textarea>            
                </div>
                <div class="col-6">
                    <a href=""><input type="submit" value="Soumettre" class="btn btn-dark mt-3"></a>
                </div>
                
            </form>
    
        </div>
        </div>';




        } elseif ($creationPage == "U") {

            $idProduit = $_GET['id'];

            $req = $maBase->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie) WHERE id_produit ='.$idProduit);

            $res = $req->fetchAll();
            foreach ($res as $key => $value) {

                echo ' <div class="container p-3">
                <div class="row text-start">
                <form method="post" class="form" action="data.php?action=U&id='.$value[0].'"  enctype="multipart/form-data">
                <div class="col-12 text-center">
                    <h3>Affichage des produits</h3>
                    <h4>Ajout des produits</h4>
                </div>
                <div class="col-12 col-lg-6 mt-5">
                    <h3>Formulaire produit : ' . $value[3] . '</h3>
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">reference :</label>
                    <textarea id="story" name="reference" rows="0" cols="">' . $value[1] . '</textarea>            
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">categorie : </label>
                    <select name="categorie" id="">
                        <option name="categorie" value="" disabled> -- Catégorie du produit -- </option>
                        <option name="categorie" value="'.$value[11].'" selected> '.$value[12].' </option>
                        <option name="categorie" value="" disabled>-- Si besoin de modifier, selectionnez ci dessous --</option>
                        <option name="categorie" value= 3 >Sweats</option>
                        <option name="categorie" value= 2 >T-shirt</option>
                        <option name="categorie" value= 4 >Casquette</option>
                        <option name="categorie" value= 1 >Sac</option>
                    </select>        
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">titre : </label>
                    <textarea id="story" name="titre" rows="0" cols="">'.$value[3].'</textarea>            
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">description :</label>
                    <textarea name="description" id="" cols="30" rows="0" class="" placeholder="!">' . $value[4] . '</textarea>
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">couleur :</label>
                    <textarea id="story" name="couleur" rows="0" cols="">' . $value[5] . '</textarea>            
                </div>
                <div class="col-12 d-flex flex-column mt-3 w-25">
                    <select name="taille" id="">
                        <label for="">Taille : </label>
                        <option name="taille" value="" disabled>-- Taille de base --</option>
                        <option name="taille" value="'.$value[6].'" selected>' . $value[6] . '</option>
                        <option name="taille" value="" disabled>-- Si autre choississez --</option>
                        <option name="taille" value="S">S</option>
                        <option name="taille" value="M">M</option>
                        <option name="taille" value="L">L</option>
                        <option name="taille" value="XL">XL</option>
                        <option name="taille" value="TU">TU</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genre" value="m" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                        Homme
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genre" value="f" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                        Femme
                        </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" value="Mixte" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                    Mixte
                    </label>
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">image :</label>
                    <img name="photoBase" src="../inc/img/BOOTIC_IMG/'.$value[8].'" class="w-25">
                    <input type="file" name="file">
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">prix :</label>
                    <textarea id="story" name="prix" rows="0" cols="">' . $value[9] . '</textarea>
                </div>
                <div class="col-12 d-flex flex-column">
                    <label for="">stock : </label>
                    <textarea id="story" name="stock" rows="0" cols="">' . $value[10] . '</textarea>            
                </div>
                <div class="col-6">
                    <a href=""><input type="submit" value="Modifier" class="btn btn-dark mt-3"></a>
                </div>
                
            </form>
    
        </div>
        </div>';
            }
        }


    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }



    ?>

</main>

<?php include '../inc/img/footer.inc.php'; ?>