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
</head>

<body>
<?php var_dump($hero->getHealth()) ?>
<?php var_dump($monster->getHealth()) ?>
    <?php while ($hero->getHealth() > 0 && $monster->getHealth() > 0): ?>
        <p><?= $hero->getName() ?> attaque <?= $monster->getName() ?></p>

        <?php $hero->hit($monster) ?>

        <p><?= $hero->getName() ?> inflige 15 dégats</p>

        <!-- Si le monstre ne survit pas à l'attaque du héros -->
        <?php if ($monster->getHealth() > 0): ?>
            <p><?= $monster->getName() ?> attaque <?= $hero->getName() ?></p>

            <?php $monster->hit($hero) ?>

            <p><?= $monster->getName() ?> inflige 15 dégats</p>
        <?php endif ?>

    <?php endwhile ?>
<?php var_dump($hero->getHealth()) ?>
<?php var_dump($monster->getHealth()) ?>
</body>

</html>