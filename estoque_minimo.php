<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Estoque</title>

	<link rel="stylesheet" type="text/css" href="../css/foundation.css">
	<link rel="stylesheet" type="text/css" href="../css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<link rel="icon" type="image/png" href="../img/favicon.ico"/>

</head>
<body>

	<div class="row">

		<div class="medium-6 medium-centered large-4 large-centered columns">
			<br>
			<?php 
			$query = mysql_query("SELECT id, nome FROM srs_product");

			?>
			<form action="eMinimo.php" method="POST" form="form1">

				<div class="row colum log-in-form">
					<h4 class="text-center" id="acesso">Estoque minimo</h4>
					<label class="labels">Produto</label>	

					<select name="nome">
						<option>Selecione...</option>

						<?php 
							while($prod = mysql_fetch_array($query)) { 

						?>
							<option value="<?php echo $prod['id']; ?>"><?php echo $prod['nome']; ?></option>

							<?php } ?>

						</select>

						


						<label class="labels">Estoque minimo</label>	
						<input class="inputOther" name="eminimo" type="text" id="eminimo">

						<input type="submit" name="submit" value="Cadastrar" class="button expanded">


					</div>		

				</form>
			</div>
		</div>	

	</body>
	</html>