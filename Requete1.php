<!DOCTYPE html>
<html>
<head>
	<title>Requête1</title>
</head>
<body>
	<p>Bonjour à tous, nous allons répondre à <b>la première requête</b> sur cette page.</p>
	<p>La liste des films qui seront projetés à <b><?php echo $_POST['ville']; ?></b>, le <b><?php echo $_POST['date']; ?></b> à <b><?php echo $_POST['heure']; ?></b> est :</p>

	<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bddexo; charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
        $req = $bdd->prepare('SELECT projection.idProjection, film.titre, projection.date, projection.horaire, cinéma.ville
                                     FROM film JOIN projection ON film.idFilm = projection.idFilm
                                               JOIN salle ON projection.idSalle = salle.idSalle
                                               JOIN cinéma ON salle.idCinema = cinéma.idCinema
                                     WHERE cinéma.ville = :ville AND projection.horaire >= :horaire AND projection.date = :dates');
        $req->execute(array('ville' => $_POST['ville'],'horaire' => $_POST['heure'], 'dates' => $_POST['date']));

    while ($donnees = $req->fetch())
{
	echo 'il y a ' . $donnees['titre'] . ' le '. $donnees['date'] . ' à ' . $donnees['horaire'] . ' à ' . $donnees['ville'] . '<br />';
}

$req->closeCursor();

?>

	<p>Pour revenir à la page d'accueil, <a href="index.php">cliquez ici</a>.</p>
</body>
</html>
