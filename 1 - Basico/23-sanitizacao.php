<html>
<?php
/* Sanitize / Sanitização
Funções (filter_input - filter_var)
	FILTER_SANITIZE_SPECIAL_CHARS
	FILTER_SANITIZE_NUMBER_INT
	FILTER_SANITIZE_EMAIL
	FILTER_SANITIZE_URL

*/
//////////////////////////////////////

if(isset($_POST['enviar-formulario'])):
	$erros = array();

	//SANITIZE

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	echo $nome."<br>";

	$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
	if(!filter_var($idade, FILTER_VALIDATE_INT)):
		$erros[] = "Idade precisa ser inteiro";
	endif;
	
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	echo $email."<br>";

	if(!empty($erros)):
		foreach ($erros as $erro):
			echo "<li> $erro </li>";
		endforeach;
	else:
			echo "Parabéns, dados corretos"."<br>";
	endif;

endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Nome: <input type="text" name="nome"><br>
Idade: <input type="text" name="idade"><br>
Email: <input type="text" name="email"><br>
Peso: <input type="text" name="peso"><br>
<button type="submit" name="enviar-formulario">Enviar</button>
</form>

</html>