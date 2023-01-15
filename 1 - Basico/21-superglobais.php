<?php
//Superglobais. Váriaveis pré-definidas do php

/*
	$GLOBALS - É usada para acessar qualquer variavel do script em qualquer lugar
	$_SERVER - Contém informações informações sobre indexes, caminhos, informações sobre o server etc...
	$_REQUEST - 
	$_POST
	$_GET
	$_FILES
	$_ENV
	$_COOKIE
	$_SESSION

*/

$nome = "Sebastião";
$sobrenome = "Júnior";

function exibeNome() {
	echo $GLOBALS['nome'];
}
exibeNome();
echo "<br><hr>";

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";
echo "<br><hr>";





?>
