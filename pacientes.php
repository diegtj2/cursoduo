<?php
require_once "funcoes.php";
<<<<<<< HEAD
include_once "configuracao.php";
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);
$pacientes = listaPacientes();
=======
header('Content-type: text/html; charset=utf-8');
>>>>>>> b5e95e7fc385ce263ab8765fd68c0ca886f29f11
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pacientes</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
</head>
<body>
<<<<<<< HEAD
<br/><br/>
<div class="container">
	<a href="novo.php" class="btn btn-primary">Novo paciente</a>
	<br/><br/>
	<table class="table table-striped table-bordered " id="pacientes">
		<tr>
			<th>Nome</th>
			<th>CPF</th>
			<th>Email</th>
			<th>Ações</th>
		</tr>
	<?php foreach($pacientes as $valor): ?>
		<tr>
			<td><?php echo $valor['nome']?></td>
			<td><?php echo $valor['cpf']?></td>
			<td><?php echo $valor['email']?></td>
			<td>
				<a href="editar.php?id=<?=$valor['id']?>">editar</a> | 
				<a href="deletarPaciente.php?id=<?=$valor['id']?>">excluir</a>
			</td>
		</tr>
	<?php endforeach?>
	</table>
=======
<br><br>
<div class="container">
	
<table class="table table-striped table-bordered " id="pacientes">
	<tr>
		<th>Nome</th>
		<th>CPF</th>
		<th>Email</th>
		<th>Ações</th>
	</tr>

	<tr>
		<td>sdfsf</td>
		<td>sdfsd</td>
		<td>sdfsd</td>
		<td>sdfsdf</td>

	</tr>

	
</table>

>>>>>>> b5e95e7fc385ce263ab8765fd68c0ca886f29f11
</div>

<script type="text/javascript">
	
	$(document).ready(function() {
    $('#pacientes').DataTable();
} );
</script>

</body>
</html>
