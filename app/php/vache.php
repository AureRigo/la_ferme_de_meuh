<?php
    require("../appel/header.php");
    require("../appel/db.php");
    $DB->exec("SET CHARACTER SET utf8");
    $id = $_GET['id'];
    // var_dump($id);
    $req = $DB->prepare("SELECT * FROM vaches WHERE id_vache= $id ");
    $result=$req->execute();
    $tab=$req->fetch();

   // var_dump($tab);
?>
<h1><?php echo $tab['Nom'];?></h1>
<P>
    <?php echo $tab['Descriptif']; ?>
</P>
<img class="parrain" src="../images/<?PHP echo $tab["Photo"]; ?>" />