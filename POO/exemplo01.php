<?php

class Pessoa
{
    public $nome; //atributo
    public function falar() //Método
    {
        return "O meu nome é \u{1F30E}" . $this->nome;
        //$this para chamar um atributo que não esteja dentro do método. 
    }
}

$joao = new Pessoa();
$joao->nome = "Joao Vitor"; //setinha para referenciar um atributo que esteja dentro de uma classe. 
echo $joao->falar();
