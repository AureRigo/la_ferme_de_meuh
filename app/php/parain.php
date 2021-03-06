<?php
require('../appel/header.php');
require('../appel/db.php');
$DB->exec("SET CHARACTER SET utf8");
?>
<main>
  <label for="exampleDataList" class="form-label">Rechercher une vache</label>
  <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Tapez pour rechercher...">
  <datalist id="datalistOptions">
    <option value="Brunette">
    <option value="Noireaude">
    <option value="Noisette">
    <option value="Marguerite">
    <option value="Réglisse">
  </datalist>

  <?php
  $req = $DB->query('SELECT * FROM vaches');
  $tab = $req->fetchAll();   ?>
  <select class="form-select" aria-label="Default select example">
    <option selected>Races</option>
    <?PHP
    foreach ($tab as $vache) {
    ?>
    <option value="1"><?PHP echo $vache["Race"] ?></option>
    <?PHP
    }
    ?>
  </select>
  <table class="table table-striped">
    <tr>
      <th>Nom</th>
      <th>Race</th>
      <th>Age</th>
      <th>Descriptif</th>
      <th>Photo</th>
      <th>Ferme</th>
    </tr>
    <?PHP
    foreach ($tab as $vache) {
    ?>
      <tr>
        <td><a href="./vache.php?id=<?php echo $vache["id_vache"]; ?>"><?PHP echo $vache["Nom"] ?></a></td>
        <td><?PHP echo $vache["Race"] ?></td>
        <td><?PHP echo $vache["Age"] ?></td>
        <td><?PHP echo $vache["Descriptif"] ?></td>
        <td> <img class="parrain" src="../images/<?PHP echo $vache["Photo"] ?>" /></td>
        <td><?PHP echo $vache["fk_Ferme"] ?></td>
      </tr>
    <?PHP
    }
    ?>
  </table>
</main>
<?php
require('../appel/footer.php');
?>