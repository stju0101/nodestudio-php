<?php 

// clone* 
// construct* 
// invoke
// tostring
// get 
// set


class Pessoa { 
    private $dados = [];

    public function _set($nome, $valor) 
    { 
        $this->dados[$nome] =  $valor;
    }

    public function __get($nome)
    {
        return $this->dados[$nome];
    }

    public function __tostring()
    {
        return "Tentei imprimir o objeto";
    }

    public function __invoke()
    {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa(); 
$pessoa->nome = "Sebastião";
$pessoa->idade = 26;
$pessoa->sexo = "M";

// tosting
echo $pessoa;

// invoke
echo $pessoa();

