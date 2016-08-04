<?php
if(IsSet($_COOKIE["logado"])){}
	else{
		echo '<meta http-equiv="refresh" content="0;url=/">';
		exit; 

	}
	?>

	<html>
	<head>
		<html>
		<head>
		<meta charset="utf-8">
			<title>ALMOXARIFADO</title>




			<meta http-equiv="Content-Type" content="text/html">
			
			<meta name="viewport" content="width=device-width, user-scalable=no">


			<link rel="stylesheet" type="text/css" href="css/foundation.css">
			<link rel="stylesheet" type="text/css" href="css/foundation.min.css">
			<link rel="stylesheet" type="text/css" href="css/app.css">
			<link rel="icon" type="image/png" href="img/favicon.ico" />


			<style type="text/css">
				@import url("styles/index.css");
				@import url("styles/menu.css");
			</style>
			<script type="text/javascript" src="application/js/jquery.min.js"></script>
			<script type="text/javascript" src="application/js/menu.js"></script>
			<script type="text/javascript" src="application/js/functions.js"></script>

		</head>
		<body>
			<form action="cadastro.php" method="post">
				
					<div id="Logo"><big><b>CONTROLE DE ESTOQUE</b></big>
						<img src="img/logo-kanui.png" alt="Kanui" width="150" height="40" align="left"> 
						<img src="img/logo-tricae.png" alt="Kanui" width="150" height="40" align="right"> </div>


						<?php include 'menu.php'; ?>


						
							 <h4 class="msgSucess">Usuario cadastrado com sucesso</h4>
						
					


					<script src="js/vendor/jquery.js"></script>
					<script src="js/vendor/what-input.js"></script>
					<script src="js/vendor/foundation.js"></script>
					<script src="js/app.js"></script>	
				</body>
				</html>