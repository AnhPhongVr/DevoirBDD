<!-- vue -->
<!DOCTYPE html>
<html>
<head>
    <title>Requête1</title>
</head>
<body>
<p>Bonjour à tous, nous allons répondre à <b>la première requête</b> sur cette page.</p>
<p>La liste des films qui seront projetés à <b><?php echo $_POST['ville']; ?></b>, le <b><?php echo $_POST['date']; ?></b> à <b><?php echo $_POST['heure']; ?></b> est :</p>
<?php while ($donnees = $req->fetch()){ ?>
    <p>il y a <?php echo $donnees['titre'];?> le <?php echo $donnees['date'];?> à <?php echo $donnees['horaire'];?> à <?php echo $donnees['ville'];?></p>
<?php }

$req->closeCursor(); ?>
<p>Pour revenir à la page d'accueil, <a href="index.php">cliquez ici</a>.</p>
</body>
</html>