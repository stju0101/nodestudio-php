<?php 
//Funções para números
/*
	number_format - Formata a exibição de números
	round - arredonda a puxando para o lado maior
	ceil - arredonda sempre para cima
	floor - arredondado sempre para baixo
	rand - gera numeros aleatorios de acordo com os paramentos passados no caso de 1 a 20

*/

$db = 1234.56;
$preco = number_format($db, 2, "," , ".");
echo "O Valor é $preco"."<br>"."<hr>";

echo rand(1, 20);

?>
