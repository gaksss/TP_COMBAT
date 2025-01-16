<?php

include_once '../utils/autoloader.php';
require_once '../utils/db.php';





?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP_Combat</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body>
    <div class="container">
        <header>
            <img src="./assets/img/Logo.webp" alt="Logo" class="logo">
            <h1>TP Jeu de Fight</h1>
            <p>Un jeu de fight au tour par tour en PHP pour apprendre les bases de la POO</p>
        </header>
        <main>
            <h2>Créez votre hero</h2>
            <form class="hero-form" action="../process/createPseudo.php" method="post">
                <label for="pseudo">Entrez votre pseudo</label>
                <input type="text" id="pseudo" name="pseudo" placeholder="Nom" required>
                <input type="submit" value="Créer"></input>
            </form>
        </main>
    </div>
</body>

</html>