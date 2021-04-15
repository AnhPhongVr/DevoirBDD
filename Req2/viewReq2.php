<!DOCTYPE html>
<html>
<head>
    <title>Requête2</title>
</head>
<body>
<p>Bonjour à tous, nous allons répondre à <b>la deuxieme requête</b> sur cette page.</p>
<p>La liste des salles qui ont projetées des films joués par l'acteur <b><?php echo $_POST['acteur']; ?></b> est :</p>
<?php while ($donnees = $req->fetch())
{ ?>
    <p>L'acteur <?php echo $donnees['acteur']; ?> joue dans le film <?php echo $donnees['titre']; ?> projeté dans le cinema <?php echo $donnees['nomCinema']; ?> dans le salle <?php echo $donnees['idSalle']; ?> qui appartient à l'entreprise <?php echo $donnees['nom']; ?> à <?php echo $donnees['ville'];?></p>
<?php
}
$req->closeCursor();
?>

<p>Pour revenir à la page d'accueil, <a href="../index.php">cliquez ici</a>.</p>
</body>
</html>
