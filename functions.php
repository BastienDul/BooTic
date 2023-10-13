<?php

function infosProfil($pseudo){
    $obtenirMaBase = include './inc/img/connexionDb.inc.php';
    $req = "SELECT * FROM t_membre WHERE pseudo = '$pseudo'";
    $profil = $obtenirMaBase->prepare($req);
    if ($profil -> rowCount() == 1) {
        return $profil->fetch(); // Accès a la première ligne de résultat
    } else {
        throw new Exception('Aucun profil ne correspond au pseudo '.$pseudo.'');
    }
}