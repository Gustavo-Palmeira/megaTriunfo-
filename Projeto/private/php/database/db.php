<?php

require $_SERVER['DOCUMENT_ROOT'] . "/Mega-Triunfo/Projeto/private/php/database/config.php";

try {

    $database = new PDO($dsn, $user, $password);
} catch (PDOException $error) {

    echo 'Connection failed: ' . $error->getMessage();
}
