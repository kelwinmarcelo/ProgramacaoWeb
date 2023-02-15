<?php

$json = '[{"Nome":"Jo\u00e3o","idade":20},{"Nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);

var_dump($data);
