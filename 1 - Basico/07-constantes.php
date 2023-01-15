<?php

//Constantes

define("NOME","Sebastião Júnior");
define("IDADE","21");
define("LIVROS",['Carl Sagan','Contato','Bilhoes e Bilhoes']);

echo "Meu nome é ".NOME." e eu tenho ".IDADE." anos";
echo "<hr>";
echo var_dump(LIVROS);
echo "<br>";
echo LIVROS[0];

function exibeNome() {
	echo NOME;
}

exibeNome();

?>