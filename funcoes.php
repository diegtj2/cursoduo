<?php 
function somar($a,$b){
	$resultado = $a + $b;
	return $resultado;
}

function media($nota ){
 	if($nota > 5){
 		$nota = "aprovado!";
 	}elseif($nota == 5){
 		$nota = "nota $nota, foi de raspão!";
 	}elseif($nota < 5){
 		$nota = "reprovado!";
 	} 		
 	return $nota;
}

function definirPrimo($numero){
	$contador = 0;
	for ($i=1; $i <= $numero ; $i++) { 
		if($numero % $i == 0){
			$contador ++;
		}
	}
		if($contador <= 2 && $contador > 0){
			return "<br>".$numero;
	}
	return "";
}

function numerosPrimos($inicial,$final){
	for($i = $inicial; $i <= $final; $i++){
		echo definirPrimo($i); 		
 	}
}

 //funcao do desenho de X
function definirX($linha,$coluna){
	if($linha == $coluna || $linha == 10 - $coluna){
		echo 'X';
	}
	// else if($linha == 10 - $coluna){
	// 	echo 'X';
	// }
	else{
		echo '<span style="color:#808080">0</span>';
	}
}

function conexao($host,$usuario,$senha,$banco){

	mysql_connect($host,$usuario,$senha) or die("nao consegui conectar com o banco de dados");
	mysql_select_db($banco) or die("banco de dados nao encontrado");

}

function getAssoc($data){
	$retorno = [];
	while($a = mysql_fetch_assoc($data)){

		$retorno[] = $a;
	}
	return $retorno;
}


function listaPacientes(){

	 $sql = "SELECT * FROM paciente";

	$data =  mysql_query($sql);

	$retorno = getAssoc($data);
	
	return $retorno;

}

function inserePacientes($nome, $cpf, $email){
	$sql =  "INSERT INTO paciente (id, nome, cpf, email) VALUES (null, '$nome', '$cpf', '$email')";
	mysql_query($sql);
	return "paciente inserido!";
}


function editarPaciente($id, $nome, $cpf, $email){

	$sql =  "UPDATE paciente SET nome = '$nome', cpf = '$cpf', email = '$email' WHERE id = $id";
	mysql_query($sql);

}

function deletarPaciente($id){
	$sql = "DELETE FROM paciente WHERE id = $id";
	mysql_query($sql);
}
?>