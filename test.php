<?php
require 'modele.php';

try {
    $bdd = getBdd();
    echo "Connexion OK !";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
