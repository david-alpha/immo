<?php
include 'template/base-head.php';
include 'template/connect.php';
//Requetes DEBUT
	$requete = "SELECT * FROM biens, user WHERE biens.userproprio = user.id";
	$stmt = $dbh->query($requete);		
?>
<body>
<div class="container">
			<!-- insertion du menu - debut -->
			<?php
				include 'template/menu.php';
			?>
			<!-- insertion du menu - fin -->
		<h1> Liste des biens  </h1>
<table class="table">
	<thead>
		<tr>
			<th>id</th><th>Type</th><th>Adresse</td><th>Cp</th><th>Ville</th><th>Etage</th><th>Proprio</th>
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
		echo htmlspecialchars($row['type']);
		?>
		</td><td scope="col">
		<?php
		echo htmlspecialchars($row['adresse']);
		?>
		</td><td scope="col">
		<?php
		echo htmlspecialchars($row['cp']);
		?>
		</td><td scope="col">
		<?php
		echo htmlspecialchars($row['ville']);
		?>
		</td><td scope="col">
		<?php
		echo htmlspecialchars($row['etage']);
		?>
		</td><td scope="col">
		<?php
		echo htmlspecialchars($row['nom']);
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