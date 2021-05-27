<?php
include 'template/connect.php';

     $civilite = $_POST['civilite']; 
     $nom = $_POST['nom']; 
     $prenom = $_POST['prenom']; 
     $password = $_POST['password'];
     $role = $_POST['role'];
     $email = $_POST['email'];
   echo "$nom, $prenom, $civilite, $password, $role, $email";




?>