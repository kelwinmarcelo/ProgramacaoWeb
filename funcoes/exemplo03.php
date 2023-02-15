<?php

function ola($texto = "mundo", $periodo = "Bom dia")
// neste caso, atribuindo um texto este vai ser o retorno padrão. Se não atribuir, terá que passar algum texto como parâmetro depois, como foi feito abaixo. 
{

    return "Olá $texto! $periodo!<br>";
}

echo ola("Mundo");
echo ola("", "Boa noite");
echo ola("joao", "Boa tarde");
echo ola("kelwin", "");
