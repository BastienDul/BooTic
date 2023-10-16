<?php

// on vérifie que la variable de session pseudo existe
if (isset($_SESSION['pseudo'])) {
  $pseudo = $_SESSION['pseudo'];
}
require './inc/img/header.inc.php';
require './functions.php';
?>


<main class="">

  <?php

  if ($pseudo) {
    $membre = infosProfil($pseudo);
  }




  echo '<div class="container-fluid">
          <div class="row flex-column profil-centrage">
              <div class="col-12 text-center mb-5 col-lg-12">


              
                <div class="col-12 p-3 mx-auto text-start rounded-3 bg-light col-lg-6 bg-dark text-light">
                  <h1 class="text-center pt-3">Bonjour ' . $_SESSION['pseudo'] . '  </h1>
                  <p class="text-center pb-3">Bienvenue sur ton profil.</p>
                  <h3 class="text-center pb-3">Informations à propos du profil :</h3>
                  <p class="g-0 m-0 p-0">Email : ' . $membre['email'] . ' </p>
                  <p class="g-0 m-0 p-0">ville : ' . $membre['ville'] . ' </p>
                  <p class="g-0 m-0 p-0">Code Postal : ' . $membre['cp'] . '</p>
                  <p class="g-0 m-0 p-0">Adresse : ' . $membre['adresse'] . ' </p>
                  <div class="col-12 text-center">
                  <a class="g-0 mt-3 btn btn-success" href="admin/admin.php?deconnexion=1">Deconnexion</a>
                  </div>
                  
                </div>
          </div>
        </div>';



  ?>


</main>

<?php include './inc/img/footer.inc.php'; ?>