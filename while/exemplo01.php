<?php

$condicao = true;

while ($condicao) {
    $numero = rand(1, 10);

    if ($numero === 3) {
        echo "TRÊEES!!!";
        $condicao = false;
    }

    echo $numero . " ";
}
