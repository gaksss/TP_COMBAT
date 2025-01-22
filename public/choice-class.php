<?php

require_once '../utils/autoloader.php';

$heroRepository = new HeroRepository();

$heroes = $heroRepository->findAll();

if (!$heroes) {
    header("Location: ./create-hero.php");
    exit;
}
session_start();

/**
 * @var Hero $hero
 */
$hero = $_SESSION['hero'];

$knight = new Knight($hero->getId());
$elfe = new Elfe($hero->getId());
$nain = new Nain($hero->getId());


$heroes = [$knight, $elfe, $nain];
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
    <ul>
        <li class="title">Choisis ta classe</li>
        <div id="containerCard">
            <?php foreach ($heroes as $hero) {
            ?>
                <form action="../process/choice-class-process.php" method="post">
                    <li>
                        <input type="hidden" name="idHero" value="<?= htmlspecialchars($hero->getId()); ?>">
                        <input type="hidden" name="imgHero" value="<?= htmlspecialchars($hero->getSkin_path()); ?>">
                        <button id="cardHeroChoice" type="submit">
                            <img src="<?= htmlspecialchars($hero->getSkin_path()); ?>" alt="image du Héro"></button>
                        <p><?= htmlspecialchars($hero->getName()); ?></p>
                    </li>
                </form>

            <?php
            }
            ?>
        </div>
    </ul>
</body>

</html>