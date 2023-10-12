<?php include '../inc/img/header.inc.php'; ?>


<?php include '../inc/img/connexionDb.inc.php'; ?>

<?php

$creationPage = $_GET['action'];

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! enregistrez les nouveau clients dans la base de données !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

if ($creationPage == "C") {


    // !!! recuperation des données !!!

    $pseudo = strtoupper($_POST['pseudo']);
    $password = $_POST['motdepasse'];
    $nom = strtoupper($_POST['nom']);
    $prenom = strtoupper($_POST['prenom']);
    $email = $_POST['email'];
    $genre = $_POST['genre'];
    $ville = $_POST['ville'];
    $codePostal = $_POST['codepostal'];
    $adresse = $_POST['adresse'];

    // haché le password
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    // !!! VERIFIER QUE LES VARIABLES SONT BIEN SUBMIT !!!

    // echo $pseudo;
    // echo'</br>';
    // echo $passwordHash;
    // echo'</br>';
    // echo $nom;
    // echo'</br>';
    // echo $prenom;
    // echo'</br>';
    // echo $email;
    // echo'</br>';
    // echo $genre;
    // echo'</br>';
    // echo $ville;
    // echo'</br>';
    // echo $codePostal;
    // echo'</br>';
    // echo $adresse;
    // echo'</br>';

    try {

        $req = $maBase->prepare('INSERT INTO t_membre (pseudo, mdp, nom, prenom, email, civilite, ville, cp, adresse) 
     VALUES(:pseudo, :passwordHash, :nom, :prenom, :email, :genre, :ville, :codePostal, :adresse)');


        $req->bindValue(':pseudo', $pseudo, PDO::PARAM_STR_CHAR);
        $req->bindValue(':passwordHash', $passwordHash);
        $req->bindValue(':nom', $nom, PDO::PARAM_STR_CHAR);
        $req->bindValue(':prenom', $prenom, PDO::PARAM_STR_CHAR);
        $req->bindValue(':email', $email, PDO::PARAM_STR_CHAR);
        $req->bindValue(':genre', $genre, PDO::PARAM_STR);
        $req->bindValue(':ville', $ville, PDO::PARAM_STR_CHAR);
        $req->bindValue(':codePostal', $codePostal, PDO::PARAM_INT);
        $req->bindValue(':adresse', $adresse, PDO::PARAM_STR_CHAR);

        if ($req->execute()) {
            echo '<div class="row text-center my-5">
         <div class="col-12">
             <h3>Votre inscription est finis !</h3>
         </div>
    
         <div class="col-12">
             <a href="/bootic/index.php"><input type="text" class="btn btn-success w-25"  value="Retournez a l\'acceuil"></a>
         </div>
     </div>';
        } else {
            echo 'Un problème est survenue !';
        }


    } catch (PDOException $e) {

        echo 'Erreur : ' . $e->getMessage();

    }

} elseif ($creationPage == "L") {

    // && $pseudo == $value[1] && $password == $value[2]
    try {

        $req = $maBase->prepare('SELECT * FROM t_membre WHERE ');

        if ($pseudo == $value[1] && $password == $value[2]) {
            
        }

    } catch (PDOException $e) {

        echo 'Erreur : ' . $e->getMessage();

    }
}




?>

<?php include '../inc/img/footer.inc.php'; ?>