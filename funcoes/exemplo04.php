<?php

use function PHPSTORM_META\argumentsSet;

function ola()
{
    $argumentos = func_get_args();
    return $argumentos;
}
var_dump(ola("Bom dia!"));
