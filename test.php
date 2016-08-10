<form id="form1" name="form1" method="post" action=""> 
Materiais: 
<select name="materiais"> 
<option value="">Selecione um Material:</option> 
<?php 
$sql = "select * from materiais"; //aqui faz a consulta no banco de dados 
$resultado = mysql_query($sql); //aqui é o retorno da consulta 
if($resultado)//teste se houve resultado entra no while 
{ 
while($linhas = mysql_fetch_array($resultado,MSQL_ASSOC)){ //monta um vetor colocando todos os resultados em $linhas 
?> 
<option value="<?php $linhas['id'];//aqui é o valor geralmente se coloca o id da tabela ?>" 
<?php if($linhas['id'] == $_POST['materiais']){ echo "selected"; /*aqui eu testo e vejo se alguma opção foi selecionada eu a mantenho selecionada*/ } ?>> 
<?php echo $linhas['nome do campo a ser exibido']; /*aqui é a parte de exibição a informação que o usuario ira ver na tela "as opções"*/ ?> 
</option> 
<?php } } ?> 
</select> 

</form> 
