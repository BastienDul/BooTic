<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer>
    </script>
  <script src="https://kit.fontawesome.com/2a53f181be.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./inc/css/styles.css">
  <title>BooTic | Vêtement de haute couture</title>
</head>

<body>

  <?php include './inc/img/header.inc.php'; ?>

  <main class="">

    <div class="container-fluid">
        <div class="col-12 mx-auto text-center produit-centrage">
          <div class="card p-2" >
            <div class="row text-center align-items-center">
              <div class="col-4">
                <img src="./inc/img/BOOTIC_IMG/casquettes/casquette_azur.webp" class="img-fluid rounded-start" alt="photo casquette">
              </div>
              <div class="col-8">
                <div class="card-body card-body-padding">
                  <h5 class="card-title">Casquette Azur</h5>
                  <p class="card-text mt-5">Casquette azur : Élégante, estivale, et indispensable pour un look stylé.</p>
                  <p class="card-text">prix : 150€</p>
                  <p class="card-text">matière : coton de coton</p>
                  <button type="submit" class="btn btn-secondary mt-5">Ajouter au panier</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

  </main>

  <?php include './inc/img/footer.inc.php'; ?>

</body>

</html>