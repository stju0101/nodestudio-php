<?php 

// Serve como um modelo para a classe que a impletar
// A classe que implentar esse interface fica obrigada a criar os métodos declarados na interface
interface Crud {
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud {
    public function create(){
        
    }
    public function read(){
        
    }
    public function update(){
        
    }
    public function delete(){
        
    }
}