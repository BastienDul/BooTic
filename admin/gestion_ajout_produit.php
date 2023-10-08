<?php include '../inc/img/header.inc.php'; ?>

<main class="bg-secondary">
    <?php

    $idProduit = $_GET['id'];

    try {
        
        include '../inc/img/connexionDb.inc.php';


        //Ajout de WHERE id_produit = '.$idProduit pour filtrer les resultat par id_produit, comme nous récupérons l'id_produit dans l'url
        $req = $maBase->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie) WHERE id_produit = ' . $idProduit);


        $res = $req->fetchAll();
        foreach ($res as $key => $value) {
            echo ' <div class="container p-3">
    <div class="row text-start">
        <form class="form" action="">
            <div class="col-12 text-center">
                <h3>Affichage des produits</h3>
                <h4>Ajout des produits</h4>
            </div>
            <div class="col-12 col-lg-6 mt-5">
                <h3>Formulaire produit : ' . $value[3] . '</h3>
            </div>
            <div class="col-12 d-flex flex-column">
                <label for="">reference :</label>
                <textarea id="story" name="story" rows="0" cols="">' . $value[3] . '</textarea>            
            </div>
            <div class="col-12 d-flex flex-column">
                <label for="">categorie : </label>
                <textarea id="story" name="story" rows="0" cols="">' . $value[12] . '</textarea>            
            </div>
            <div class="col-12 d-flex flex-column">
                <label for="">titre : </label>
                <textarea id="story" name="story" rows="0" cols="">' . $value[3] . '</textarea>            
            </div>
            <div class="col-12 d-flex flex-column">
                <label for="">description :</label>
                <textarea name="" id="" cols="30" rows="0" class="" placeholder="!">' . $value[4] . '</textarea>
            </div>
            <div class="col-12 d-flex flex-column">
                <label for="">couleur :</label>
                <textarea id="story" name="story" rows="0" cols="">' . $value[5] . '</textarea>            
            </div>
            <div class="col-12 d-flex flex-column mt-3 w-25">
                <select name="" id="">
                    <label for="">Taille : </label>
                    <option value="S">' . $value[6] . '</option>
                </select>
            </div>
            <div class="col-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Homme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                    Femme
                    </label>
                </div>
                <div class="col-6 d-flex flex-column">
                <label class="" for="">Ancienne image :</label>
                <img src="../inc/img/BOOTIC_IMG/' . $value[12] . '/' . $value[8] . '.webp" width="72rem" alt="Photo ' . $value[3] . '">
            </div>
            </div>
            <div class="col-6 ">
                <label for="image">Sélectionnez une image :</label>
                <input type="file" name="image" id="image" accept="image/*">
                <input class="w-25" type="submit" value="Télécharger">
            </div>

            <div class="col-12 d-flex flex-column">
                <label for="">prix :</label>
                <textarea id="story" name="story" rows="0" cols="">' . $value[9] . '</textarea>
            </div>
            <div class="col-12 d-flex flex-column">
                <label for="">stock : </label>
                <textarea id="story" name="story" rows="0" cols="">' . $value[10] . '</textarea>            
            </div>
            <div class="col-6">
                <button class="btn btn-dark mt-3">Soummettre</button>
            </div>
            
        </form>

    </div>
    </div>';
        }
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }

    ?>

</main>

<?php include '../inc/img/footer.inc.php'; ?>