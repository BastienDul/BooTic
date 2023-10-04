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
    <div class="container ">
      <div class="row panier-centrage">
        <div class="col-12 ">
          <table class="table table-bordered">
            <thead>
              <tr class="text-center">
                <th scope="col" colspan="4">Panier</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Produit</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Action</th>
              </tr>
              <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">Total</th>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row" colspan="2" class="text-center"><button class="btn btn-secondary" type="submit">Valider</button></th>
                <td colspan="2" class="text-center"><button class="btn btn-secondary" type="reset">Vider</button></td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    </div>

  </main>

  <?php include './inc/img/footer.inc.php'; ?>

</body>

</html>