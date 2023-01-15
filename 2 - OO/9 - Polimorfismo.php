<?php 

// Polimorfismo = Reescrever um método herdado

class Animal {

    public function andar()
    {
        echo "O animal andou";
    }

    public function correr()
    {
        echo "O animal correu";
    }
}

class Cavalo extends Animal {

    public function andar()
    {
        echo "O cavalo andou";
    }
}

$animal = new Cavalo;
$animal->andar();