<?php
require('../appel/db.php');
$DB->exec("SET CHARACTER SET utf8");
    // var_dump($DB);
    $req = $DB->prepare('SELECT * FROM vaches');
    $result=$req->execute();
    //  var_dump($result);
    $tab = $req->fetchAll();
    // var_dump($tab);

$nom = $_POST['nom'];
$race = $_POST['race'];
$age = $_POST['age'];
$descriptif = $_POST['descriptif'];
$ferme = $_POST['ferme'];

$req = $DB->prepare("INSERT INTO vaches(Nom, Race, Age, Descriptif, fk_Ferme)
                                  VALUES(:nom, :race, :age, :descriptif, :ferme)");

$result = $req->execute(array('nom' => $nom,
                               'race' => $race,
                               'age' => $age,
                               'descriptif' => $descriptif,
                               'ferme' => $ferme,));

//                                ))or die(print_r($req->errorInfo()));
header("Location:gestion.php");
?>