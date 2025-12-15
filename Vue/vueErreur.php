<?php $titre = 'Mon Blog'; ?>
<link rel="stylesheet" href="../Contenu/style.css">
<?php ob_start() ?>
<img src="../public/error.jpg" alt="Image du blog" class="imgBlog">
<p>Une erreur est survenue : <?= $msgErreur ?></p>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>
