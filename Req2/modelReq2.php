<?php
function getReq2()
{
    $bdd = new PDO('mysql:host=localhost;dbname=bddexo; charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $variable = $_POST['acteur'];
    $req = $bdd->prepare('SELECT salle.idSalle, entreprise.nom, cinéma.ville, cinéma.nomCinema, film.titre, film.acteur
                                    FROM salle JOIN cinéma ON salle.idCinema = cinéma.idCinema
                                               JOIN entreprise ON entreprise.idEntreprise = cinéma.idEntreprise
                                               JOIN projection ON projection.idSalle = salle.idSalle
                                               JOIN film ON film.idFilm = projection.idFilm
                                    WHERE film.acteur LIKE "%' . $variable . '%" ');

    $req->execute(array($_POST['acteur']));
    return $req;
}