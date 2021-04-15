<!DOCTYPE html>
<html>
<head>
<title
	<title>Requetes4</title>
</head>
<body>
	<p>Bonjour à tous, nous allons répondre à <b> la quatrième requete </b>sur cette page.</p>
	<p>La liste des entreprises qui ont projeté plus de 3 films pendant chaque mois de l'année <b><?php echo $_POST['date']; ?></b> à <b><?php echo $_POST['lieu'];?></b> est:</p>
	<?php

	try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bddexo; charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

	$req = $bdd->prepare("
    SELECT entreprise.nom 
    FROM entreprise JOIN cinéma ON entreprise.idEntreprise = cinéma.idEntreprise
	                JOIN salle ON salle.idCinema = cinéma.idCinema 
                    JOIN projection ON projection.idSalle = salle.idSalle 
                    JOIN film ON film.idFilm = projection.idFilm
	WHERE cinéma.ville = :ville AND YEAR(projection.date) = YEAR(:annee) AND
	(SELECT COUNT(projection.idProjection) 
    FROM entreprise JOIN cinéma ON entreprise.idEntreprise = cinéma.idEntreprise 
                    JOIN salle ON salle.idCinema = cinéma.idCinema
                    JOIN film ON film.idFilm = projection.idFilm
    WHERE YEAR(projection.date) = YEAR(:annee)
    GROUP BY MONTH(projection.date)) > 3");
	$req->execute(array('ville' => $_POST['lieu'], 'annee' => $_POST['date']));

    while ($donnees = $req->fetch())
    {
        echo 'il y a ' . $donnees['nom'] . '<br />';
    }

    $req->closeCursor();
	
	?>

    <p>Pour revenir à la page d'accueil, <a href="index.php">cliquez ici</a>.</p>
</body>
</html>
