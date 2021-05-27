<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=immo', "ged", "gedged");

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>