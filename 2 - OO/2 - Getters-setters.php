<?php 

class Login {
    private $email;
    private $senha;

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

$logar = new Login();
$logar->setEmail("teste@()/teste.com");
$logar->setSenha("123");
echo "<br>";
$logar->logar();
echo "<br>";
echo $logar->getEmail();
