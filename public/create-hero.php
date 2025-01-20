<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Combat</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="logo.png" alt="Logo" class="logo">
            <h1>TP Combat</h1>
            <p>Un jeu de combat au tour par tour en PHP pour apprendre les bases de la POO</p>
        </header>
        <main>
            <form class="hero-form" action="../process/create-hero-process.php" method="post">
                <h2>Créez votre héros</h2>
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name" placeholder="Entrez un nom" required>
                <button type="submit">Créer</button>
            </form>
        </main>
    </div>
</body>
</html>
