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
$gobelin = $_SESSION['gobelin'];

if ($hero->getHealth() > 0 && $gobelin->getHealth() > 0) {
    $hero->hit($gobelin);
    if ($gobelin->getHealth() > 0) {
        $gobelin->hit($hero);
    }
}


// Mettre à jour les valeurs de santé dans la session
$_SESSION['hero'] = $hero;
$_SESSION['gobelin'] = $gobelin;

$heroRepository = new HeroRepository();

$heroRepository->updateHp($hero->getId(), $hero->getHealth());

if ($hero->getHealth() == 0) {
    $heroRepository->killHero($hero->getId());
}

// Retourner les valeurs de santé mises à jour en JSON
echo json_encode([
    'heroHealth' => $hero->getHealth(),
    'monsterHealth' => $gobelin->getHealth()
]);
