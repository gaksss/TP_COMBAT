<?php
try {


    $host = "localhost";
    $dbname = "gaksss_tp_combat";
    $login = "gaksss";
    $password = "clementdb404";

    $pdo = new PDO("mysql:host={$host};dbname={$dbname}", $login, $password);
} catch (PDOException $error) {
    echo "Erreur de connexion : " . $error->getMessage();
}
