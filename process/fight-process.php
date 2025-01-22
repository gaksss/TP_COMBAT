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

if ($hero->getHealth() > 0 && $monster->getHealth() > 0) {
    $hero->hit($monster);
    if ($monster->getHealth() > 0) {
        $monster->hit($hero);
    }
}

// Mettre à jour les valeurs de santé dans la session
$_SESSION['hero'] = $hero;
$_SESSION['monster'] = $monster;

$heroRepository = new HeroRepository();

$heroRepository->updateHp($hero->getId(), $hero->getHealth());

if ($hero->getHealth() == 0) {
    $heroRepository->killHero($hero->getId());
}

// Retourner les valeurs de santé mises à jour en JSON
echo json_encode([
    'heroHealth' => $hero->getHealth(),
    'monsterHealth' => $monster->getHealth()
]);
