<html>
<?php
/*Validações

*/
//Maneira simples sem validação
//if(isset($_POST['enviar-formulario'])):
//	$idade = $_POST['idade'];
//	echo $idade;
//endif;
//////////////////////////////////////

if(isset($_POST['enviar-formulario'])):
	$erros = array();
	if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
		$erros[]= "Idade precisar ser inteiro";
	endif;	

	if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
		$erros[] = "Email invalido";
	endif;	

	if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
		$erros[] = "Peso invalido.";
	endif;

	if(!empty($erros)):
		foreach ($erros as $erro):
			echo "<li> $erro </li>";
		endforeach;
	else:
			echo "Parabéns, dados corretos"."<br>";
			echo "Sua idade é $idade"."<br>";
			echo "Seu email é $email"."<br>";
			echo "Seu peso é $peso"."<br>";
	endif;

endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Idade: <input type="text" name="idade"><br>
Email: <input type="text" name="email"><br>
Peso: <input type="text" name="peso"><br>
<button type="submit" name="enviar-formulario">Enviar</button>
</form>

</html>