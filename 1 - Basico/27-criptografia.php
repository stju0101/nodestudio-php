<?php

$senha = "12348";

$novaSenha = base64_encode($senha);
echo "Base64: ".$novaSenha."<br>";
echo "Sua senha é: ".base64_decode($novaSenha);
echo "<hr>";

echo "Md5: ".md5($senha)."<br>";
echo "Sha1: ".sha1($senha);
echo "<hr>";

$options = [
	'cost' => 10
];
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo $senhaSegura;
echo "<hr>";

$senhaDB = '$2y$10$gp29GrHuTh31RJsqybgmPeClDcs/a768Ur8TtpuP5uZkQd8Q2D8mO';
if(password_verify($senha, $senhaDB)):
	echo "Senha válida";
else:
	echo "Senha inválida";
endif;

?>