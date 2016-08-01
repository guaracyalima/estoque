<?php
if(IsSet($_COOKIE["logado"])){}
	else{
		echo '<meta http-equiv="refresh" content="0;url=/">';
		exit; 

	}

	if(isset($_GET['url'])){
		$url=$_GET['url'];
	}
	else {
		$url="";
	}

	$url=(empty($url))?"index":$url;


	include 'application/controler/Produtos.php';
	include 'application/controler/Categorias.php';
	include 'application/controler/Retirantes.php';
	include 'application/controler/Fornecedores.php';
	include 'application/controler/Form.php';
	include 'application/controler/Relatorios.php';
	include 'application/controler/DB.php';

	?>