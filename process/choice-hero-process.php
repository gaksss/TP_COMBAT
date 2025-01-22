<?php
require_once '../utils/autoloader.php';

session_start();

// VALIDATION DE FORMULAIRE

$heroRepository = new HeroRepository();
$hero = $heroRepository->find($_POST['hero_id']);

if (!$hero) {
    header('Location: ../public/choice-hero.php');
    exit;
}

$gobelin = new Goblin();

session_start();

$_SESSION['hero'] = $hero;
$_SESSION['gobelin'] = $gobelin;

header('Location: ../public/fight.php');
exit;