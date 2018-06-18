<?php

require 'vendor/autoload.php';

use Convenia\Dominio\EmployeeExport\EmployeeExport;

$dominio = new EmployeeExport;

$employees = [
    [
        'nome' => 'Vincent Vega'
    ]
];

echo $dominio->employees($employees)->generate();