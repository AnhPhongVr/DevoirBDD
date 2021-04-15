<!DOCTYPE html>
<html>
<head>
	<title>Requete3b</title>
</head>
<body>
	<p>Bonjour à tous, nous allons répondre à <b>la troisième requête</b> sur cette page.</p>
	<p>La liste des films qu sont diffusés à <b><?php echo $_POST['cinema']; ?></b> et <b><?php echo $_POST['cinema']; ?></b> est :</p>

	<?php 
	    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bddexo; charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

	$req = $bdd->prepare("SELECT film.titre, cinéma.nomCinema
								FROM film JOIN projection ON projection.idFilm = film.idFilm
								JOIN salle ON salle.idSalle = projection.idSalle
								JOIN cinéma ON salle.idCinema = cinéma.idCinema
								JOIN entreprise ON entreprise.idEntreprise = cinéma.idEntreprise
					  	  WHERE cinéma.nomCinema = :cinema OR cinéma.nomCinema = :cinema");
	$req->execute(array('cinema' => $_POST['cinema'], 'cinema' => $_POST['cinema']));	

	while ($donnees = $req->fetch())
{
	echo 'Il y a ' . $donnees['titre'] . ' diffusé à '. $donnees['nomCinema'] . '<br />';
}

$req->closeCursor();
	?>

	<p>Pour revenir à la page d'accueil, <a href="index.php">cliquez ici</a>.</p>
</body>
</html>
