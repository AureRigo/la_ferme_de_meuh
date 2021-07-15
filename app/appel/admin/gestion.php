<?php
    require("header.php");
    $DB->exec("SET CHARACTER SET utf8");  
    
    
$newreq = $DB->query('SELECT * FROM vaches INNER JOIN Fermes
                      on vaches.fk_ferme=Fermes.ID_Ferme');
$tab = $newreq->fetchAll();
?>
<a href="ajoutvacheform.php">
    <button>Ajouter une vache</button>
</a>
<table class="table table-striped">
<tr>
    <th>Nom</th>
    <th>Race</th>
    <th>Age</th>
    <th>Descriptif</th>
    <th>Photo</th>
    <th>Ferme</th>
    <th><a href="">Modifier</a></th>
    <th><a href="">Supprimer</a></th>
</tr>
<?PHP
foreach ($tab as $vache) {
?>
    <tr>
    <td><?PHP echo $vache["Nom"] ?></td>
    <td><?PHP echo $vache["Race"] ?></td>
    <td><?PHP echo $vache["Age"] ?></td>
    <td><?PHP echo $vache["Descriptif"] ?></td>
    <td> <img src="../images/<?PHP echo $vache["Photo"] ?>" /></td>
    <td><?PHP echo $vache["Adresse"] ?></td>
    <td><a href="modifievacheform.php?id=<?php echo $vache['id_vache'];?>" method="GET">Modifier</a></td>
    <td><a href="deletevache.php?id=<?php echo $vache['id_vache'];?>" method="GET">Supprimer</a></td>
    </tr>
<?PHP
}
?>
</table>