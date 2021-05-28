<?php
include 'template/base-head.php';
include 'template/connect.php';
//Requetes DEBUT
	$requete = "SELECT * FROM user";
	$stmt = $dbh->query($requete);		
?>
<body>
<div class="container">
			<!-- insertion du menu - debut -->
			<?php
				include 'template/menu.php';
			?>
			<!-- insertion du menu - fin -->
		<h1> Liste des utilisateurs  </h1>
<table class="table">
	<thead>
		<tr>
			<th>id</th><th>Nom</td><th>Prenom</th><th>Email</th>
		</tr>
	</thead>
	<tbody>
	<?php
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		?>
		<tr><td scope="col">
		<?php
		echo htmlspecialchars($row['id']);
		?>
		</td><td scope="col">
		<?php
		echo htmlspecialchars($row['nom']);
		?>
		</td><td scope="col">
		<?php
		echo htmlspecialchars($row['prenom']);
		?>
		</td><td scope="col">
		<?php
		echo htmlspecialchars($row['email']);
		?>
		</td></tr>
		<?php		
	}	
	?>	
	</tbody>
</table>
</div>
<!-- insertion js --- debut -->
	<?php
	include 'template/base-footer.php';
	?>
	<!-- insertion js --- fin -->
</body>