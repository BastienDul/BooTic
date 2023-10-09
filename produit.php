<?php include './inc/img/header.inc.php'; ?>

<main class="">

  <?php

  $idProduit = $_GET['id'];

  try {

    include './inc/img/connexionDb.inc.php';


    //Ajout de WHERE id_produit = '.$idProduit pour filtrer les resultat par id_produit, comme nous récupérons l'id_produit dans l'url
    $req = $maBase->query('SELECT * FROM t_produit INNER JOIN t_categorie ON (t_produit.id_categorie = t_categorie.id_categorie) WHERE id_produit = '.$idProduit);


    $res = $req->fetchAll();
    foreach ($res as $key => $value) {

      echo '<div class="container-fluid">
        <div class="col-12 mx-auto text-center produit-centrage">
          <div class="card p-2" >
            <div class="row text-center align-items-center">
              <div class="col-12 col-sm-6">
                <img src="inc/img/BOOTIC_IMG/' . $value[12] . '/' . $value[8] . '.webp" class="img-fluid rounded-start" alt="photo casquette">
              </div>
              <div class="col-12 col-sm-6">
                <div class="card-body mt-5 card-body-padding">
                  <h5 class="card-title">' . $value[3] . '</h5>
                  <p class="card-text">'.$value[4].'</p>
                  <p class="card-text">prix : '.$value[9].'€</p>
                  <a href="" class="btn btn-secondary m-2">Ajouter au panier</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>';
    }
  } catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
  }

  ?>



</main>

<?php include './inc/img/footer.inc.php'; ?>