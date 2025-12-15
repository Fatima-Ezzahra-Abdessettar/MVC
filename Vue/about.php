<?php
$titre = "À propos — Mon Blog";

// Contenu de la page About
ob_start();
?>
<link rel="stylesheet" href="../Contenu/style.css">

<h1 class="titreBillet" style="text-align:center;">À propos</h1>

<div class="card" style="text-align:center;">
     <p style="font-size:1.1rem; line-height:1.8;">
        Bienvenue sur Mon Blog 🌸  
        <br><br>
        Ce site a été créé par <strong> Abdessettar Fatima-Ezzahra </strong> dans le cadre d'un projet universitaire .
        <br>
    </p>
</div>

<div class="card">
    <h2 style="color:#8b7bff; margin-bottom:15px;">-> Pourquoi ce blog ?</h2>
    <p>
        L’objectif est de proposer un endroit calme, agréable et doux visuellement  
        où on peut publier des articles, des notes ou des réflexions.  
        Un espace personnel mais ouvert à tous.
    </p>
</div>

<div class="card">
    <h2 style="color:#ff91a6; margin-bottom:15px;">-> Technologies utilisées</h2>
    <ul style="line-height:1.8;">
        <li>PHP (structure type MVC procédural)</li>
        <li>HTML5 & CSS3</li>
    </ul>
</div>
<?php
$contenu = ob_get_clean();
require 'gabarit.php'; ?>
