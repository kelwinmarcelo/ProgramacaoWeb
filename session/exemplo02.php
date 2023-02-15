<?php

require_once("config.php");

//session_unset($_SESSION['NOME']);

session_destroy();
echo $_SESSION['NOME'];
