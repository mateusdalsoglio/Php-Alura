<?php

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'João',
    'saldo' => 2000
];

$conta3 = [
    'titular' => 'Maria',
    'saldo' => 2500
];



$contasCorrentes = [
    $conta1,
    $conta2, 
    $conta3
];

foreach ($contasCorrentes as $conta){
    echo $conta['titular'] . PHP_EOL;
}