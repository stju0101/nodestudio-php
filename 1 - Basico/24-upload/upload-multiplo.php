<!DOCTYPE html>
<html>
<body>

<?php

if(isset($_POST['enviar-arquivo'])):
	$formatosPermitidos = array("png","jpeg","gif","jpg"); 
	$quantidadeArquivos = count($_FILES['arquivo']['name']);
	$contador = 0;

	while ($contador < $quantidadeArquivos):
	$extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

	if(in_array($extensao, $formatosPermitidos)):
	$pasta = "arquivos/";
	$temporario = $_FILES['arquivo']['tmp_name'][$contador];
	$novoNome = uniqid().".$extensao";

		if(move_uploaded_file($temporario, $pasta.$novoNome)):
			echo "Upload feito com sucesso em $pasta.$novoNome <br>";
		else:
			echo "Erro ao enviar o arquivo $temporario";
		endif;

	else:
			echo "Extensão não permitida : $extensao";
	endif;
	$contador++;
	endwhile;
endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo[]" multiple>
	<input type="submit" name="enviar-arquivo">
</form>
</body>
</html>