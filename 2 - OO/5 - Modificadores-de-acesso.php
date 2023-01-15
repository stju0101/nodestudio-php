<?php 

/*

public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado com public serão 
acessíveis por todos que quiserem acessá-los

protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos 
protegidos como se fossem públicos

private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível 
só e somente só pela classe que a declarou

*/

class Veiculo {
    private $cor;
    protected $modelo;
    public $ano;

    // Private - só é possível acessar dentro do escopo da classe tendo um método público para isso
    private function andar()
    {
        echo 'O veículo andou';
    }

    protected function setCor($c){
        $this->cor = $c;
    }

    public function mostrarAcao()
    {
        $this->andar();
    }

    public function parar()
    {
        echo 'O veículo parou';
    }

    public function setModelo($m)
    {
        $this->modelo = $m;
    }



}

class Carro extends Veiculo {
    public function cor($c)
    {
        $this->setCor($c);
    }
}

class Moto extends Veiculo {

}

$veiculo = new Veiculo();
$veiculo->mostrarAcao();
var_dump($veiculo);

$carro = new Carro();
$carro->setModelo('Vectra GT');
$carro->cor('Cinza');
$carro->ano = 2013;

echo "<br>";

var_dump($carro);
var_dump(get_class_methods($carro));