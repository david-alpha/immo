<?php
include 'template/base-head.php';
include 'template/connect.php';
//Requetes DEBUT
	$requete = "SELECT * FROM user";
	$stmt = $dbh->query($requete);		
?>
<body>
<table class="table-primary">
	<thead>
		<tr>
			<td>id</td><td>Nom</td><td>Prenom</td>
		</tr>
	</thead>
	<tbody>
	<?php
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		?>
		<tr><td>
		<?php
		echo htmlspecialchars($row['id']);
		?>
		</td><td>
		<?php
		echo htmlspecialchars($row['nom']);
		?>
		</td><td>
		<?php
		echo htmlspecialchars($row['prenom']);
		?>
		</td></tr>
		<?php		
	}	
	?>	
	</tbody>
</table>
</body>
<?php

?>