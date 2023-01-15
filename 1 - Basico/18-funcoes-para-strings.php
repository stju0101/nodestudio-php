<?php 

//Funções para Strings
/*
	strtoupper - Transforma em letras maiusculas
	strtolower - Minusculas
	substr - "Exibe uma "mensagem" a partir da coluna desejada.
	str_pad - Adiciona "Caracteres" a uma variável ou objeto etc...
	str_repeat - Repeat caracteres
	strlen - Conta a quantidade de caracteres em uma variável etc..
	str_replace - Substitui uma string/caractece de um texto
	strpos - Retorna a posição de uma palavra em um texto
*/

$nome = "Nome1";
$novonome = strtoupper($nome);
echo $novonome."<br>"."<hr>";


$mensagem = "Olá mundo";
echo substr($mensagem, 2)."<br>"."<hr>";


$objeto = "mouse";
$novoObjeto = str_pad($objeto, 16, "*", STR_PAD_BOTH);
echo $novoObjeto."<br>"."<hr>";

$string = str_repeat("sucesso!" , 3);
echo $string."<br>"."<hr>";


$texto = "A seleção Argentina será campeã da copa de 2024";
$novotexto = str_replace("Argentina", "Brasileira", $texto);
echo $novotexto."<br>"."<hr>";


?>