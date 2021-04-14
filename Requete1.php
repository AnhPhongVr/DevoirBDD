<!DOCTYPE html>
<html>
<head>
	<title>Requête1</title>
</head>
<body>
	<p>Bonjour à tous, nous allons répondre à <b>la première requête</b> sur cette page.</p>
	<p>La liste des films qui seront projetés à <b><?php echo $_POST['ville']; ?></b>, le <b><?php echo $_POST['date']; ?></b> à <b><?php echo $_POST['heure']; ?></b> est :</p>
<!-- 
	$bdd = new PDO('mysql:host=localhost;dbname=test,charset=utf8', 'root', 'root')
	<?php 
	$req = $bdd->query("SELECT film.titre, projection.date FROM film JOIN projection ON film.idFilm - projection.idFilm JOIN salle ON projection.idSalle = salle.cinema = ? AND projection.horaire >= ? AND DATE(projection.date) = ?")
	$req->execute(array($_POST['ville'], $_POST['date'], $_POST['horaire']))	
	?>
-->
	<p>Pour revenir à la page d'accueil, <a href="index.php">cliquez ici</a>.</p>
</body>
</html>
