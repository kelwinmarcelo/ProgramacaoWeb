<?php
// Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.
$notas = array("", "", "");
$somaTotal = 0;

for ($i = 0; $i < 3; $i++) {
    // $notas = $_GET["f_num"];
    $somaTotal += $notas[$i];
}

$resultadoMedia = $somaTotal / 3;

if ($resultadoMedia >= 6) {
    echo " Aluno APROVADO! Nota: " . $resultadoMedia;
} else {
    echo " ALUNO REPROVADO Nota: " . $resultadoMedia;
}
