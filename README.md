# Dominio Employee Export

Classe para exportar dados de funcionários de sua empresa para o padrão aceito no software de folha [Domínio](http://www.dominiosistemas.com.br/)

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/48adc7e8c5c04929ad0bd01d9ce465e2)](https://www.codacy.com/app/Convenia/dominio-employee-export?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=convenia/dominio-employee-export&amp;utm_campaign=Badge_Grade)

## Requisitos

* PHP 5+

### Instale usando o composer [Composer](http://getcomposer.org/)

```bash
composer require convenia/dominio-import
```

## Exemplos de Uso

```php
use Convenia\Dominio\EmployeeExport\EmployeeExport;

$dominio = new EmployeeExport;
$dominio->employees([
            [
                'name' => 'Vincent Vega'
            ]
        ])
        ->generate();
```
