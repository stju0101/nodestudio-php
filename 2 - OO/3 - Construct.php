<?php 

class Login {
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome)
    {
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $nome = filter_var($nome, FILTER_SANITIZE_EMAIL);
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function logar()
    {
        if($this->email == "teste@teste.com" and $this->senha == "123")
        {
            echo "Logado com sucesso!";
        } else {
            echo "Dados inválidos";
        }
    }
}

$logar = new Login('teste@teste.com', '123', 'User');
echo "<br>";
$logar->logar();
echo "<br>";
echo $logar->getEmail();
