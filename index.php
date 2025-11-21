<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Mon Blog</title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
                <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
            </header>
            <h1 class="title">LES BILLETS</h1>
            <div id="contenu">
                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8',
                        'root', 'mamapapa123');
                $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
                        . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
                        . ' order by BIL_ID desc');
                foreach ($billets as $billet):
                    ?>
                    <article>
                        <header>
                            <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
                            <time><?= $billet['date'] ?></time>
                        </header>
                        <p><?= $billet['contenu'] ?></p>
                    </article>
                    <hr />
                <?php endforeach; ?>
                <h1 class="title">LES COMMENTAIRES</h1>
                 <?php
                $comments = $bdd->query('select * from T_COMMENTAIRE'
                        . ' order by COM_ID desc'  );
                foreach ($comments as $comment):
                    ?>
                    <article>
                        <header>
                            <h1 class="titreBillet"><?= $comment['COM_AUTEUR'] ?></h1>
                            <time><?= $comment['COM_DATE'] ?></time>
                        </header>
                        <p><?= $comment['COM_CONTENU'] ?></p>
                    </article>
                    <hr />
                <?php endforeach; ?>
                
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                Blog réalisé avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>
