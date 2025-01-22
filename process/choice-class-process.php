<?php
require_once '../utils/autoloader.php';


session_start();



/**
 * @var Hero $hero
 */
$hero = $_SESSION['hero'];

$heroRepository = new HeroRepository();

$heroRepository->affectSkin($hero->getId(), $_POST["imgHero"]);

$_SESSION['hero'] = $hero;
$_SESSION['gobelin'] = $gobelin;


header('Location: ../public/fight.php');
