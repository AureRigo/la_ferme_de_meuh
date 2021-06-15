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
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$mail = $_POST['mail'];
$adresse = $_POST['adresse'];
$cp= $_POST['cp'];
$ville = $_POST['ville'];
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
$cgu = $_POST['cgu'];

$req = $DB->prepare("INSERT INTO Parrain(Nom, Prenom, adresse, cp, ville, Telephone, mail, login, password, cgu)
                                  VALUES(:nom, :prenom, :adresse, :cp, :ville, :telephone, :mail, :login, :password, :cgu)");

$result = $req->execute(array('nom' => $nom,
                               'prenom' => $prenom,
                               'adresse' => $adresse,
                               'cp' => $cp,
                               'ville' => $ville,
                               'telephone' => $telephone,
                               'mail' => $mail,
                               'login' => $pseudo,
                               'password' => $mdp,
                               'cgu' => $cgu))or die(print_r($req->errorInfo()));
header("Location:index.php?inscri=1");
?>