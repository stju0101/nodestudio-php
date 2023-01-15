<?php

function exibirNome() {
	echo "Meu nome é Sebastião";
}
exibirNome();
echo "<br>";

function somaNota($nome, $n1, $n2, $n3, $n4) {
	$media = ($n1 + $n2 + $n3 + $n4) / 3;
	if ($media >=6):
		echo "O aluno $nome foi aprovado com a média $media";
	else:
		echo "O aluno $nome foi reprovado com a média $media";
	endif;
}
somaNota("Sebastião", 5, 6, 7, 10);

?>