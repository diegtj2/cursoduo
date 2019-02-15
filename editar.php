<?php
require_once "funcoes.php";
include_once "configuracao.php";
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);

if($_GET){
	$id = $_GET['id'];
}

if($_POST){
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	editarPaciente($id, $nome, $cpf, $email);
	header("location:pacientes.php");
}

$pacientes = getPaciente($id);

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
		<?php foreach($pacientes as $valor): ?>
			<form action="editar.php" method="post">
				<div class="form-group">
					<label>ID</label>
					<input type="text" name="id" class="form-control" readonly="" value="<?php echo $valor['id']?>" /> 
				</div>
				<div class="form-group">
					<label>Nome</label>
					<input type="text" name="nome" class="form-control" required="true" value="<?php echo $valor['nome']?>" /> 
				</div>
				<div class="form-group">
					<label>CPF</label>
					<input type="text" name="cpf" class="form-control" required="true" value="<?php echo $valor['cpf']?>" /> 
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" required="true" value="<?php echo $valor['email']?>" /> 
				</div>

				<div class="form-group">
					<button type="submit"  class="btn btn-success" >EDITAR</button>
				</div>
				<a href="pacientes.php">voltar</a>
			</form>
		<?php endforeach?>
	</div>
</body>
</html>