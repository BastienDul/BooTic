<?php 
include './inc/img/header.inc.php';
include './functions.php';
?>



<?php
  if ($pseudo) {
      $membre = infosProfil($pseudo);
  }
?>


<?php include './inc/img/connexionDb.inc.php'; ?>

<main class="">

  <?php



  echo '   <div class="container-fluid">
          <div class="row flex-column profil-centrage">
              <div class="col-12 mx-auto text-center mb-5 col-lg-6">
                  <h1>Bonjour  </h1>
                  <p>Bienvenue sur ton profil.</p>
              </div>
              <div class="col-12 p-3 mx-auto text-left rounded-3 bg-light col-lg-6">
                <h3 class="text-center">Informations à propos du profil :</h3>
                <p>Email : email@email.fr</p>
                <p>ville : Angers</p>
                <p>Code Postal : 49 000</p>
                <p>Adresse : 6 Rue Guillaume Lekeu</p>
              </div>
          </div>
        </div>';



  ?>


</main>

<?php include './inc/img/footer.inc.php'; ?>