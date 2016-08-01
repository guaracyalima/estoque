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

				
					<h1>controle de estoque</h1>
					<div id="Logo"><big><b>CONTROLE DE ESTOQUE</b></big>
						<img src="img/logo-kanui.png" alt="Kanui" width="150" height="40" align="left"> <!-- LOGO KANUI -->
						<img src="img/logo-tricae.png" alt="Kanui" width="150" height="40" align="right"> <!-- LOGO TRICAE -->



					</div>


					<div class="top-bar">
						<div class="top-bar-title">
							<span data-responsive-toggle="responsive-menu" data-hide-for="medium">

							</span>
							<strong> <a href="main.php">Inicio</a></strong>
						</div>
						<div id="responsive-menu">
							<div class="top-bar-left">
								<ul class="dropdown menu" data-dropdown-menu>
									<li class="is-dropdown-submenu-parent">
										<a href="#">Produtos</a>
										<ul class="menu">
											<li><a href="main.php?url=categoria&acao=formcadastrocategoria">Cadastrar Categoria</a></li>
											<li><a href="main.php?url=produto&acao=formcadastro">Cadastrar Produtos</a></li>
											<li><a href="main.php?url=produto&acao=listar">Listar Produtos</a></li>
											<li><a href="main.php?url=categoria&acao=listar">Listar Categorias</a></li>

										</ul>
									</li>



									<li class="is-dropdown-submenu-parent">
										<a href="#">Estoque</a>
										<ul class="menu">
											<li><a href="main.php?url=estoque&acao=formcadastroentrada">Entrada de Material</a></li>

											<li><a href="main.php?url=estoque&acao=formcadastrosaida">Saida de Material</a></li>

											<li><a href="main.php?url=fornecedor&acao=formcadastro">Cadastrar Fornecedor</a></li>

											<li><a href="../modules/estoque/index.html">Almoxarifado</a></li>
											<!-- ... -->
										</ul>
									</li>


									<li class="is-dropdown-submenu-parent">
										<a href="#">Fornecedores</a>
										<ul class="menu">
											<li><a href="main.php?url=fornecedor&acao=listar">Listar Fornecedores</a></li>

											<!-- ... -->
										</ul>
									</li>


									<li class="is-dropdown-submenu-parent">
										<a href="#">Retirantes</a>
										<ul class="menu">
											<li><a href="main.php?url=retirante&acao=formcadastro">Cadastrar Retirante</a></li>
											<li><a href="main.php?url=retirante&acao=listar">Listar Retirantes</a></li>

											<!-- ... -->
										</ul>
									</li>

									<li class="is-dropdown-submenu-parent">
										<a href="#">Relatorios</a>
										<ul class="menu">
											<li><a href="main.php?url=relatorio&acao=produto">Produtos</a></li>
											<li><a href="main.php?url=relatorio&acao=fornecedor">Fornecedores</a></li>
											<li><a href="main.php?url=relatorio&acao=retirante">Retirantes</a></li>
											<li><a href="main.php?url=relatorio&acao=entrada">Entrada</a></li>
											<li><a href="main.php?url=relatorio&acao=saida">Saida</a></li>

											<!-- ... -->
										</ul>
									</li>

									<li class="is-dropdown-submenu-parent">
										<a href="#">Usuarios</a>
										<ul class="menu">
											<li><a href="usuario.php">Cadastrar</a></li>

											<!-- ... -->
										</ul>
									</li>

									<li><a href="logout.php">logout</a>		
									</li>

									

								</ul>
							</div>
							<div class="top-bar-right">
								<ul class="menu">
									<li><input type="search" placeholder="Pesquisar"></li>
									<li><button type="button" class="button">Pesquisar</button></li>
								</ul>


							</div>
						</div>
					</div>



					<!--#############################		MENU 			############################-->



				<div id="Content"><?php include 'application/view/'.$url.'.phtml'; ?></div>
			</div>

		</div>
	

	<script src="js/vendor/jquery.js"></script>
	<script src="js/vendor/what-input.js"></script>
	<script src="js/vendor/foundation.js"></script>
	<script src="js/app.js"></script>	
</body>

</html>