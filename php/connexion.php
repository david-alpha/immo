<?php
include '../template/connect.php';

//Récupération des iknformations de la page d'index
     $password = $_POST['password'];
     $email = $_POST['email'];
   echo "$email : $password";


?>