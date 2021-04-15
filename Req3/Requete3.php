<!DOCTYPE html>
<html>
<head>
	<title>Requête3</title>
</head>
<body>
	<p>Bonjour à tous, nous allons répondre à <b>la troisième requête</b> sur cette page.</p>
	<p>La liste des cinéma qui diffusent <b><?php echo $_POST['film']; ?></b> est :</p>



	while ($donnees = $req->fetch())
{
	echo 'Il y a le cinéma ' . $donnees['nomCinema'] . ' qui diffuse '. $donnees['titre'] . '<br />';
}

$req->closeCursor();
	?>

	<p>Pour revenir à la page d'accueil, <a href="index.php">cliquez ici</a>.</p>
</body>
</html>
