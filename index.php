<?php
include 'template/base-head.php';
?>
<body>
		<div class="container">
		<h1> Bienvenue </h1>
		<form action="php/connexion.php" method="post">
		  <div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="text" class="form-control" id="email" aria-describedby="email" name="email">
		  </div>
		  <div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="text" class="form-control" id="password" aria-describedby="password" name="password">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		 </form>	
</div>		 
<body>
</html>