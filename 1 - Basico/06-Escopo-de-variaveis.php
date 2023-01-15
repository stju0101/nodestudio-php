<?php

//Variaveis globais
$nome = "Sebastião Júnior";
$a = 1;
$b = 2;
$c = 2;


///Escopo local da função
function exibeNome() {
	global $nome;
	echo $nome;
}

	exibeNome();
	echo '<hr>';
////////////////

function exibeCidade() {
	global $cidade;
	$cidade = "Goiânia";
}
	exibeCidade();
	echo $cidade;
	echo '<hr>';
	
//////////////
function soma() {
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
	soma();

?>