<?php

function connexionBaseDeDonnee()
{
    try {
        $username = "root";
        $password = '';
        $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
        $maBase = new PDO($dsn, $username, $password);
        $maBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $maBase;
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
}


function infosProfil($pseudo)
{
    $maBase = connexionBaseDeDonnee();
    $req = ("SELECT * FROM t_membre WHERE pseudo = '$pseudo'");
    $profil = $maBase->prepare($req);
    $profil->execute();
    if ($profil->rowCount() == 1) {
        return $profil->fetch(); // Accès a la première ligne de résultat
    } else {
        throw new Exception('Aucun profil ne correspond au pseudo ' . $pseudo . '');
    }
}


