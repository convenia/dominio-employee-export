# Dominio Employee Export

Classe para exportar dados de funcionários de sua empresa para o padrão aceito no software de folha [Domínio](http://www.dominiosistemas.com.br/)

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/48adc7e8c5c04929ad0bd01d9ce465e2)](https://www.codacy.com/app/Convenia/dominio-employee-export?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=convenia/dominio-employee-export&amp;utm_campaign=Badge_Grade) [![Build Status](https://travis-ci.org/edbizarro/alelo-order.svg?branch=master)](https://travis-ci.org/edbizarro/alelo-order) [![StyleCI](https://styleci.io/repos/63798033/shield)](https://styleci.io/repos/63798033) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/96b25a25-8634-4a6b-80f4-89867a6220cd/mini.png)](https://insight.sensiolabs.com/projects/96b25a25-8634-4a6b-80f4-89867a6220cd)
## Requisitos

* PHP 5+

### Instale usando o composer [Composer](http://getcomposer.org/)

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

$dominio->employees($employees)
        ->generate();
```
