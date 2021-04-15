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


	

	<div class="requete1" id="requete1">
		<h2>Récupérer la liste des films qui seront projetés à l'endroit, au jour et à l'heure que vous désirez</h2>
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


	<div class="requete2" id="requete2">
		<h2>Récupérer la liste des films joué par un certain acteur</h2>
		<form method="POST" action="Requete2.php">
			<label>Nom de l'acteur :</label><br>
			<input type="text" name="acteur"><br>
			<br>
			<button type="submit">Rechercher</button>
		</form>
	</div>


	<div class="requete3" id="requete3">
		<h2>Récupérer la liste de films qui sont projetés dans deux cinémas de votre choix groupés par entreprise/ville</h2>
		<form method="POST" action="Requete3.php">
			<label>Nom du premier cinéma :</label><br>
			<input type="text" name="acteur"><br>
			<label>Nom du deuxième cinéma :</label><br>
			<input type="text" name="acteur"><br>
			<br>
			<button type="submit">Rechercher</button>
		</form>
	</div>


	<div class="requete4" id="requete4">
		<h2>Récupérer la liste d’entreprises qui ont projetées plus de 10 films pendant chaque mois de l’année de votre choix au lieu que vous indiquerez</h2>
		<form method="POST" action="Requetes4.php">
			<label>Date :</label><br>
			<input type="date" name="date"><br>
			<label>Lieu :</label><br>
			<input type="text" name="lieu"><br>
			<br>
			<button type="submit">Rechercher</button>
		</form>
	</div>


	<div class="requete5" id="requete5">
		<h2>Récupérer la liste de films qui sont projetés la semaine précédente dans lesquels un même acteur ajoué</h2>
		<form method="POST" action="Requete5.php">
			<label>Nom de l'acteur :</label><br>
			<input type="text" name="acteur"><br>
			<br>
			<button type="submit">Rechercher</button>
		</form>
	</div>

</body>
</html>
