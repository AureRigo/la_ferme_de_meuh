<?php
    require("../appel/db.php");
    $DB->exec("SET CHARACTER SET utf8");
    $req = $DB->prepare('SELECT * FROM vaches');
    $result=$req->execute();
    $tab=$req->fetchAll();

    $nom = $_POST['nom'];
    $race = $_POST['race'];
    $age = $_POST['age'];
    $descriptif = $_POST['descriptif'];
    $ferme = $_POST['ferme'];
    $id = $_GET['id'];

    $req = $DB->prepare("UPDATE vaches SET Nom=:value1,Race=:value2,Age=:value3,Descriptif=:value4,fk_Ferme=:value6 WHERE id_vache=:id"); 

    $result = $req->execute(array('value1' => $nom,
                                'value2' => $race,
                                'value3' => $age,
                                'value4' => $descriptif,
                                'value6' => $ferme,
                                'id' => $id));

    header("Location:gestion.php");
?>