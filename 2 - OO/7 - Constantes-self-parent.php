<?php 

class Pessoa {
    const nome = "Sebastião";

    public function exibirNome()
    {
        echo self::nome;
    }
}

class Sebastiao extends Pessoa {
    const nome = "Júnior";

    public function exibirNome()
    {
        // echo parent::nome;
        echo self::nome;
    }
}

$sebastiao = new Sebastiao();
$sebastiao->exibirNome();