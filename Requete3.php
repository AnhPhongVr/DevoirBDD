<!DOCTYPE html>
<html>
<head>
	<title>Requête3</title>
</head>
<body>
	<p>Bonjour à tous, nous allons répondre à <b>la troisième requête</b> sur cette page.</p>
	<p>La liste des cinéma qui diffusent <b><?php echo $_POST['film']; ?></b> est :</p>

	<?php 
	    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bddexo; charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

	$req = $bdd->prepare("SELECT cinéma.nomCinema, film.titre, entreprise.nom
								FROM cinéma JOIN salle ON cinéma.idCinema = salle.idCinema
								JOIN projection ON salle.idSalle = projection.idSalle
								JOIN film ON projection.idFilm = film.idFilm
								JOIN entreprise ON entreprise.idEntreprise = cinéma.idEntreprise
						  WHERE film.titre = :film");
	$req->execute(array('film' => $_POST['film']));	

	while ($donnees = $req->fetch())
{
	echo 'Il y a le cinéma ' . $donnees['nomCinema'] . ' qui diffuse '. $donnees['titre'] . '<br />';
}

$req->closeCursor();
	?>

	<p>Pour revenir à la page d'accueil, <a href="index.php">cliquez ici</a>.</p>
</body>
</html>
