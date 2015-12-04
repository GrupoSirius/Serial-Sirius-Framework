<?php

function __autoload($file) {
    include_once 'controller/AppController.php';
    include_once 'controller/TesteController.php';
    
}

$teste = new TesteController;

//$teste->controlarLuz(1);
$teste->saudacao();