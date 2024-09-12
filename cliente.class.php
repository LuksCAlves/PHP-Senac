<?php

class Cliente
{
    protected $nome, $email;

    public function setNome($n)
    {  // (setNome)faz referencia do conteudo da variavel da classe / copia do conteudo da variavel
        $this->nome = $n;
    }
    public function setEmail($e)
    {
        $this->email = $e;
    }
    public function getNome()
    {
        return $this->nome;
    }


    public function getEmail()
    {
        return $this->email;
    }
    public function validar($n, $e)
    { // (variaveis espelho) chama e renomeia as variaveis $nome e $email
        //acesso à variável de forma direta
        // $this->nome = $n;
        // $this->email = $e;

        // acesso à variável de forma direta

        $this -> setNome($n);
        $this -> setEmail($e);
    }
    public function exibir()
    {
        // echo 'Nome: ' . $this->nome . '<br>';
        // echo 'Email: ' . $this->email . '<br>';

        // echo 'Nome: ' . $this->getNome() . '<br>';
        // echo 'Email: ' . $this->getEmail() . '<br>';

        echo "Nome: {$this->getNome()} <br>";
        echo "Email: {$this->getEmail()} <br>";
    }
}
// VISIBILIDADE:
// - public -  acesso é ilimitado
// - protected - acesso é limitado à classe, seus membros e seus derivados
// - private - acesso é limitado apenas aos membros da classe
?>