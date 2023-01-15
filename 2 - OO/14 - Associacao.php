<?php 

// Associação
// Acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro.

class Pedido {
    public $numero; 
    public $cliente;
}

class Cliente {
   public $nome;
   public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Rodrigo Oliveira";
$cliente->endereco = "Rua xxx, Número: 177";

$pedido = new Pedido(); 
$pedido->numero = "123";

// Associação entre objetos
$pedido->cliente = $cliente;
 
$dados = [
    'numero'    =>  $pedido->numero,
    'cliente'   =>  $pedido->cliente->nome,
    'endereco'  =>  $pedido->cliente->endereco,
];