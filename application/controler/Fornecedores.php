<?php

class Fornecedores extends Produtos   {
	
	
	public $tabela;
	public $id;
	public $conexaoDB;
	
	#Construtor - Conecta e seleciona a tabela

	//não se esqueça, é POO
	function __construct() {
		
		$this->conexaoDB=new DB();
		$this->tabela="fornecedor";
	
	}
	
	#Cadastra ou chama o o metodo para atualizacao dos produtos
	
	
}

?>