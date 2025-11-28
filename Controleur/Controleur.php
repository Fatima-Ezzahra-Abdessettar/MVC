<?php

require 'Modele/Modele.php';
// le contrelleur agit comme un intermédiaire entre le modèle et la vue et facilite la gestion des requêtes et des réponses.
// Affiche la liste de tous les billets du blog
function accueil() {
    $billets = getBillets();
    require 'Vue/vueAccueil.php';
}

// Affiche les détails sur un billet
function billet($idBillet) {
    $billet = getBillet($idBillet);
    $commentaires = getCommentaires($idBillet);
    require 'Vue/vueBillet.php';
}

// Affiche une erreur
function erreur($msgErreur) {
    require 'Vue/vueErreur.php';
}

