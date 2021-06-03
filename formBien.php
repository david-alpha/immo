<?php
include 'template/base-head.php';
include 'template/connect.php'; //fichier obligatoire pour la connexion à la BD
//Requetes DEBUT
	$requete = "SELECT * FROM user";
	$stmt = $dbh->query($requete);	
// Dans ce fichier dans la liste déroulante "propriétaire", on alterne php et html afin que la boucle qui liste les utilisateurs et le html pour l'affichage cohabitent.
?>

 <body>
		<div class="container">
			<!-- insertion du menu - debut -->
			<?php
				include 'template/menu.php';
			?>
			<!-- insertion du menu - fin -->
		<h1> Formulaire d'ajout d'un bien  </h1>
		<form action="php/ajoutBien.php" method="post">
		  <div class="mb-3">
			<label for="civilite" class="form-label">Propriétaire</label>
			<select name="proprietaire" id="proprietaire" class="form-control">
			<!-- ici il faut lister tous les utilisateurs de la table user -->
			<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			?>
				<option value="<?php echo htmlspecialchars($row['id']); ?>">
					<?php echo htmlspecialchars($row['nom'])." ".htmlspecialchars($row['nom']); ?>
				</option>
			<?php
			}
			?>
			</select>
		  </div>
		  <div class="mb-3">
			<label for="type" class="form-label">Type</label>
			<select name="type" id="type" class="form-control">
				<option value="Appartement">Appartement</option>
				<option value="Maison">Maison</option>
				<option value="Immeuble">Immeuble</option>
				<option value="Bureaux">Bureaux</option>
				<option value="Terrain">Terrain</option>
			</select>
		  </div>
		  <div class="mb-3">
			<label for="etage" class="form-label">Etage</label>
			<select name="etage" id="etage" class="form-control">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
			</select>
		  </div>
		  <div class="mb-3">
			<label for="adresse" class="form-label">Adresse</label>
			<input type="text" class="form-control" id="adresse" aria-describedby="adresse" name="adresse">
		  </div>
		  <div class="mb-3">
			<label for="cp" class="form-label">cp</label>
			<input type="text" class="form-control" id="cp" name="cp" aria-describedby="cp">
		  </div>
		  <div class="mb-3">
			<label for="ville" class="form-label">Ville</label>
			<input type="text" class="form-control" id="ville" name="ville">
		  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
	<!-- insertion js --- debut -->
	<?php
	include 'template/base-footer.php';
	?>
	<!-- insertion js --- fin -->
	
    </body>
</html>





