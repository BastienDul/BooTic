<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./inc/css/styles.css">
    <title>BooTic | Header</title>
</head>

<body>

    <!-- HEADER -->
    <header class="container-fluid text-light p-3 align-items-center">

        <nav class="navbar sticky-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><span class=" bg-secondary p-1 rounded text-dark">Boo<span class="text-light">Tic</span></span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                <a class="navbar-brand" href="#"><span class=" bg-secondary p-1 rounded text-dark">Boo<span class="text-light">Tic</span></span></a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">Inscription</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Connexion</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">Boutique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Panier</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
          <hr>
    </header>
</body>

</html>