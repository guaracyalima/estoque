
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
									<li><a href="estoque_minimo.php">Definir estoque minimo</a></li>


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
					<!--<div class="top-bar-right">
						<ul class="menu">
							<li><input type="search" placeholder="Pesquisar"></li>
							<li><button type="button" class="button">Pesquisar</button></li>
						</ul>


					</div>-->
				</div>
			</div>