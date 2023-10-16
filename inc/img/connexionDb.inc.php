<?php

// Si je me connecte en local

try{
    $username = "root";
    $password = '';
    $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
    $maBase = new PDO($dsn, $username, $password);
    $maBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
  }

// si je me connecte dans webHost

// try {
//     $username = "id21170761_dbbootic";
//     $password = 'Dbbootic1!';
//     $dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
//     $maBase = new PDO($dsn, $username, $password);
//     $maBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }  catch (PDOException $e) {
//     echo 'Erreur : ' . $e->getMessage();
//   }


?>