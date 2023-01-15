<?php 

// Composição
// Na composição, uma classe cria a instância de outra classe dentro de si própria, sendo assim, quando ela for destruída, a outra classe também será.

class Pessoa {
    public function setNome($nome)
    {
        return "O nome da pessoa é " . $nome;
    }
}

class Exibe{
    public $pessoa;
    public $nome;

    public function __construct($nome)
    {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome()
    {
        echo $this->pessoa->setNome($this->nome);
    }
}

$exibe = new Exibe("Sebastião");
$exibe->exibeNome();