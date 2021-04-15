<!DOCTYPE html>
<html>
<head>
    <title>Requête2</title>
</head>
<body>
    <p>Bonjour à tous, nous allons répondre à <b>la deuxieme requête</b> sur cette page.</p>
    <p>La liste des salles qui ont projetées des films joués par l'acteur <b><?php echo $_POST['acteur']; ?></b> est :</p>

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
        $req = $bdd->prepare('SELECT salle.idSalle, entreprise.nom, cinéma.ville, cinéma.nomCinema, film.titre, film.acteur
                                    FROM salle JOIN cinéma ON salle.idCinema = cinéma.idCinema
                                               JOIN entreprise ON entreprise.idEntreprise = cinéma.idEntreprise
                                               JOIN projection ON projection.idSalle = salle.idSalle
                                               JOIN film ON film.idFilm = projection.idFilm
                                    WHERE film.acteur LIKE "%' . $variable . '%" ');

        $req->execute(array($_POST['acteur']));

    while ($donnees = $req->fetch())
    {
        echo "L'acteur " . $donnees['acteur'] . ' joue dans le film '. $donnees['titre'] . ' projeté dans le cinema ' . $donnees['nomCinema'] . ' dans le salle ' . $donnees['idSalle'] . " qui appartient à l'entreprise " . $donnees['nom'] . ' à ' . $donnees['ville'] . '<br />';
    }

$req->closeCursor();

?>

    <p>Pour revenir à la page d'accueil, <a href="index.php">cliquez ici</a>.</p>
</body>
</html>
