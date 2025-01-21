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

if ($hero->getHealth() > 0 && $monster->getHealth() > 0):
    $hero->hit($monster);
    if ($monster->getHealth() > 0):

        $monster->hit($hero);

    endif;

endif;



header("Location: ../public/fight.php");
