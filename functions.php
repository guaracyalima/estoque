<?php include 'application/controler/DB.php' ?>

<?php 

function get_criaComprovanteDeReserva(){
	
	$sql = mysql_query("SELECT * FROM reserva order by id desc LIMIT 1");
	$contar = mysql_num_rows($sql);

	if ($contar <='0'){
		echo "<p>Aluno não encontrado. Tente novamente mais tarde ou contate o administrador do sistema!</p>";
	}else {
		while ($rs = mysql_fetch_array ($sql)){
			$id = $rs['0'];
			$matricula = $rs['1'];
			$data = $rs['2'];
			?>
			<tbody>
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $matricula; ?></td>
					<td><?php echo $data; ?></td>      
				</tr>				
				<?php				
			}
		}
		
	}?>