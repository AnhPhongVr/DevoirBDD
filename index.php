<!DOCTYPE html>
<html>
<head>
	<title>Cinémas à salles multiples du D5P</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<nav>
	<div class="navbar">
		<a href="#requete1">1ère requête</a>
		<a href="#requete2">2ème requête</a>
		<a href="#requete3">3ème requête</a>
		<a href="#requete4">4ème requête</a>
		<a href="#requete5">5ème requête</a>
	</div>
	<nav>


	<a name="requete1">
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


	<a name="requete2">
	<h2>Récupérer la liste des films joué par un certain acteur</h2>

	<div class="requete2">
		<form method="POST" action="Requete1.php">
			<label>Nom de l'acteur :</label><br>
			<input type="text" name="acteur"><br>
			<br>
			<button type="submit">Rechercher</button>
		</form>
	</div>


		<a name="requete3">
	<h2>Récupérer la liste de films qui sont projetés dans deux cinémas différents groupés par entreprise/ville</h2>

	<div class="requete3">
		<form method="POST" action="Requete3.php">
			<label>Nom de l'entreprise :</label><br>
			<input type="text" name="entreprise"><br>
			<label>Nom de la ville :</label><br>
			<input type="text" name="ville"><br>
			<label>Nom du cinéma :</label><br>
			<input type="text" name="cinema"><br>
			<button type="submit">Rechercher</button>
		</form>
	</div>



		<a name="requete4">
	<h2>Récupérer la liste d’entreprises qui ont projetées plus de 10 films pendant chaque mois de l’année 2019 à Lyon</h2>

	<div class="requete4">
		<form method="POST" action="Requete1.php">
			<label>Nom de l'acteur :</label><br>
			<input type="text" name="acteur"><br>
			<br>
			<button type="submit">Rechercher</button>
		</form>
	</div>



		<a name="requete5">
	<h2>Récupérer la liste de films quisont projetés la semaine précédentedans lesquels un mêmeacteur ajoué</h2>

	<div class="requete5">
		<form method="POST" action="Requete1.php">
			<label>Nom de l'acteur :</label><br>
			<input type="text" name="acteur"><br>
			<br>
			<button type="submit">Rechercher</button>
		</form>
	</div>

</body>
</html>
