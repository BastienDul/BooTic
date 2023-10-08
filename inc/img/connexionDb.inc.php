<?php

$username = "root";
$password = '';
$dsn = 'mysql:host=localhost;dbname=dbbootic;port=3306;charset=utf8';
$maBase = new PDO($dsn, $username, $password);
$maBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>