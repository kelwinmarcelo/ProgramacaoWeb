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

echo json_encode($pessoas);