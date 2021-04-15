<!DOCTYPE html>
<html>
<head>
    <title>Requete3b</title>
</head>
<body>
<p>Bonjour à tous, nous allons répondre à <b>la troisième requête</b> sur cette page.</p>
<p>La liste des films qu sont diffusés à <b><?php echo $_POST['cinema']; ?></b> et <b><?php echo $_POST['cinema']; ?></b> est :</p>
<?php while ($donnees = $req->fetch())
{ ?>
    <p>Il y a <?php echo $donnees['titre']; ?> diffusé à <?php echo $donnees['nomCinema']; ?></p>
<?php }
$req->closeCursor();
?>

<p>Pour revenir à la page d'accueil, <a href="../index.php">cliquez ici</a>.</p>
</body>
</html>
