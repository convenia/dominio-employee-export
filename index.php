<?php

require 'vendor/autoload.php';

use Convenia\Dominio\EmployeeExport\EmployeeExport;

$dominio = new EmployeeExport;

$employees = [
    [
        'nacionalidade' => '',
        'codi_emp' => ''
    ]
];

echo $dominio->employees($employees)->generate();