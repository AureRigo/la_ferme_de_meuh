<?php
require('../appel/header.php');
?>
<div class="titre">
  <i class="fas fa-hat-cowboy"></i>
  <h1> La Ferme de Meuh!</h1>
</div>
<?php
  require('../appel/db.php')
?>
<div id="carouselExampleCaptions" class="carousel slide w-50 m-auto" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
<?php
  foreach($tab as $Vache){
?>
  <div class="carousel-inner">
<?php
    if($Vache["Nom"][1]){
?>
    <div class="carousel-item active">
      <img src='../images/<?php echo$Vache["Photo"]?>' class="d-block w-100" alt='<?php echo$Vache["Nom"]?>'>
      <div class="carousel-caption d-none d-md-block">
        <p><?php echo$Vache["Nom"]?></p>
      </div>
    </div>
<?php
  
}else{
?>
    <div class="carousel-item"> -->
      <img src='../images/<?php echo$Vache["Photo"]?>' class="d-block w-100" alt='<?php echo$Vache["Nom"]?>'>
      <div class="carousel-caption d-none d-md-block">
      <p><?php echo$Vache["Nom"]?></p>
      </div>
    </div>
<?php
    }
  }
?>
    <!-- <div class="carousel-item"> -->
      <!-- <img src="../images/Noisette.jpeg" class="d-block w-100" alt="Noisette la Tarrine"> -->
      <!-- <div class="carousel-caption d-none d-md-block"> -->
        <!-- <p>Noisette la tarrine.</p> -->
      <!-- </div> -->
    <!-- </div> -->
    <!-- <div class="carousel-item"> -->
      <!-- <img src="../images/brunette.jpeg" class="d-block w-100" alt="Brunette la Tarrine"> -->
      <!-- <div class="carousel-caption d-none d-md-block"> -->
        <!-- <p>Brunette la tarrine.</p> -->
      <!-- </div> -->
    <!-- </div> -->
    <!-- <div class="carousel-item"> -->
      <!-- <img src="../images/Réglisse.jpeg" class="d-block w-100" alt="Réglisse l'Holstein"> -->
      <!-- <div class="carousel-caption d-none d-md-block"> -->
        <!-- <p>Réglisse l'Holstein la tarrine.</p> -->
      <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="commentaires">
  <h2>Adhérants satisfaits</h2>
  <p>
  <h3>Sarah</h3> depuis que je parraine Betty, je me sens utile.
  </p>
  <p>
  <h3>Jean-Paul</h3> grace à la ferme de Meuh, j'ai peu réaliser mon rêve d'enfant en ayant ma propre vache.
  </p>
  <p>
  <h3>Raymond</h3> Depuis, que je parraine Blondie, ma vie a du sens.
  </p>
</div>
<?php
require('../appel/footer.php');
?>