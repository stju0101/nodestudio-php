<?php 

/* Herança é um recurso que permite que classes compartilhem atributos e métodos, afim de reaproveitar 
códigos ou comportamentos generalizados */

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar()
    {
        echo 'O veículo andou';
    }

    public function parar()
    {
        echo 'O veículo parou';
    }
}

class Carro extends Veiculo {

}

class Moto extends Veiculo {

}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Preto";
$carro->ano = 2013;
$carro->andar();

echo "<br>";

var_dump($carro);