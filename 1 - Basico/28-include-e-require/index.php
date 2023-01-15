<?php 
include 'header.php';
?>

<?php echo "Hello Friend" ?>

<?php 
include 'footer.php';

/*
Produzem o mesmo resultado, porém
se o require tentar inserir uma arquivo e não conseguir,
será retornado um erro fatal e será interrompido a execução do script

O "once" verifica se o arquivo já foi incluído.
Caso tenha sido incluido, o segundo será excluido.
*/

?>


