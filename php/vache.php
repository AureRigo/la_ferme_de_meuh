<?php
    require("../appel/header.php");
    require("../appel/db.php");
    $DB->exec("SET CHARACTER SET utf8"); 
    $element=$_GET['id'];
    // var_dump($element);
    $newreq = $DB->query("SELECT * FROM vaches WHERE id_vache=$element");
    $tab = $newreq->fetch();
    // var_dump($tab);
?>
<h1><?php echo $tab['nom'];?></h1>
<P>
    <?php echo $tab['descriptif']; ?>
</P>
<img class="parrain" src="../images/<?PHP echo $vache["Photo"] ?>" />