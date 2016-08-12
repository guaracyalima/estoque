<?php include 'header.php'; ?>
<html>


<head>



	<title>ALMOXARIFADO</title>


	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">


	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="icon" type="image/png" href="img/favicon.ico" />


	<style type="text/css">
		@import url("styles/index.css");
		@import url("styles/menu.css");
		#apDiv1 {
			position: absolute;
			width: 145px;
			height: 115px;
			z-index: 1;
			left: 1108px;
			top: 35px;
			visibility: inherit;
		}
	</style>
	<script type="text/javascript" src="application/js/jquery.min.js"></script>
	<script type="text/javascript" src="application/js/menu.js"></script>
	<script type="text/javascript" src="application/js/functions.js"></script>
</head>


<body>

	<div class="row">
		<div class="small-12 medium-12 large-12 columns">

			<header id="header" class="header">
				<h4 class="tituloEstoque animated bounceInDown">Controle de estoque</h4>
			</header>


		</div>
		<div class="small-12 medium-12 large-12 columns">

			<?php include 'menu.php'; ?>

			<div class="row"> 

				<div class="small-12 medium-12 large-12 columns">


					<?php //echo "O estoque minimo é 10"; ?>
					
					<?php include 'application/view/'.$url.'.phtml'; ?>
				</div>
			</div>
		</div>
	</div>

</div>


<footer>
	<div class="row">
		<div class="small-12 medium-12 large-12 columns ">
			<h6 class="footer">Developed by <strong><a href="https://br.linkedin.com/in/guaracyalima">CTI</a></strong>	</h6>
		</div>
	</div>
</footer>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>	
</body>

</html>
