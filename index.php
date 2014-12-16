<!DOCTYPE html>
<html lang="en">
<head>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,900,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/inicio.css">
	<title>EL HOMBRE DE LA MANCHA</title>
</head>
<body>
	<div id='global-container'>

		<!-- HEADER -->

		<div id="header">
			<div class="top-banner">
				<img class="header-logo" src="img/mainLogo.png">
				<img class="img-cut img-responsive" src="img/cut.png">
			</div>
		</div>	
		<div class="nav-bar">
			<ul class="nav-bar-menu">
				<li><a class="nav-bar-items activeLink" href="#!">EL MUSICAL</a></li>
				<li><a class="nav-bar-items" href="autores.php">AUTORES</a></li>
				<li><a class="nav-bar-items" href="elenco.php">ELENCO</a></li>
				<li><a class="nav-bar-items" href="ficha.php">FICHA TÉCNICA</a></li>
				<li><a class="nav-bar-items" href="protagonistas.php">PROTAGONISTAS</a></li>
				<li class="buy-border"><a class="nav-bar-items nav-bar-buy" href="https://www.plateanet.com/Obras/el-hombre-de-la-mancha---un-musical">COMPRAR TICKETS</a></li>
			</ul>
		</div>

		<!-- CONTENT -->

		<?php include('includes/inicio.php') ?>

		<!-- FOOTER -->

		<?php include('includes/footer.php') ?>

	</div>
</body>
</html>