<?php

session_id('1ucalgkh4ppufr148mo11btrgu');

require_once("config.php");

session_regenerate_id();

echo session_id();

//var_dump($_SESSION);