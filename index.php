<?php
session_start();
require("conexion.php");
require("consultas.php");
require("libraries.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<script src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<?php require("navbar.php")?>

	<div class="container">
		<div class="row">
			<?php verProductos();?>
		</div>
	</div>
		
	

	
	
	
	
</body>
</html>
