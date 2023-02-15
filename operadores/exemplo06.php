<?php
$a = null;
$b = null;
$c = 10;

echo $a ?? $b ?? $c;
// sintaxe é: se a for nulo, mostra b. Se b for nulo, mostra c. E assim em diante. 