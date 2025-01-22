<?php

require_once '../utils/autoloader.php';


session_start();
// VALIDATION DE FORMULAIRE


$heroRepository = new HeroRepository();
$hero =  new Hero(0, $_POST['name']);
$heroRepository->create($hero);

header("Location: ../public/choice-hero.php");