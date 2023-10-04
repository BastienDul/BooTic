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
    <link rel="stylesheet" href="../inc/css/styles.css">
    <title>BooTic | Vêtement de haute couture</title>
</head>

<body>

    <?php include '../inc/img/header.inc.php'; ?>

    <main>
        <div class="container">
            <div class="row text-start">
                <form action="">
                    <div class="col-12 text-center">
                        <h3>Affichage des produits</h3>
                        <h4>Ajout des produits</h4>
                    </div>
                    <div class="col-12">
                        <h3>Formulaire produit</h3>
                    </div>
                    <div class="col-12">
                        <label for="">reference</label>
                        <input type="text" class="w-100" placeholder="11-d-23">
                    </div>
                    <div class="col-12">
                        <label for="">categorie</label>
                        <input type="text" class="w-100" placeholder="tshirt">
                    </div>
                    <div class="col-12">
                        <label for="">titre</label>
                        <input type="text" class="w-100" placeholder="tshirt col V">
                    </div>
                    <div class="col-12">
                        <label for="">description</label>
                        <textarea name="" id="" cols="30" rows="10" class="w-100" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ab perferendis, ipsam maiores optio assumenda suscipit eveniet aspernatur maxime!"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="">couleur</label>
                        <input type="text" class="w-100" placeholder="Bleu">
                    </div>
                    <div class="col-12">
                        <select name="" id="">
                            <label for="">Taille</label>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Homme
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                            Femme
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="image">Sélectionnez une image :</label>
                        <input type="file" name="image" id="image" accept="image/*">
                        <input type="submit" value="Télécharger">
                    </div>
                    <div class="col-12">
                        <label for="">prix :</label>
                        <input type="number" class="w-100" placeholder="Prix">
                    </div>
                    <div class="col-12">
                        <label for="">stock</label>
                        <input type="number" class="w-100" placeholder="">
                    </div>
                    <div class="col-6">
                        <button class="btn btn-secondary mt-3 text-center">Soummettre</button>
                    </div>
                    
                </form>

            </div>
        </div>
    </main>

    <?php include '../inc/img/footer.inc.php'; ?>

</body>

</html>