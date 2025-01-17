<?php
include_once '../utils/autoloader.php';
require_once '../utils/db.php';

session_start();


$manager = new FightsManager();

$hero = $manager->getHeroInfo();




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP_Combat</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body>
    <main>
        <h1>Bienvenue <?= $_SESSION['user'] ?>, choisi ton héro</h1>
        <?= $manager->generateDisplay($hero) ?>

       
    </main>
</body>

</html>