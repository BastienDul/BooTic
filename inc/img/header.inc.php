<?php 
session_start();


if (isset($_SESSION['pseudo'])) {
  $pseudo = $_SESSION['pseudo'];
}

include './inc/img/connexionDb.inc.php';


?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"
    defer></script>
  <script type="module" src="./../inc/js/main.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="inc/css/styles.css">
  <title>BooTic | Boutique de haute coutûre</title>
</head>

<body>

  <!-- HEADER -->
  <header class="container-fluid  py-3 align-items-center bg-dark">

    <nav class="navbar sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="/BooTic/"><span class=" p-1 rounded text-light">Boo<span
              class="text-secondary">Tic</span></span></a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header bg-dark">
            <a class="navbar-brand" href="/BooTic/"><span class=" p-1 rounded text-light">Boo<span
                  class="text-secondary">Tic</span></span></a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="/BooTic/inscription.php">Inscription</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/BooTic/connexion.php">Connexion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="/BooTic/">Boutique</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="/BooTic/panier.php">Panier <svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg></a>
              </li>
              <?php if ($pseudo) {
                        echo '<li class="nav-item ">
                        <a class="nav-link active text-light" href="profil.php">Profil</a>
                        </li>';
                    }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <p>Connecté en tant que <?php echo'<span>'.$pseudo.'</span>' ?></p>
</body>

</html>