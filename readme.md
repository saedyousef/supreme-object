<p align="center" style="font-size: 2em;font-weight: bold">Supreme Object</p>

<p align="center">
<a href="https://packagist.org/packages/saedyousef/supreme-object"><img src="https://img.shields.io/packagist/dt/saedyousef/supreme-object" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/saedyousef/supreme-object"><img src="https://img.shields.io/packagist/v/saedyousef/supreme-object" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/saedyousef/supreme-object"><img src="https://img.shields.io/packagist/l/saedyousef/supreme-object" alt="License"></a>
</p>  
<br>

Supreme Object is to create Data Object or Data Transfer Objects for you, instead of dealing with arrays or class properties.

## Installation

From the command line run:

```
composer require saedyousef/supreme-object
```

## Usage

With the package now installed, you can implement the main Interface `DataObject` and by using the trait `DataObjectTrait` that have all the methods implemented for you.
Here is an example of a class `PostDataObject` that implements the `DataObject` interface :
```php

use Saedyousef\SupremeObject\Contracts\DataObject;
use Saedyousef\SupremeObject\Support\DataObjectTrait;

/**
 * @property int|null id
 * @property string title
 * @property string body 
 */
class PostDataObject implements DataObject
{
    use DataObjectTrait;
    
    public function __construct(array $properties = [])
    {
        $this->_properties = [
            'id'    => null,
            'title' => '',
            'body'  => ''
        ];

        $this->hydrate($properties);
    }
    
    /** 
    * @return int|null
    */
    public function getId()
    {
        return $this->id;
    }
}
```

And that's it! Now you have your data object set.

<br>

A Star on this repo would be appreciated ;)