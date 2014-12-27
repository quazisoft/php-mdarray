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
$array = array(array(1.1,1.2,null), array(2.1,2.2,null));
MD2ArrayUtils::isNullRow($array, 1) => false
MD2ArrayUtils::isNullRow($array, 2) => false
MD2ArrayUtils::isNullRow($array, 2) => true
