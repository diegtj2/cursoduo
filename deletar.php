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
	deletarPaciente($id);
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
			<form action="deletar.php" method="post">
				<div class="form-group">
					<h4>EXCLUIR PACIENTE</h4>
					<br/>
					<label>ID</label>
					<input type="text" name="id" class="form-control" value="<?php echo $valor['id']?>" readonly/> 
				</div>
				<div class="form-group">
					<label>Nome</label>
					<input type="text" name="nome" class="form-control" value="<?php echo $valor['nome']?>" readonly/>
				</div>
				<br/>
				<div class="form-group">
					<button type="submit"  class="btn btn-danger btn-sm" >EXCLUIR</button>
				</div>
				<a href="pacientes.php">voltar</a>
			</form>
		<?php endforeach?>	
	</div>
</body>
</html>