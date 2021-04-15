<?php
function getReq4()
{
    $bdd = new PDO('mysql:host=localhost;dbname=bddexo; charset=utf8', 'root', 'root');

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
                    JOIN projection ON projection.idSalle = salle.idSalle 
                    JOIN film ON film.idFilm = projection.idFilm
    WHERE YEAR(projection.date) = YEAR(:annee)
    GROUP BY MONTH(projection.date) ) > 10");
    $req->execute(array('ville' => $_POST['lieu'], 'annee' => $_POST['date']));
    return $req;
}
