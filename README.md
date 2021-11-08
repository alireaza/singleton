# Singleton


## Install

Via Composer
```bash
$ composer require alireaza/singleton
```


## Usage

```php
use AliReaza\Singleton\Singleton;

class WhoAmI extends Singleton
{
    public string $name = 'What\'s my name?';
}

$who = WhoAmI::getInstance();
$who->name = 'AliReaza';

$alireaza = WhoAmI::getInstance();
echo $alireaza->name; // AliReaza
```


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.