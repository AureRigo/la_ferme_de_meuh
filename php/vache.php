<?php
    require("header.php");
    $DB->exec("SET CHARACTER SET utf8"); 
    $element=$_GET['id'];
    // var_dump($element);
    $newreq = $DB->query("SELECT * FROM vaches WHERE id_vache=$element");
    $tab = $newreq->fetch();
    // var_dump($tab);
?>