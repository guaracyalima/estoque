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
			<title>ALMOXARIFADO</title>
			<style type="text/css">
				@import url("styles/index.css");
				@import url("styles/menu.css");
			</style>
			<link rel="stylesheet" type="text/css" href="css/foundation.css">
			<link rel="stylesheet" type="text/css" href="css/foundation.min.css">
			<link rel="stylesheet" type="text/css" href="css/app.css">
			<link rel="icon" type="image/png" href="img/favicon.ico" />
			<script type="text/javascript" src="application/js/jquery.min.js"></script>
			<script type="text/javascript" src="application/js/menu.js"></script>
			<script type="text/javascript" src="application/js/functions.js"></script>

		</head>
		<body>

			<div class="row">
				<div class="small-12 medium-12 large-12 columns">

					<header id="header" class="header">
						<h4 class="tituloEstoque">Controle de estoque</h4>
					</header>


				</div>
			

					<?php include 'menu.php'; ?>
					<div class="row">
						<div class="medium-6 medium-centered large-4 large-centered columns">
							<form action="cadastro.php" method="post">

								<div class="row column log-in-form">




									<h4 class="text-center"> Cadastro de usuario </h4>

									<label>Nome do usuario
										<input type="text" name="nuser" placeholder="Ex: admin">
									</label>
									<label>Senha do usuario
										<input type="password" name="npass">
									</label>
									<input type="submit" value="Cadastrar" class="button expanded">



								</ul>

							</div>
						</form>	
					</div>
				</div>
				<script src="js/vendor/jquery.js"></script>
				<script src="js/vendor/what-input.js"></script>
				<script src="js/vendor/foundation.js"></script>
				<script src="js/app.js"></script>
			</body>
			</html>