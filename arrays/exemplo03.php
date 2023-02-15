<?php

$pessoas = array();

array_push(
    $pessoas,
    array(
        'Nome' => 'João',
        'idade' => 20
    )
);


array_push(
    $pessoas,
    array(
        'Nome' => 'Glaucio',
        'idade' => 25
    )
);

print_r($pessoas[0]['Nome']);