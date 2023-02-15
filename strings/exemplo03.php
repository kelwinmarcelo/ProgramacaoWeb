<?php

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);
// a sintaxe é: trocando o que, pelo que, em quê..
$empresa = str_replace("e", "3", $empresa);

echo $empresa;