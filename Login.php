<?php
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);


include_once "funcoes.php";
include_once "configuracao.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="form-group">
		<br/><br/><br/>
			<form action="Login.php" method="post">
				<label class="label label-default">Usuario:</label>
				<input type="text" name="login" class="form-control"></input>
				<br/><br/>
				<label class="label label-default">Senha:</label>
				<input type="password" name="senha" class="form-control"></input>
				<br/><br/>
				<button type="submit" name="cadastrar" class="btn btn-outline-primary">Cadastrar</button>
			</form>
		</div>
	</div>	
</body>
</html>