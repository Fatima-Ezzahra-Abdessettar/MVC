<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titre ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Contenu/style.css">
</head>

<body>

<header class="header">
    <div class="container">
        <a href="../index.php" class="logo">Mon Blog</a>
        <nav class="menu">
            <a href="../index.php">Accueil</a>
            <a href="vue/about.php">À propos</a>
        </nav>
    </div>
</header>

<div id="global">
    <h1 id="titreBlog">Mon Blog</h1>

    <main id="contenu">
        <?= $contenu ?>
    </main>

    <footer id="piedBlog">
        Blog réalisé avec PHP, HTML5 et CSS moderne.
    </footer>
</div>

</body>
</html>