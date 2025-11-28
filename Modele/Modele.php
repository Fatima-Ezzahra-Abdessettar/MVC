<?php

// Renvoie la liste des billets du blog
function getBillets() {
    $bdd = getBdd();
    $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
            . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
            . ' order by BIL_ID desc');
    return $billets;
}

// Renvoie les informations sur un billet
function getBillet($idBillet) {
    $bdd = getBdd();
    $billet = $bdd->prepare('select BIL_ID as id, BIL_DATE as date,'
            . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
            . ' where BIL_ID=?');
    $billet->execute(array($idBillet));
    if ($billet->rowCount() == 1)
        return $billet->fetch();  // Accès à la première ligne de résultat
    else
        throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
}

// Renvoie la liste des commentaires associés à un billet
function getCommentaires($idBillet) {
    $bdd = getBdd();
    $stmt = $bdd->prepare('SELECT COM_ID AS id, COM_DATE AS date,
            COM_AUTEUR AS auteur, COM_CONTENU AS contenu
            FROM T_COMMENTAIRE
            WHERE BIL_ID = ?');
    $stmt->execute([$idBillet]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupère tous les résultats 
    //sous forme de tableau associatif
}

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
    $bdd = new PDO('mysql:host=mysql;dbname=monblog;charset=utf8', 'root',
            'mamapapa123', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}