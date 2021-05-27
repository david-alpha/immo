<?php
include '../template/connect.php';

     $civilite = $_POST['civilite']; 
     $nom = $_POST['nom']; 
     $prenom = $_POST['prenom']; 
     $password = $_POST['password'];
     $role = $_POST['role'];
     $email = $_POST['email'];
   echo "$nom, $prenom, $civilite, $password, $role, $email";
//Insertion en base de données -- Debut
	$data = [
    'civilite' => $civilite,
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email,
    'password' => $password,
    'role' => $role,
	];
	$sql = "INSERT INTO user (civilite, nom, prenom, email, password, role) VALUES (:civilite, :nom, :prenom, :email, :password, :role)";
	$stmt= $dbh->prepare($sql);
	$stmt->execute($data);
//Insertion en base de données -- Fin

?>