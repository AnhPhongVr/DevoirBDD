<html>
<head>
	<title>Requête5</title>
</head>
<body>
	<p>Bonjour à tous, nous allons répondre à <b>la cinquieme requête</b> sur cette page.</p>
	<p>La liste de films qui sont projetés la semaine précédente dans lesquels un même acteur a joué sont :</p>


	<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bddexo; charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
	$req = $bdd->prepare("SELECT film.titre, film.acteur
    FROM film JOIN projection ON projection.idFilm = film.idFilm
    WHERE projection.date >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY 
    AND projection.date < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY 
    ");
    while ($donnees = $req->fetch())
    {
        echo 'il y a ' . $donnees['titre'] . ' le '. $donnees['date'] . ' à ' . $donnees['horaire'] . ' à ' . $donnees['ville'] . '<br />';
    }

    $req->closeCursor();
	?>

	<p>Pour revenir à la page d'accueil, <a href="index.php">cliquez ici</a>.</p>
</body>
</html>