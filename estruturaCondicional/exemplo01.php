<?php

$qualSuaIdade = 15;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca) {
    echo "Criança";
} else if ($qualSuaIdade < $idadeMaior) {
    echo "Não é criança!";
} else if ($qualSuaIdade < $idadeMelhor) {
    echo "Adulto!";
} else {
    echo "Idoso";
}

echo "<br/>";

echo ($qualSuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade";
//se condição for verdadeira ENTÃO resposta tal, (:) SENAO apresenta retorno tal