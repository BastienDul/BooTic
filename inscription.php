<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"
        defer>
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

    <form class="form-inscription  container text-center w-50">
        
        <div class="row text-start bg- p-3 bg-dark text-light rounded-3">
            <div class="col-12 mb-3 text-center">
                <h2>Inscrivez-vous</h2>
            </div>
            <div class="col-6 mt-1 w-50">
                <input name="Inscription" type="text" class="w-100"  placeholder="Pseudo" required>
            </div>
            <div class="col-6 mt-1  w-50">
                <input name="Inscription" type="password" class="w-100" placeholder="Votre mot de passe" required>
            </div>
            <div class="col-6 w-50 mt-1 ">
                <input name="Inscription" type="text" class="w-100" placeholder="Prénom" required>
            </div>
            <div class="col-6 w-50 mt-1 ">
                <input name="Inscription" type="text" class="w-100" placeholder="Nom" required>
            </div>
            <div class="col-12 mt-1 ">
                <input name="Inscription" type="email" class="w-100" name="" id="" placeholder="votreemail@email.fr" required>
            </div>
            <div class="col-12">
                <h3 class="fs-6 mt-1">Vous êtes :</h3>
            </div>
            <div class="col-12 mt-1 form-check d-lg-flex">
                    <div class="form-check col-6">
                        <input class="form-check-input" name="Inscription" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                        <label class="form-check-label" for="flexRadioDefault1">Homme</label>
                      </div>
                      <div class="form-check col-6">
                        <input class="form-check-input" name="Inscription" type="radio" name="flexRadioDefault" id="flexRadioDefault2" required>
                        <label class="form-check-label" for="flexRadioDefault2">Femme</label>
                      </div>
            </div>
            <div class="col-12 mt-1 ">
                <input name="Inscription" type="text" class="w-100" name="" id="" placeholder="Ville" required>
            </div>
            <div class="col-12 mt-1 ">
                <input name="Inscription" type="number" class="w-100" name="" id="" placeholder="Code Postal" required>
            </div>
            <div class="col-12 mt-1 ">
                <textarea name="" class="w-100" id="" cols="18" rows="1" placeholder="Votre adresse" required></textarea>
            </div>
            <div class="col-12 mt-5 text-center">
                <button name="Inscription" type="submit" class="btn btn-secondary">Soumettre</button>
            </div>
        </div>
    </form>

    </main>

    <?php include './inc/img/footer.inc.php'; ?>

</body>

</html>