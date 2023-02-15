<?php

$numero = $_GET["f_num"];

if ($numero == 0) {
    echo "O número " . $numero . " é um número NEUTRO";
} else if ($numero % 2 == 0) {
    echo "O número " . $numero . " é um número PAR";
} else {
    echo "O número " . $numero . " é um número IMPAR";
}
