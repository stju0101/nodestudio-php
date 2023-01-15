<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<?php
require_once 'db-connect.php';

session_start();

if (isset($_POST['enviar'])):
	$erros = array();
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	if(empty($login) or empty($senha)):
		$erros[] = "<li>O Campo login/senha precisa ser preenchido</li>";
	else:
		$sql = "SELECT login FROM usuarios WHERE  login = '$login'";
		$resultado = mysqli_query($connect, $sql);

		if(mysqli_num_rows($resultado) > 0):
		$senha = md5($senha);
		$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha ='$senha'";
		$resultado = mysqli_query($connect, $sql);

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				header('Location: home.php');
			else:
				$erros[] = "<li>Usuario e senha nao conferem</li>";
			endif;

		else:
			$erros[] = "<li>Usuario inexistente</li>";
		endif;
	endif;
endif;

?>



<h1>Login</h1>
<?php
	if(!empty($erros)) {
		foreach ($erros as $erro) {
			echo $erro;
		}
	}
?>
<form action="" method="POST">
	Login: <input type="text" name="login"><br>
	Senha: <input type="password" name="senha"><br>
	<button name="enviar">Enviar</button>
</form>
</body>
</html>