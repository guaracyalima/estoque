<?php include 'config.php' ?>
<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$eminimo = $_POST['eminimo'];

$sql = mysql_query(
	"UPDATE srs_product SET estoque_minimo = '$eminimo' WHERE id ='$nome' ")or die( mysql_error());
 echo"<script language='javascript' type='text/javascript'>alert('Estoque minimo cadastrado com sucesso.');window.location.href='main.php';</script>";
        
if (!$sql) {
	 echo"<script language='javascript' type='text/javascript'>alert('Erro ao atualizar estoque minimo. Tente novamente mais tarde ou contate o administrador do sistema.');window.location.href='index.php';</script>";
        die();
}

?>