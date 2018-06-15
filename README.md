# Dominio Employee Export

Pacote para exportar dados de funcionários de sua empresa para o padrão aceito no software de folha [Domínio Sistemas](http://www.dominiosistemas.com.br/)

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/48adc7e8c5c04929ad0bd01d9ce465e2)](https://www.codacy.com/app/Convenia/dominio-employee-export?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=convenia/dominio-employee-export&amp;utm_campaign=Badge_Grade)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/96b25a25-8634-4a6b-80f4-89867a6220cd/mini.png)](https://insight.sensiolabs.com/projects/96b25a25-8634-4a6b-80f4-89867a6220cd)
[![Build Status](https://travis-ci.org/convenia/dominio-employee-export.svg?branch=master)](https://travis-ci.org/convenia/dominio-employee-export)
[![License](https://poser.pugx.org/convenia/afd-reader/license)](https://packagist.org/packages/convenia/afd-reader)

## Requisitos

- PHP >= 5.6

### Instale usando o [composer](http://getcomposer.org/)

```bash
composer require convenia/dominio-employee-export
```

## Exemplos de Uso

```php
use Convenia\Dominio\EmployeeExport\EmployeeExport;

$dominio = new EmployeeExport;

$employees = [
    [
        'name' => 'Vincent Vega'
    ]
];

$dominio->employees($employees)->generate();
```
