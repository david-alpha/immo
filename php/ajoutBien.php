<?php
include '../template/connect.php';

     $proprietaire = $_POST['proprietaire']; 
     $type = $_POST['type']; 
     $etage = $_POST['etage']; 
     $adresse = $_POST['adresse'];
     $cp = $_POST['cp'];
     $ville = $_POST['ville'];
//Insertion en base de données -- Debut
	$data = [
    'userproprio' => $proprietaire,
    'type' => $type,
    'etage' => $etage,
    'adresse' => $adresse,
    'cp' => $cp,
    'ville' => $ville,
	];
	$sql = "INSERT INTO biens (userproprio, type, etage, adresse, cp, ville) VALUES (:userproprio, :type, :etage, :adresse, :cp, :ville)";
	$stmt= $dbh->prepare($sql);
	$stmt->execute($data);
//Insertion en base de données -- Fin
//Redirection 
header('Location: ../formBien.php');

?>