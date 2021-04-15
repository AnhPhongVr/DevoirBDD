<?php
function getReq3()
{
    $bdd = new PDO('mysql:host=localhost;dbname=bddexo; charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $req = $bdd->prepare("SELECT cinéma.nomCinema, film.titre, entreprise.nom
								FROM cinéma JOIN salle ON cinéma.idCinema = salle.idCinema
								JOIN projection ON salle.idSalle = projection.idSalle
								JOIN film ON projection.idFilm = film.idFilm
								JOIN entreprise ON entreprise.idEntreprise = cinéma.idEntreprise
						  WHERE film.titre = :film");
    $req->execute(array('film' => $_POST['film']));
    return $req;
}