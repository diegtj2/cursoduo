<?php
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);

include_once "funcoes.php";


$valorDoFormulario = @$_POST['media'];



//numerosPrimos(0,50);


?>

<!DOCTYPE html>
<html>
<head>
	<title>pagina inicial</title>
	<meta />
</head>
<body>

<form action="index.php" method="post">
	
<input type="text" value="" name="media"></input>

<input type="submit" value="enviar"></input>
</form>
<?php echo media($valorDoFormulario);?>

<br>

<!-- exercicio proxima aula
1234567891011  J

xooooooooox    1
oxoooooooxo    2
ooxoooooxoo    3
oooxoooxooo    4
ooooxoxoooo    5
oooooxooooo    6
ooooxoxoooo    7
oooxoooxooo    8
ooxoooooxoo    9
oxoooooooxo    10
xooooooooox    11
               I
-->

<br/>

<?php


for ($j=0; $j <= 10 ; $j++) { //laco da linha

	for ($i=0; $i <= 10; $i++) { //laco da coluna

		definirX($j,$i);
;
	}
	echo "<br>";
}


?>


</body>
</html>





 