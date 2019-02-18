<?php
require_once "funcoes.php";
include_once "configuracao.php";
ini_set("display_errors",1);


if($_POST){
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];

	inserePacientes($nome, $cpf, $email);
	header("location:pacientes.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Novo Paciente</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<br/><br/>
	<div class="container">
		<form action="novo.php" method="post">
			<div class="form-group">
				<h4>CADASTRAR PACIENTE</h4>
				<br/>
				<label>Nome</label>
				<input type="text" name="nome" class="form-control" required="true" value="" placeholder="digite o nome do paciente" /> 
			</div>
			<div class="form-group">
				<label>CPF</label>
				<input type="text" name="cpf" class="form-control" required="true" value="" placeholder="digite o cpf" /> 
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" required="true" value="" placeholder="digite o email" /> 
			</div>

			<div class="form-group">
				<button type="submit"  class="btn btn-success btn-sm" >ENVIAR</button>
			</div>
			<a href="pacientes.php">voltar</a>
		</form>
	</div>
</body>
</html>