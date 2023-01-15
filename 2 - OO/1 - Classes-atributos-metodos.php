<?php 


class Pessoa {

    // Atributos
    public $nome;
    public $idade;

    // Métodos
    public function falar()
    {
        echo $this->nome . ' acabou de falar';
    }
}

// Instanciando a classe
$pessoa1 = new Pessoa();

// Definindo valor ao atributod
$pessoa1->nome = "Sebastião Júnior";
$pessoa1->falar();
