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

		if($linha == $coluna){
			echo 'x';
		}
		else if($linha == 10 - $coluna){
			echo 'x';
		}
		else{
			echo '<span style="color:#808080">o</span>';
		}
	}
?>