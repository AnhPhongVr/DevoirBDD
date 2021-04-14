<!DOCTYPE html>
<html>
<head>
	<title>Cinémas à salles multiples du D5P</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="navbar">
		<a href="index.php">1ère requête</a>
		<a href="">2ème requête</a>
		<a href="">3ème requête</a>
		<a href="">4ème requête</a>
		<a href="">5ème requête</a>
	</div>

	<h2>Récupérer la liste des films qui seront projetés à l'endroit, au jour et à l'heure que vous désirez</h2>
	<div class="requete1">
		<form method="POST" action="Requete1.php">
			<label>Nom de la ville :</label><br>
			<input type="text" name="ville"><br>
			<label>Date :</label>
			<input type="date" name="date"><br>
			<label>Heure :</label><br>
			<input type="time" name="heure"><br>
			<br>
			<button type="submit">Rechercher</button>
		</form>
	</div>
</body>
</html>
