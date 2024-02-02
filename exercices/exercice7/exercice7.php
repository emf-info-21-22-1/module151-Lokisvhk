<?php
try {
	$bdd = new PDO('mysql:host=localhost;dbname=nomDB', 'root', 'pwd');
	// On récupère tout le contenu de la table jeux_vidéos
	$sqlQuery = 'SELECT titre FROM jeux_video';
	$titreJeuxStatement = $bdd->prepare($sqlQuery);
	$titreJeuxStatement->execute();
	$jeux = $titreJeuxStatement->fetchAll();
} catch (Exception $e) {
	echo '' . $e->getMessage() . '';
}

// Si tout va bien, on peut continuer
foreach ($jeux as $jeu) {
	// Affichage du titre du jeu
	echo $jeu['titre'] . '<br>';
}

// Fermeture du curseur
$titreJeuxStatement->closeCursor();
?>