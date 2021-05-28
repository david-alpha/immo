<?php
include '../template/connect.php';

//Récupération des iknformations de la page d'index
     $password = $_POST['password'];
     $email = $_POST['email'];
   echo "$email : $password";
   echo "1";
//Vérification en base de données -- Debut
		$sql = "SELECT * FROM user WHERE email = :email AND password = :password ";
 
		// Preparation
		$stmt = $dbh->prepare($sql);
 
		// execution
		$stmt->execute( array( ':email' => $email, ':password' => $password ) );
 
		$row = $stmt->fetch(PDO::FETCH_BOTH); // ici, fetch() car UNE SEULE LIGNE récupérée (id est UNIQUE)
 
		echo 'nom du user : '.$row['nom'];	
		echo "<br>";
		 if($row){
			echo "c'est bon ";
		 }else{
			echo "c'est pas bon";  
		 }
//Vérification en base de données -- Fin


?>