<?php $this->titre = 'Mon Blog'; ?>

<img src="public/Blog.jpg" alt="Image du blog" class="imgBlog">

<?php if (empty($billets)) : ?>
    <p class="no-posts">Aucun billet disponible...</p>
<?php else : ?>
    <?php foreach ($billets as $billet) : ?>
    <article class="card">
        <header>
            <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
                <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            </a>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
    </article>
    <?php endforeach; ?>
<?php endif; ?>

