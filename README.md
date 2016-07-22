# Dominio Employee Export

Classe para exportar dados de funcionários de sua empresa para o padrão aceito no softwre de folha [Domínio](http://www.dominiosistemas.com.br/)

## Requisitos

* PHP 5.5+

### Instale usando o composer [Composer](http://getcomposer.org/)

```bash
composer require convenia/dominio-import
```

## Exemplos de Uso

```php
use Convenia\DominioImport\DominioImport;

$dominio = new DominioImport;
$dominio->employees([
            [
                'name' => 'Vincent Vega'
            ]
        ])
        ->generate();
```
