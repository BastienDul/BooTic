<?php include './inc/img/header.inc.php'; 
include './inc/img/connexionDb.inc.php';
?>

<main class="row">
<?php
try {
    include './inc/img/connexionDb.inc.php';

    $req = $maBase->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie)');

    
    $res = $req->fetchAll();
    echo "<div class=\"container-fluid text-center mb-5 pb-5\">";
    echo "<div class=\"row mx-auto\">";
    echo"<h1 class=\"mt-3\">Les vêtements </h1>";
    foreach ($res as $key => $value) {

        echo "<div class=\"col-12 col-md-4 col-lg-3 my-3 col-xxl-2 \">";
        echo "<div class=\"card mx-auto\" style=\"width: 16rem;\">";
        echo "<img class=\"img-fluid card-img-top\" src=\"inc/img/BOOTIC_IMG/$value[8]\" alt=\"Card image cap\">";
        echo "<div class=\"card-body\">";
        echo "<h5 class=\"card-title text-center\">$value[3]</h5>";
        echo "<p class=\"card-text text-center \">$value[9]€  </p>";
        echo "<a href=\"panier.php?id=$value[0]\" class=\"btn btn-secondary m-2\">Ajouter au panier</a>";
        echo "<a href=\"produit.php?id=$value[0]\" class=\"btn btn-secondary m-2\">Détails</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>"; 

    }

     
        echo "</div>";  
        echo "</div>";  
    
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}

 ?>
</main> 

<?php include './inc/img/footer.inc.php'; ?>