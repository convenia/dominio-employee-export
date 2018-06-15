# Dominio Employee Export

Classe para exportar dados de funcionários de sua empresa para o padrão aceito no software de folha [Domínio Sistemas](http://www.dominiosistemas.com.br/)

## Requisitos

* PHP >= 5.6

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

$dominio->employees($employees)
        ->generate();
```
