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
	<h1> Dashboard  </h1>
	<div class="spinner-border text-primary" role="status">
		<span class="visually-hidden">Loading...</span>
	</div>
</div>
<!-- insertion js --- debut -->
	<?php
	include 'template/base-footer.php';
	?>
	<!-- insertion js --- fin -->
</body>