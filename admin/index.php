<?php
    require("header.php");
?>
    <h1>Connexion administrateur</h1>
    <?php
        if(isset($_GET['erreur'])){
            echo "informations incorrectes, veillez essayer à nouveau.";
        }
    ?>
    <form method="POST" action="gestion.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Login</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
            </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
    </form>
</body>
<?php
    require("footer.php");
?>