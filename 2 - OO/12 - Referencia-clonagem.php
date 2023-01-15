<?php 

class Pessoa {
    public $idade;

    public function __clone()
    {
        echo "Clonagem de objetos";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

// Clonagem
$pessoa2 = clone $pessoa;

// Referência
// $pessoa2 = $pessoa;
$pessoa2->idade = 35;

echo $pessoa2->idade;