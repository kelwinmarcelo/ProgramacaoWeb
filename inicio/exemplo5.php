<?php
$nome = "João";

function teste()
{
    global $nome; // global server para chamar a variável que está fora da função 
    echo $nome;
}

function teste2()
{
    $nome = "John";
    echo $nome . " agora no teste 2";
}

teste();
echo "<br/>"; // este br para aplicar uma quebra de linha usando html 
teste2();
