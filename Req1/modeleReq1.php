<?php
function getReq1()
{
    $bdd = new PDO('mysql:host=localhost;dbname=bddexo; charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $req = $bdd->prepare('SELECT projection.idProjection, film.titre, projection.date, projection.horaire, cinéma.ville
                                     FROM film JOIN projection ON film.idFilm = projection.idFilm
                                               JOIN salle ON projection.idSalle = salle.idSalle
                                               JOIN cinéma ON salle.idCinema = cinéma.idCinema
                                     WHERE cinéma.ville = :ville AND projection.horaire >= :horaire AND projection.date = :dates');
    $req->execute(array('ville' => $_POST['ville'], 'horaire' => $_POST['heure'], 'dates' => $_POST['date']));
    return $req;
}
?>