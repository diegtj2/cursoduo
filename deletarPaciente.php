<?php
require_once "funcoes.php";
include_once "configuracao.php";
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);

if($_GET){
	$id = $_GET['id'];
}

echo "<h2>ID do paciente: ".$id."</h2>";

if($_POST){
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	deletarPaciente($id);
	header("location:pacientes.php");
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar pacientes</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
</head>
<body>
	<br/><br/>
	<div class="container">
		<form action="deletarPaciente.php" method="post">
			<div class="form-group">
				<label>ID</label>
				<input type="text" name="id" class="form-control" required="true" value="" placeholder="digite o id a ser deletado"/> 
			</div>
			<div class="form-group">
				<button type="submit"  class="btn btn-success" >Deletar</button>
			</div>
			<a href="pacientes.php">voltar</a>
		</form>
	</div>
</body>
</html>