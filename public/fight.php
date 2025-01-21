<?php

require_once '../utils/autoloader.php';

session_start();

/**
 * @var Hero $hero
 */
$hero = $_SESSION['hero'];

/**
 * @var Monster $monster
 */
$monster = $_SESSION['monster'];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <script defer src="./assets/js/fight-animation.js"></script>
</head>

<body class="fight-body">
    <main>


        <form action="../process/fight-process.php">
            <input id="attackBtn" type="submit" value="Attaquer">
        </form>
        <div class="hero-container">
            <h2><?= $hero->getName() ?></h2>
            <h2 class="heroPv"><?= $hero->getHealth() ?>PV</h2>
            <img class="hero" src="./assets/img/chevalier.png"></img>
        </div>
        <div class="monster-container">
            <h2><?= $monster->getName() ?></h2>
            <h2><?= $monster->getHealth() ?>PV</h2>
            <img class="goblin" src="./assets/img/Gobelin.png"></img>
        </div>
    </main>
</body>

</html>