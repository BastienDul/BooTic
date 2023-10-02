<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"
        defer>
    </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./inc/css/styles.css">
    <title>BooTic | connexion</title>
</head>

<body>

    <?php include './inc/img/header.inc.php'; ?>

    <main>
        <div class="container form-login">
            <div class="row bg-light p-5 rounded">
                <div class="col ">
                    <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                          <input type="email" class="form-control shadow" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                          <input type="password" class="form-control shadow" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                      </form> 
                </div>
            </div>
        </div>
    </main>

    <?php include './inc/img/footer.inc.php'; ?>

</body>

</html>