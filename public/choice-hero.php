<?php

require_once '../utils/autoloader.php';

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
</head>

<body>
    <?php
    /**
     * @var Hero $hero
     */
    foreach ($heroes as $hero):  ?>

        <form action="../process/choice-hero-process.php" method="POST">
            <input type="hidden" name="hero_id" value="<?= htmlspecialchars($hero->getId()) ?>">
            <input type="submit" value="<?= htmlspecialchars($hero->getName()) ?>">
        </form>

    <?php endforeach  ?>
</body>

</html>