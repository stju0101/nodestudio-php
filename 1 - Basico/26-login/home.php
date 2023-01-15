<!DOCTYPE html>
<html>
<head>
	<title>Página restrita</title>
</head>
<body>
<?php
require_once 'db-connect.php';

session_start();

//Verificação
if(!isset($_SESSION['logado'])):
	header('Location: index.php');
endif;

//Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

echo "Olá ".$dados['nome'].". Seja bem vindo"."<br>";
echo '<a href="logout.php">Sair</a>';
?>	

</body>
</html>