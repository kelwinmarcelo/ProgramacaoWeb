<?php

class Carro
{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo; //atributo recebe o valor do parâmetro
    }
    public function getMotor(): float //passando como parâmetro o tipo de dado a retornar
    {
        return $this->motor;
    }
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }
    public function getAno(): int
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
    public function exibir()
    {
        return array(
            "modelo " => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );
    }
}

$gol = new Carro(); //gol é uma instância da classe 
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2007");

print_r($gol->exibir());
echo "<br>";
var_dump($gol->exibir());
