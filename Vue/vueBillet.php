<?php $this->titre = "Mon Blog - " . $billet['titre']; ?>
<style>
      /* Section "Laisser un commentaire" */
        .comment-form {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            margin-top: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .comment-form h2 {
            color: #2c3e50;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }
        
        /* Champs du formulaire - STYLES CORRIGÉS */
        .comment-form input[type="text"],
        .comment-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            display: block;
            box-sizing: border-box;
        }
        
        .comment-form textarea {
            min-height: 120px;
            resize: vertical;
        }
        
        /* Bouton Commenter */
        .comment-form input[type="submit"] {
            background-color: #4a6fa5;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: 'Inter', sans-serif;
        }
        
        .comment-form input[type="submit"]:hover {
            background-color: #3a5a8c;
        }
        
        /* Pour cibler spécifiquement le bouton avec classe btn-commenter */
        .btn-commenter {
            background-color: #4a6fa5;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: 'Inter', sans-serif;
        }
        
        .btn-commenter:hover {
            background-color: #3a5a8c;
        }
</style>
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

<header>
    <h1 id="titreReponses">Réponses à : <?= $billet['titre'] ?></h1>
</header>

<div class="comments">
    <?php if (empty($commentaires)) : ?>
        <p class="no-comments">Aucun commentaire pour le moment...</p>
    <?php else : ?>
        <?php foreach ($commentaires as $commentaire) : ?>
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

<!-- **************** FORMULAIRE D'AJOUT DE COMMENTAIRE **************** -->
<h2>Laisser un commentaire</h2>

<form method="post" action="index.php?action=commenter" class="comment-form">

    <input 
        id="auteur" 
        name="auteur" 
        type="text" 
        placeholder="Votre pseudo" 
        required 
    />

    <textarea 
        id="txtCommentaire" 
        name="contenu" 
        rows="4" 
        placeholder="Votre commentaire..." 
        required
    ></textarea>

    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />

    <input type="submit" value="Commenter" class="btn-commenter" />
</form>
