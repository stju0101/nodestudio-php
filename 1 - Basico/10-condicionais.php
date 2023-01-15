<?php 

$numero = 2;

if ($numero == 10):
	echo "é igual a 10";
elseif($numero <=9):
	echo "é menor ou igual a 9";
else:
	echo "é diferente de 10";
endif;

echo "<hr>";

//Operador ternario

$media = 7;

echo ($media >= 7) ? "Aprovado!" : "Reprovado";

?>