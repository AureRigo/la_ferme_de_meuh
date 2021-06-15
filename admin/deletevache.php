<?php
    require("../appel/db.php");
    $DB->exec("SET CHARACTER SET utf8");
     $id = $_GET["id"];

   $DB->exec("DELETE FROM vaches WHERE id_vache= $id"); 

    header("Location:gestion.php");

?>