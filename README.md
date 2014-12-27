php-mdarray
===========

Installation
------------

Add the package to your `composer.json` and run `composer update`.

    {
        "require": {
            "quazisoft/mdarray": "*"
        }
    }
    
    

## Basic Usage

**Example data**
```php
$array = array(array(1.1,1.2,null), array(2.1,2.2,null));
$isNull = MD2ArrayUtils::isNullRow($array, 0); // $isNull === false
$isNull = MD2ArrayUtils::isNullRow($array, 1); // $isNull === false
$isNull = MD2ArrayUtils::isNullRow($array, 2); // $isNull === true
```
