<?
setcookie("logado", "", "time()-1");
?>
<HTML>
	<HEAD>
		<title>CONTROLE DE ESTOQUE</title>
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
		<meta http-equiv="refresh" content="3;url=index.html">
		<script language="JavaScript">
			function deleteCookie(nome){
				var exdate = new Date();
				exdate.setTime(exdate.getTime() + (-1 * 24 * 3600 
					* 1000));
				document.cookie = nome + "=" + escape("")+ ((-1 
					== null) ? "" : "; expires=" + exdate);
			} 
		</script>

	</HEAD>
	<BODY>
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<h1 class="msgSucess">Bye</h1>
				
			</div>
		</div>
				
					<script language="JavaScript">
						deleteCookie("logado");
					</script>
					<script src="js/vendor/jquery.js"></script>
					<script src="js/vendor/what-input.js"></script>
					<script src="js/vendor/foundation.js"></script>
					<script src="js/app.js"></script>
				</BODY>
			</HTML>
