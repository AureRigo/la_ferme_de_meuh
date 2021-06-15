<?php
require('../appel/header.php');
?>
<main>
  <form class="row g-3" action="inscri.php" method="POST">
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Prénom</label>
      <input type="text" class="form-control" id="validationDefault01" required name="prenom">
    </div>
    <div class="col-md-4">
      <label for="validationDefault02" class="form-label">Nom</label>
      <input type="text" class="form-control" id="validationDefault02" required name="nom">
    </div>
    <div class="col-md-4">
      <label for="validationDefaultUsername" class="form-label">Pseudo</label>
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2">@</span>
        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required name="pseudo">
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationDefaultUsername" class="form-label">Mail</label>
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2">@</span>
        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required name="mail">
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationDefault02" class="form-label">Téléphone</label>
      <input type="tel" class="form-control" id="validationDefault02" name="telephone">
    </div>
    <div class="col-md-6">
      <label for="validationDefault03" class="form-label">Adresse</label>
      <input type="text" class="form-control" id="validationDefault03" required name="adresse">
    </div>
    <div class="col-md-6">
      <label for="validationDefault03" class="form-label">Ville</label>
      <input type="text" class="form-control" id="validationDefault03" required name="ville">
    </div>
    <div class="col-md-3">
      <label for="validationDefault05" class="form-label">Code Postal</label>
      <input type="text" class="form-control" id="validationDefault05" required name="cp">
    </div>
    <label for="inputPassword5" class="form-label">Mot de passe</label>
    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
    <div id="passwordHelpBlock" class="form-text">
      Votre mot de passe doit contenir entre 8 et 20 caractères. Il doit contenir uniquement des chiffre et des lettres. Les caractères spéciaux ne sont pas autorisés.
    </div>
    <label for="inputPassword5" class="form-label">Confirmez votre mot de passe</label>
    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="mdp">
    <div id="passwordHelpBlock" class="form-text">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="invalidCheck2" required name="cgu">
        <label class="form-check-label" for="invalidCheck2">
          J'accepte les conditions générales d'utilisation.
        </label>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Validez</button>
    </div>
  </form>
</main>
<?php
require('../appel/footer.php');
?>