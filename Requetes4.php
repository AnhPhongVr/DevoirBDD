<!DOCTYPE html>
<html>
<head>
<title
	<title>Requetes4</title>
</head>
<body>
	<p>Bonjour à tous, nous allons répondre à <b> la quatrième requete</b>sur cette page.</p>
	<p>La liste des entreprises qui ont projeté plus de 10 films pendant chaque mois de l'année <b><?php echo $_POST['date']; ?></b> à <b><?php echo $_POST['ville'];?></b>est:</p>
	<?php

	try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bddexo; charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

	$req = $bdd->query("SELECT entreprise.nom, FROM entreprise JOIN cinéma ON entreprise.idEntreprise = cinéma.idEntreprise
	JOIN salle ON salle.idCinema = cinéma.idCinema JOIN projection ON projection.idSalle = salle.idSalle JOIN film ON film.idFilm = projection.idFilm
	WHERE cinéma.ville = ? AND YEAR(projection.date) =? AND (SELECT COUNT(projection.idProjection) FROM entreprise JOIN cinéma ON entreprise.idEntreprise = cinéma.idEntreprise JOIN salle ON salle.idCinema = cinéma.idCinema")
	
	?>