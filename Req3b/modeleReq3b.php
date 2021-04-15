<?php
function getReq3b()
{
    $bdd = new PDO('mysql:host=localhost;dbname=bddexo; charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


    $req = $bdd->prepare("SELECT film.titre, cinéma.nomCinema
								FROM film JOIN projection ON projection.idFilm = film.idFilm
								JOIN salle ON salle.idSalle = projection.idSalle
								JOIN cinéma ON salle.idCinema = cinéma.idCinema
								JOIN entreprise ON entreprise.idEntreprise = cinéma.idEntreprise
					  	  WHERE cinéma.nomCinema = :cinema OR cinéma.nomCinema = :cinema");
    $req->execute(array('cinema' => $_POST['cinema'], 'cinema' => $_POST['cinema']));
    return $req;
}