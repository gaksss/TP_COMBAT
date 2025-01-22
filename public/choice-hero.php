<?php

require_once '../utils/autoloader.php';
session_start();
$heroRepository = new HeroRepository();

$heroes = $heroRepository->findAll();

if (!$heroes) {
    header("Location: ./create-hero.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP COMBAT</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body>
    <div class="container-choice">
        <?php
        /**
         * @var Hero $hero
         */
        foreach ($heroes as $hero):  ?>

            <form class="hero-selection" action="../process/choice-hero-process.php" method="POST">
                <input type="hidden" name="hero_id" value="<?= htmlspecialchars($hero->getId()) ?>">
                <input type="submit" value="<?= htmlspecialchars($hero->getName()) ?>">
                
                <h2><?= $hero->getHealth() ?>PV</h2>
            </form>

        <?php endforeach  ?>
    </div>
</body>

</html>