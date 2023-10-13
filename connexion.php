<?php include './inc/img/header.inc.php'; ?>

<?php include './inc/img/connexionDb.inc.php'; ?>

<main>


    <?php

    try {

        // Requete pour avoir accès au infos de ma table t_membre pour verifier par la suite si l'utilisateur existe bien !
        $req = $maBase->query('SELECT * FROM t_membre');



        // page de connexion
        echo '   <div class="container form-login">
                        <div class="row bg-light p-5 rounded">
                            <div class="col ">
                                <form method="post" action="admin/admin.php?action=L">
                                    <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                                    <input type="text" name="pseudo" class="form-control shadow" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                                    <input type="password" name="motdepasse" class="form-control shadow" id="exampleInputPassword1">
                                    </div>
                                    <input type="submit" class="btn btn-success" value="Se connecter">
                                </form> 
                            </div>
                        </div>
                    </div>';


    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }





    ?>
</main>

<?php include './inc/img/footer.inc.php'; ?>