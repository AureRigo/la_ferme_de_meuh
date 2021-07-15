<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/bootstrap.css" />
  <link rel="stylesheet" href="../fontawesome/css/all.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <script src="../bootstrap/bootstrap.js"></script>
  <title>La ferme de meuh</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: chocolate !important;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../php/index.php">Accueil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                les animaux à parainer
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="../php/parain.php">Nos retraitées en attente de parrain</a></li>
                <li><a class="dropdown-item" href="../php/Marguerite.php">Marguerite</a></li>
                <li><a class="dropdown-item" href="../php/Noireaude.php">Noireaude</a></li>
                <li><a class="dropdown-item" href="../php/Noisette.php">Noisette</a></li>
                <li><a class="dropdown-item" href="../php/Réglisse.php">Réglisse</a></li>
                <li><a class="dropdown-item" href="../php/Brunette.php">Brunette</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../php/contact.php">Nous contacter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../php/member.php">Devenir membre</a>
            </li>
            <li>
              <form class="container-fluid">
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">@</span>
                  <input type="text" class="form-control" placeholder="Utilisateur" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </form>
            </li>
            <li>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <input placeholder="mot de passe" type="password" class="form-control" id="inputPassword" required>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>