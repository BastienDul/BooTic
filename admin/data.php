<?php include '../inc/img/header.inc.php'; ?>

<?php

// !!! recuperation des données !!!

$reference = $_POST['reference'];
$categorie = $_POST['categorie'];
$titre = $_POST['titre'];
$description = $_POST['description'];
$couleur = $_POST['couleur'];
$taille = $_POST['taille'];
$genre = $_POST['genre'];
$img = $_POST['image'];
$prix = $_POST['prix'];
$stock = $_POST['stock'];

// !!! VERIFIER QUE LES VARIABLES SONT BIEN SUBMIT !!!

echo $reference;
echo'</br>';
echo $categorie;
echo'</br>';
echo $titre;
echo'</br>';
echo $description;
echo'</br>';
echo $couleur;
echo'</br>';
echo $taille;
echo'</br>';
echo $genre;
echo'</br>';
echo $img;
echo'</br>';
echo $prix;
echo'</br>';
echo $stock;

try {
    include '../inc/img/connexionDb.inc.php';

    $req = $maBase->prepare('INSERT INTO t_produit (reference, id_categorie, titre, description, couleur, taille, public, photo, prix, stock) 
    VALUES (:reference, :categorie, :titre, :description, :couleur, :taille, :genre, :img, :prix, :stock)');


    $req->bindValue(':reference', $reference, PDO::PARAM_STR);
    $req->bindValue(':categorie', $categorie, PDO::PARAM_INT);
    $req->bindValue(':titre', $titre, PDO::PARAM_STR);
    $req->bindValue(':description', $description, PDO::PARAM_STR);
    $req->bindValue(':couleur', $couleur, PDO::PARAM_STR);
    $req->bindValue(':taille', $taille, PDO::PARAM_STR);
    $req->bindValue(':genre', $genre, PDO::PARAM_STR);
    $req->bindValue(':img', $img, PDO::PARAM_STR);
    $req->bindValue(':prix', $prix, PDO::PARAM_INT);
    $req->bindValue(':stock', $stock, PDO::PARAM_INT);

    $req -> execute();


} catch  (PDOException $e) {

    echo 'Erreur : ' . $e->getMessage();

}

?>

<?php include '../inc/img/footer.inc.php'; ?>
