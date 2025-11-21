<?php $titre = "Mon Blog - " . $billet['titre']; ?>

<?php ob_start(); ?>
<!-- Bouton de retour -->
<div class="back-btn-container">
    <a href="index.php" class="back-btn">← Retour à l’accueil</a>
</div>
<article class="card">
    <header>
        <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
        <time><?= $billet['date'] ?></time>
    </header>
    <p><?= $billet['contenu'] ?></p>
</article>

<hr />
<header>
    <h1 id="titreReponses">Réponses à : <?= $billet['titre'] ?></h1>
</header>
<div class="comments">
    <?php if (empty($commentaires)): ?>
        <p class="no-comments">Aucun commentaire pour le moment...</p>
    <?php else: ?>
        <?php foreach ($commentaires as $commentaire): ?>
            <div class="comment-card">
                <div class="comment-author">
                    <?= htmlspecialchars($commentaire['auteur']) ?>
                </div>
                <div class="comment-content">
                    <?= nl2br(htmlspecialchars($commentaire['contenu'])) ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>
