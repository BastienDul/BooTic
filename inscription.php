      
    <?php include './inc/img/header.inc.php'; ?>

    <main class="">

    <form class="form-inscription container text-center w-50" method="post" action="admin/admin.php?action=C">
        
        <div class="row text-start bg- p-3 bg-dark text-light rounded-3">
            <div class="col-12 mb-3 text-center">
                <h2>Inscrivez-vous</h2>
            </div>
            <div class="col-6 mt-1 w-50">
                <input name="pseudo" type="text" class="w-100"  placeholder="Pseudo" required>
            </div>
            <div class="col-6 mt-1  w-50">
                <input name="motdepasse" type="password" class="w-100" placeholder="Votre mot de passe" required>
            </div>
            <div class="col-6 w-50 mt-1 ">
                <input name="nom" type="text" class="w-100" placeholder="Nom" required>
            </div>
            <div class="col-6 w-50 mt-1 ">
                <input name="prenom" type="text" class="w-100" placeholder="Prénom" required>
            </div>
            <div class="col-12 mt-1 ">
                <input name="email" type="email" class="w-100" name="" id="" placeholder="votreemail@email.fr" required>
            </div>
            <div class="col-12">
                <h3 class="fs-6 mt-1">Vous êtes :</h3>
            </div>
            <div class="col-2 mt-1 form-check d-lg-flex">
                    <div class="form-check col-12">
                        <input class="form-check-input" type="radio"  name="genre" value=h id="flexRadioDefault1" required>
                        <label class="form-check-label" for="flexRadioDefault1">Homme</label>
                      </div>
                      <div class="form-check col-12">
                        <input class="form-check-input" type="radio"  name="genre" value=f id="flexRadioDefault2" required>
                        <label class="form-check-label" for="flexRadioDefault2">Femme</label>
                      </div>
            </div>
            <div class="col-12 mt-1 ">
                <input name="ville" type="text" class="w-100" name="" id="" placeholder="Ville" required>
            </div>
            <div class="col-12 mt-1 ">
                <input name="codepostal" type="number" class="w-100" name="" id="" placeholder="Code Postal" required>
            </div>
            <div class="col-12 mt-1 ">
                <textarea name="adresse" class="w-100" id="" cols="18" rows="1" placeholder="Votre adresse" required></textarea>
            </div>
            <div class="col-12 mt-5 text-center">
                <input type="submit" class="btn btn-success" value="Inscription">
            </div>
        </div>
    </form>

    </main>

    <?php include './inc/img/footer.inc.php'; ?>