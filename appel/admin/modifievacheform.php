<?php
    require("header.php");
    $DB->exec("SET CHARACTER SET utf8"); 
    $element=$_GET['id'];
    // var_dump($element);
    $newreq = $DB->query("SELECT * FROM vaches WHERE id_vache=$element");
    $tab = $newreq->fetch();
    // var_dump($tab);
?>
<form class="row g-3" action="modifievache.php?id=<?php echo $element?>" method="POST">
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Nom de la vache</label>
        <input type="text" class="form-control" id="validationDefault02" required name="nom" value="<?php echo $tab['Nom']; ?>">
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Race de la vache</label>
        <input type="text" class="form-control" id="validationDefault02" required name="race" value="<?php echo $tab['Race']; ?>">
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Age de la vache</label>
        <input type="number" class="form-control" id="validationDefault02" required name="age" value="<?php echo $tab['Age']; ?>">
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Ferme où la vache est hébergée</label>
        <input type="text" class="form-control" id="validationDefault02" required name="ferme" value="<?php echo $tab['fk_Ferme']; ?>">
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="descriptif"><?php echo $tab['Descriptif']; ?></textarea>
        <label for="floatingTextarea">Descriptif de la vache</label>
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile01">Photo de la vache</label>
        <input type="file" class="form-control" id="inputGroupFile01">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>

</form>