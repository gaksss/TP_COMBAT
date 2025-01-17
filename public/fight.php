<?php


include_once '../utils/autoloader.php';
require_once '../utils/db.php';

session_start();

$monster = new Monster();



$manager = new FightsManager();

$hero = $manager->getHeroInfo();


$monster->setRandomType();
$monster->generateAd();
$monster->generateHp();
$monster->generateSkin_path();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <script defer src="./assets/js/fight.js"></script>
</head>

<body>
    <article class="monsterCard">
        <img class="monsterImg" src="<?= $monster->getSkin_path() ?>" alt="">
        <h3 id="monsterHp"><?= $monster->getHp() ?>PV</h3>
        <h3 id="monsterAd"><?= $monster->getAd() ?>AD</h3>
    </article>

    <article class="heroCard">
        <img src="<?= $hero->getSkin_path() ?>" alt="Modele du nain" class="hero">
        <h3 id="heroHp"><?= $hero->getHp() ?>PV</h3>
    </article>
    <button id="attackButton">Attaquer</button>
</body>

</html>