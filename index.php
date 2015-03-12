<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="js/headerLogo.js"></script>
	<script type="text/javascript" src="js/protagonistas.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,900,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/inicio.css">
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<title>El Hombre de La Mancha</title>
</head>
<body>
	<div class="top-black"></div>
			<img src="img/cut-flipWeb.png" class='img-responsive footer-flip footer-flip-top'>
	<div id='global-container'>

		<!-- HEADER -->
		<div id="header">
			<div class="top-banner">
				<div class="header-facebook">
					<p>Seguinos en</p>
					<a href="https://www.facebook.com/hombredelamancha2015" target="_blank"><img class="logo-facebook" src="img/logoFacebook.png" alt="facebook"></a>
					<a href="https://twitter.com/ElHombre2015" target="_blank"><img class="logo-twitter" src="img/twitter.png" alt="twitter"></a>
				</div>
				<img class="header-logo" src="img/HDLMLogo.png">
				<img class="img-cut img-responsive" src="img/cutWeb.png">
			</div>
		</div>	
		<div class="nav-bar">
			<ul class="nav-bar-menu">
				<li><a class="nav-bar-items activeLink" href="#!">EL MUSICAL</a></li>
				<li><a class="nav-bar-items" href="autores.php">AUTORES</a></li>
				<li><a class="nav-bar-items" href="elenco.php">ELENCO</a></li>
				<li><a class="nav-bar-items" href="ficha.php">FICHA TÉCNICA</a></li>
				<li><a class="nav-bar-items" href="staff.php">STAFF</a></li>
				<li class="buy-border"><a class="nav-bar-items nav-bar-buy" target='_blank' href="https://www.plateanet.com/Obras/el-hombre-de-la-mancha---un-musical">COMPRAR ENTRADAS</a></li>
			</ul>
		</div>

		<!-- CONTENT -->

		<?php include('includes/inicio.php') ?>

		<!-- FOOTER -->

		<?php include('includes/footer.php') ?>

	</div>
</body>
</html>