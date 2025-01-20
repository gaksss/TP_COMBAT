<?php
require_once '../utils/autoloader.php';


// VALIDATION DE FORMULAIRE

$heroRepository = new HeroRepository();
$hero = $heroRepository->find($_POST['hero_id']);

if (!$hero) {
    header('Location: ../public/choice-hero.php');
    exit;
}

$monster = new Goblin();

session_start();

$_SESSION['hero'] = $hero;
$_SESSION['monster'] = $monster;

header('Location: ../public/fight.php');
exit;