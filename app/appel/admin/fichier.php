<?php
if(isset($_POST['login'])){
      $login = $_POST['login'];
  }
  if(isset($_POST['mdp'])){
    $password = $_POST['mdp'];
}
    // var_dump($DB);
    $req= $DB->prepare("SELECT * FROM admin WHERE login_admin='$login' AND password_admin='$password'");
    $result= $req->execute();
    // var_dump($result);
    $result=$req->fetch();
    // var_dump($result);


if($result==false){
    // header('location:index.php?erreur=1');
}else{
    header('location:gestion.php');
}
?>