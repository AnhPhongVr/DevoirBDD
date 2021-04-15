<html>
<head>
    <title>Requête5</title>
</head>
<body>
<p>Bonjour à tous, nous allons répondre à <b>la cinquieme requête</b> sur cette page.</p>
<p>La liste de films qui sont projetés la semaine précedant <b><?php echo $_POST['date']?></b> dans lesquels <b><?php echo $_POST['acteur']?></b> a joué sont :</p>
<?php while ($donnees = $req->fetch())
{ ?>
    <p>il y a <?php echo $donnees['titre'];?> de <?php echo $donnees['acteur']?> le <?php echo $donnees['date'];?></p>
<?php }
$req->closeCursor();
?>

<p>Pour revenir à la page d'accueil, <a href="index.php">cliquez ici</a>.</p>
</body>
</html>