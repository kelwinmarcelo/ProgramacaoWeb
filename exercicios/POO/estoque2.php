<?php

class Estoque
{
    private $nome;
    private $qtdAtual;
    private $qtdMinima;

    public function __construct($nome = "", $qtdAtual = 0, $qtdMinima = 0)
    {
        $this->nome = $nome;
        $this->qtdAtual = $qtdAtual;
        $this->qtdMinima = $qtdMinima;
    }

    // Setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setQtdAtual($qtdAtual)
    {
        $this->qtdAtual = $qtdAtual;
    }

    public function setQtdMinima($qtdMinima)
    {
        $this->qtdMinima = $qtdMinima;
    }

    // Getters
    public function getNome()
    {
        return $this->nome;
    }

    public function getQtdMinima()
    {
        return $this->qtdMinima;
    }

    public function getQtdAtual()
    {
        return $this->qtdAtual;
    }

    // Methods
    public function darBaixa($qtde)
    {
        if ($qtde < $this->qtdAtual) {
            $this->qtdAtual -= $qtde;
            echo "O estoque agora é " . $this->qtdAtual . "\n";
        } else {
            echo "Não é possível realizar esta baixa, o estoque ficará negativa.\n";
        }
    }

    public function mostrar()
    {
        return "Produto " . $this->nome . "\nQuantidade Mínima: " . $this->qtdMinima . "\nQuantidade Atual: " . $this->qtdAtual . "\n";
    }

    public function precisaRepor()
    {
        return ($this->qtdAtual <= $this->qtdMinima);
    }
}
