<!DOCTYPE html>
<html>
<head>
	<title>Requête3</title>
</head>
<body>
	<p>Bonjour à tous, nous allons répondre à <b>la troisième requête</b> sur cette page.</p>
	<p>La liste des films qui seront projetés à <b><?php echo $_POST['ville']; ?></b>, par <b><?php echo $_POST['entreprise']; ?></b> au cinéma <b><?php echo $_POST['cinéma']; ?></b> est :</p>
<!-- 
	$bdd = new PDO('mysql:host=localhost;dbname=test,charset=utf8', 'root', 'root')
	<?php 
	$req = $bdd->query("SELECT film.titre JOIN salle ON salle.idSalle = projection.idSalle JOIN cinéma ON salle.idCinema = cinéma.idCinema JOIN entreprise ON entreprise.idEntreprise = cinéma.idEntreprise WHERE (SELECT COUNT(DISTINCT cinéma.nomCinema) FROM film JOIN projection ON projection.idFilm = film.idFilm JOIN salle ON salle.idSalle = projection.idSalle JOIN cinéma ON salle.idCinema = cinéma.idCinema JOIN entreprise ON entreprise.idEntreprise = cinéma.idEntreprise ) >= 2 GROUP BY entreprise.nom, cinéma.ville ")
	$req->execute(array($_POST['ville'], $_POST['entreprise'], $_POST['cinéma']))	
	?>
-->
	<p>Pour revenir à la page d'accueil, <a href="index.php">cliquez ici</a>.</p>
</body>
</html>
