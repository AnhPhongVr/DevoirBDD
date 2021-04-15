<?php
function getReq5()
{
    $bdd = new PDO('mysql:host=localhost;dbname=bddexo; charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $variable = $_POST['acteur'];
    $req = $bdd->prepare('SELECT film.titre, film.acteur, projection.date
    FROM film JOIN projection ON projection.idFilm = film.idFilm
    WHERE projection.date >= DATE(:date) - INTERVAL DAYOFWEEK(DATE(:date))+6 DAY 
    AND projection.date < DATE(:date) - INTERVAL DAYOFWEEK(DATE(:date))-1 DAY
    AND film.acteur LIKE "%' . $variable . '%" ');
    $req->execute(array('date' => $_POST['date'], 'acteur' => $_POST['acteur']));
    return $req;
}