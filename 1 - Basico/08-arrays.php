<?php
//Arrays Númericos


$carros = array("BMW","SW4","HONDA CITY");
echo $carros[0];
echo "<hr>";

$motos = array();
$motos[] = "Yamanha";
$motos[] = "Hornet";
$motos[5] = "XJ6";


echo $motos[5];

echo "<hr>";
$nomes = ["Nome","Nome2","Nome"];
echo $nomes[0];

echo "<hr>";
foreach ($carros as $valor) {
	echo $valor."<br>";
}

echo "<hr>";
//Arrays associativos

$pessoa = array("nome"=> "Nome1", "idade"=>21, "altura"=> 1.76);
$pessoa["cidade"] = "Goiânia";

foreach ($pessoa as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}

echo "<hr>";
//Arrays multidimensionais
$times = array(
	"cariocas"=> array("vasco","flamengo","botafogo"),
	"goiano"=> array("campeao"=>"goias","vice"=>"vila","terceiro"=>"atletico"),
	"baiano"=> array("bahia","vitoria","curitiba")

);//

foreach ($times["goiano"] as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}


?>