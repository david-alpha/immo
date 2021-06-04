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
		echo "<br>";
		 if($row){
			//Ligne permettant la redirection vers la page index.html.
			  header('location:../afficheDashboard.php');
			  exit();
		 }else{
			echo "c'est pas bon. Vous n'avez pas les autorisations.";  
			echo "<br>";  
			echo "<a href=../index>Cliquez-ici pour vous reconnecter</a>";  
		 }
//Vérification en base de données -- Fin


?>