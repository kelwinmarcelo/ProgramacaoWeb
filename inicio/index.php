<?php
$nome = "João";
$sobrenome = "Flausino";
$nomeCompleto = $nome . " " . $sobrenome;
echo $nomeCompleto;

//var_dump($nome); vardump com o depurável entre parêntese

echo "<br/>"; // este br para aplicar uma quebra de linha usando html 

//unset($nome); //para limpar a variável
//
if (isset($nome)) { //isset = se () existe -  aqui neste caso a sintaxe é SE variavel $nome existe
    echo $nome;
}
