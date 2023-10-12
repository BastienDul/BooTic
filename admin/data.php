<?php include '../inc/img/header.inc.php'; ?>

<?php include '../inc/img/connexionDb.inc.php';?>

<?php

    $creationPage = $_GET['action'];


if ($creationPage == "C") {

    // !!! recupérations de l'image !!! 

    if (isset($_FILES['file'])) {
        $tmpName = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];
    }

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));

    //Tableau des extensions que l'on accepte
    $extensions = ['jpg', 'png', 'jpeg', 'gif', 'webp'];

    //Taille max que l'on accepte
    $maxSize = 400000;

    if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
        move_uploaded_file($tmpName, '../inc/img/BOOTIC_IMG/' . $name);
    } else {
        echo "Une erreur est survenue";
    }


    // !!! recuperation des données !!!

    $reference = $_POST['reference'];
    $categorie = $_POST['categorie'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $couleur = $_POST['couleur'];
    $taille = $_POST['taille'];
    $genre = $_POST['genre'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];

    // !!! VERIFIER QUE LES VARIABLES SONT BIEN SUBMIT !!!

    // echo $reference;
    // echo'</br>';
    // echo $categorie;
    // echo'</br>';
    // echo $titre;
    // echo'</br>';
    // echo $description;
    // echo'</br>';
    // echo $couleur;
    // echo'</br>';
    // echo $taille;
    // echo'</br>';
    // echo $genre;
    // echo'</br>';
    // echo $prix;
    // echo'</br>';
    // echo $stock;
    // echo'</br>';
    // echo $name;



    try {
        include '../inc/img/connexionDb.inc.php';

        $req = $maBase->prepare('INSERT INTO t_produit (reference, id_categorie, titre, description, couleur, taille, public, photo, prix, stock) 
    VALUES(:reference, :categorie, :titre, :description, :couleur, :taille, :genre, :name, :prix, :stock) LIMIT 1');


        $req->bindValue(':reference', $reference, PDO::PARAM_STR);
        $req->bindValue(':categorie', $categorie, PDO::PARAM_INT);
        $req->bindValue(':titre', $titre, PDO::PARAM_STR);
        $req->bindValue(':description', $description, PDO::PARAM_STR);
        $req->bindValue(':couleur', $couleur, PDO::PARAM_STR);
        $req->bindValue(':taille', $taille, PDO::PARAM_STR);
        $req->bindValue(':genre', $genre, PDO::PARAM_STR);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':prix', $prix, PDO::PARAM_INT);
        $req->bindValue(':stock', $stock, PDO::PARAM_INT);

        if ($req->execute()) {
            echo '<div class="row text-center my-5">
        <div class="col-12">
            <h3>Votre ajout de produit à été effectué !</h3>
        </div>
    
        <div class="col-12">
            <a href="gestion_boutique.php"><input type="text" class="btn btn-success w-25"  value="Retournez a la gestion des produits"></a>
        </div>
    </div>';
        } else {
            echo 'Un problème est survenue !';
        }


    } catch (PDOException $e) {

        echo 'Erreur : ' . $e->getMessage();

    }

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! ELSE MODIFICATION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

        } elseif ($creationPage == "U") {

            $id_produit = $_GET['id'];

            // !!! recupérations de l'image !!! 

            if (isset($_FILES['file'])) {
                $tmpName = $_FILES['file']['tmp_name'];
                $name = $_FILES['file']['name'];
                $size = $_FILES['file']['size'];
                $error = $_FILES['file']['error'];
            }

            $tabExtension = explode('.', $name);
            $extension = strtolower(end($tabExtension));

            //Tableau des extensions que l'on accepte
            $extensions = ['jpg', 'png', 'jpeg', 'gif', 'webp'];

            //Taille max que l'on accepte
            $maxSize = 400000;


            // !!! VERIFIER QUE LES VARIABLES SONT BIEN SUBMIT !!!

            // echo $reference;
            // echo'</br>';
            // echo $categorie;
            // echo'</br>';
            // echo $titre;
            // echo'</br>';
            // echo $description;
            // echo'</br>';
            // echo $couleur;
            // echo'</br>';
            // echo $taille;
            // echo'</br>';
            // echo $genre;
            // echo'</br>';
            // echo $prix;
            // echo'</br>';
            // echo $stock;
            // echo'</br>';
            // echo $name;

            // !!!!!!!!!!!!!! A VOIR DEMAIN !!!!!!!!!!!!!!!!!!!!!!!!!
            
            // if ($_FILES['file']['size'] === 0){

            // }
            // if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
            //     move_uploaded_file($tmpName, '../inc/img/BOOTIC_IMG/' . $name);
            
            //     try{

            //         $req0 = $maBase->prepare('UPDATE t_produit
            //         SET   photo =  :name
            //         WHERE id_produit = :id_produit');
            //         $req0->bindValue(':name', $name, PDO::PARAM_STR);
            //         $req0->execute();
            //         } catch (PDOException $e) {
            //             echo 'Erreur : ' . $e->getMessage();
            //         }
            // } else {
            //     echo "Une erreur est survenue";
            // }

            // !!! recuperation des données !!!

            $reference = $_POST['reference'];
            $categorie = $_POST['categorie'];
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $couleur = $_POST['couleur'];
            $taille = $_POST['taille'];
            $genre = $_POST['genre'];
            $prix = $_POST['prix'];
            $stock = $_POST['stock'];

            try {
                

                

                $req = $maBase->prepare('UPDATE t_produit 
                SET reference = :reference,
                id_categorie = :categorie,
                titre = :titre,
                description = :description,
                couleur = :couleur,
                taille = :taille,
                public = :genre,
                photo = :name,
                prix = :prix,
                stock = :stock
                WHERE id_produit = :id_produit');

                $req->bindValue(':id_produit', $id_produit, PDO::PARAM_INT);
                $req->bindValue(':reference', $reference, PDO::PARAM_STR);
                $req->bindValue(':categorie', $categorie, PDO::PARAM_INT);
                $req->bindValue(':titre', $titre, PDO::PARAM_STR);
                $req->bindValue(':description', $description, PDO::PARAM_STR);
                $req->bindValue(':couleur', $couleur, PDO::PARAM_STR);
                $req->bindValue(':taille', $taille, PDO::PARAM_STR);
                $req->bindValue(':genre', $genre, PDO::PARAM_STR);
                $req->bindValue(':name', $name, PDO::PARAM_STR);
                $req->bindValue(':prix', $prix, PDO::PARAM_INT);
                $req->bindValue(':stock', $stock, PDO::PARAM_INT);

                if ($req->execute()) {
                    echo '<div class="row text-center my-5">
                <div class="col-12">
                    <h3>Votre modification de produit à été effectué !</h3>
                </div>
            
                <div class="col-12">
                    <a href="gestion_boutique.php"><input type="text" class="btn btn-success w-25"  value="Retournez a la gestion des produits"></a>
                </div>
            </div>';
                } else {
                    echo 'Un problème est survenue !';
                }

            }   catch (PDOException $e) {

            echo 'Erreur : ' . $e->getMessage();
                
          }

        //   !!!!!!!!!!!!!!!!!!!!!!! ELSE SUPPRESSION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    
        } elseif ($creationPage == "D") {

            $id_produit = $_GET['id'];

            try {
                include '../inc/img/connexionDb.inc.php';

                $req = $maBase -> prepare('DELETE FROM t_produit WHERE id_produit = :id_produit');

                $req->bindValue(':id_produit', $id_produit, PDO::PARAM_INT);

                if ($req->execute()) {
                    echo '<div class="row text-center my-5">
                    <div class="col-12">
                        <h3>Votre  de produit à été supprimé !</h3>
                    </div>
                
                    <div class="col-12">
                        <a href="gestion_boutique.php"><input type="text" class="btn btn-success w-25"  value="Retournez a la gestion des produits"></a>
                    </div>
                </div>';
                    } else {
                        echo 'Un problème est survenue lors de la suppréssions !';
                    }
                
            } catch (PDOException $e) {
                echo 'Erreur : ' . $e->getMessage();
            }
        }


?>







<?php include '../inc/img/footer.inc.php'; ?>