<!DOCTYPE html>
<html>
<head>
    <title
    <title>Requetes4</title>
</head>
<body>
<p>Bonjour à tous, nous allons répondre à <b> la quatrième requete </b>sur cette page.</p>
<p>La liste des entreprises qui ont projeté plus de 10 films pendant chaque mois de l'année <b><?php echo $_POST['date']; ?></b> à <b><?php echo $_POST['lieu'];?></b> est:</p>
<?php while ($donnees = $req->fetch())
{ ?>
    <p>il y a <?php echo $donnees['nom']?></p>
<?php }
$req->closeCursor();
?>

<p>Pour revenir à la page d'accueil, <a href="../index.php">cliquez ici</a>.</p>
</body>
</html>
