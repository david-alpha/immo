<?php
include 'template/base-head.php';
?>

 <body>
		<div class="container">
			<!-- insertion du menu - debut -->
			<?php
				include 'template/menu.php';
			?>
			<!-- insertion du menu - fin -->
		<h1> Formulaire d'ajout d'un Utilisateur  </h1>
		<form action="php/ajoutUser.php" method="post">
		  <div class="mb-3">
			<label for="civilite" class="form-label">Civilite</label>
			<select name="civilite" id="role" class="form-control">
				<option value="1">Madame</option>
				<option value="2">Monsieur</option>
			</select>
		  </div>
		  <div class="mb-3">
			<label for="nom" class="form-label">Nom</label>
			<input type="text" class="form-control" id="nom" aria-describedby="emailHelp" name="nom">
		  </div>
		  <div class="mb-3">
			<label for="penom" class="form-label">Prenom</label>
			<input type="text" class="form-control" id="prenom" aria-describedby="emailHelp" name="prenom">
		  </div>
		  <div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
		  </div>
		  <div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input type="password" class="form-control" id="password1" name="password">
		  </div>
		  <div class="mb-3">
			<label for="exampleInputPassword1" class="form-label" >Confirmation de password</label>
			<input type="password" class="form-control" id="password2" onBlur="return verifyPassword();">
			<div id="reponse"> </div>
		  </div>
		  <div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Rôle</label>
			<select name="role" id="role" class="form-control">
				<option value="1">Administrateur</option>
				<option value="2">Propriétaire</option>
				<option value="3">Locataire</option>
				<option value="4">Fournisseur</option>
			</select>
		  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
	<script> 
		function verifyPassword(){
		  var pw1 = document.getElementById("password1").value; 
		  var pw2 = document.getElementById("password2").value;	
		  console.log(pw1,pw2); 
		  if(pw1 == pw2 ) {  
			 document.getElementById("reponse").innerHTML = "Les mot de passe correspondent";  
			 return true;  
		  }else{
			document.getElementById("reponse").innerHTML = "Les mot de passe ne correspondent pas";
		  }
		  }
	</script>
	<!-- insertion js --- debut -->
	<?php
	include 'template/base-footer.php';
	?>
	<!-- insertion js --- fin -->
	
    </body>
</html>





