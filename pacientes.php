<?php
require_once "funcoes.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pacientes</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<br><br>
<div class="container">
	
<table class="table table-striped table-bordered " id="pacientes">
	<tr>
		<th>Nome</th>
		<th>Cpf</th>
		<th>Email</th>
		<th>Acoes</th>
	</tr>

	<tr>
		<td>sdfsf</td>
		<td>sdfsd</td>
		<td>sdfsd</td>
		<td>sdfsdf</td>

	</tr>

	
</table>

</div>

<script type="text/javascript">
	
	$(document).ready(function() {
    $('#pacientes').DataTable();
} );
</script>

</body>
</html>