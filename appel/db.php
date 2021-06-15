<?PHP
try {
    $DB = new PDO('mysql:host=localhost;dbname=la_ferme_de_meuh', 'phpmyadmin', 'handigital');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

 ?>
 