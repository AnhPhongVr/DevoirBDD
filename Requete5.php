<html>
<head>
	<title>Requête5</title>
</head>
<body>
	<p>Bonjour à tous, nous allons répondre à <b>la cinquieme requête</b> sur cette page.</p>
	<p>La liste de films qui sont projetés la semaine précedant <b><?php echo $_POST['date']?></b> dans lesquels <b><?php echo $_POST['acteur']?></b> a joué sont :</p>

	<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bddexo; charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $variable = $_POST['acteur'];
	$req = $bdd->prepare('SELECT film.titre, film.acteur, projection.date
    FROM film JOIN projection ON projection.idFilm = film.idFilm
    WHERE projection.date >= DATE(:date) - INTERVAL DAYOFWEEK(DATE(:date))+6 DAY 
    AND projection.date < DATE(:date) - INTERVAL DAYOFWEEK(DATE(:date))-1 DAY
    AND film.acteur LIKE "%' . $variable . '%" ');
    $req->execute(array('date' => $_POST['date'], 'acteur' => $_POST['acteur']));

    while ($donnees = $req->fetch())
    {
        echo 'il y a ' . $donnees['titre'] . ' de '. $donnees['acteur'] . ' le ' . $donnees['date'] . '<br />';
    }

    $req->closeCursor();
	?>

	<p>Pour revenir à la page d'accueil, <a href="index.php">cliquez ici</a>.</p>
</body>
</html>