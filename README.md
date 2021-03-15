<h1 align="center">
    Base components for Symfony project
</h1>

<p align="center">
    This is a Flex pack designed to easily create new projects without compromising extensibility and flexibility.
</p>

<div align="center">

[![Latest Stable Version](https://poser.pugx.org/ihor-drevetskyi/component/v)](//packagist.org/packages/ihor-drevetskyi/component)
[![Latest Unstable Version](https://poser.pugx.org/ihor-drevetskyi/component/v/unstable)](//packagist.org/packages/ihor-drevetskyi/component)
[![License](https://poser.pugx.org/ihor-drevetskyi/component/license)](//packagist.org/packages/ihor-drevetskyi/component)

[![Total Downloads](https://poser.pugx.org/ihor-drevetskyi/component/downloads)](//packagist.org/packages/ihor-drevetskyi/component)
[![Monthly Downloads](https://poser.pugx.org/ihor-drevetskyi/component/d/monthly)](//packagist.org/packages/ihor-drevetskyi/component)
[![Daily Downloads](https://poser.pugx.org/ihor-drevetskyi/component/d/daily)](//packagist.org/packages/ihor-drevetskyi/component)

</div>

<p>
This package contains basic settings for <a href="https://symfony.com/">Symfony</a> project. <br>
It can be integrated with the <a href="https://symfony.com">Symfony framework</a> using the bundle distributed with the library.

Leverage the awesome features of the tool to develop complex and high performance projects. Extend or override
everything you want.
</p>

Documentation
-------------

## Installation instructions and configuration:

### The easiest way to install is by using [Composer](https://getcomposer.org), run

```sh
composer require ihor-drevetskyi/component
```

### Add ComponentBundle to your application kernel

If you don't use flex (you should), you need to manually enable bundle:
#### PHP:
```php
// config/bundles.php
return [
    // ...
    ComponentBundle\ComponentBundle::class => ['all' => true],
    // ...
];
```

### Configuration example

You can configure default query parameter names and base config of vendors by copying the files from folders:
- [packages (src/Resources/config/default/config/packages)](src/Resources/config/default/config/packages) into the "config/packages" folder of your project:
  * [cache.yaml](src/Resources/config/default/config/packages/cache.yaml)
  * [doctrine.yaml](src/Resources/config/default/config/packages/doctrine.yaml)
  * [doctrine_migrations.yaml](src/Resources/config/default/config/packages/doctrine_migrations.yaml)
  * [framework.yaml](src/Resources/config/default/config/packages/framework.yaml)
  * [routing.yaml](src/Resources/config/default/config/packages/routing.yaml)
  * [sensio_framework_extra.yaml](src/Resources/config/default/config/packages/sensio_framework_extra.yaml)
  * [stof_doctrine_extensions.yaml](src/Resources/config/default/config/packages/stof_doctrine_extensions.yaml)
  * [translation.yaml](src/Resources/config/default/config/packages/translation.yaml)
  * [twig.yaml](src/Resources/config/default/config/packages/twig.yaml)
  * [validator.yaml](src/Resources/config/default/config/packages/validator.yaml)
  
- [routes (src/Resources/config/default/routes)](src/Resources/config/default/routes) into the "config/routes" folder of your project:
  * [annotations.yaml](src/Resources/config/default/routes/annotations.yaml)

- add lines into the top of "services.yaml" file in the "config" folder of your project:
#### YAML:
```yaml
imports:
  - { resource: '@ComponentBundle/Resources/config/default/parameters.yaml' }
```

## Basic description
<p>
  This package contains useful Traits for <a href="http://www.doctrine-project.org">Doctrine ORM</a> and Dto objects. 
</p>

<p>
  Your attention is also presented some abstract entity classes, which will be useful when designing new entities.
</p>

### Translatable entity: 
* [AbstractEntityElement](src/Entity/Translatable/AbstractEntityElement.php)
* [AbstractEntityElementInterface](src/Entity/Translatable/AbstractEntityElementInterface.php)

* [AbstractEntityTranslatable](src/Entity/Translatable/AbstractEntityTranslatable.php)
* [AbstractEntityTranslatableInterface](src/Entity/Translatable/AbstractEntityTranslatableInterface.php)

* [AbstractBaseEntityTranslatable](src/Entity/Translatable/AbstractBaseEntityTranslatable.php)
* [AbstractBaseEntityTranslatableInterface](src/Entity/Translatable/AbstractBaseEntityTranslatableInterface.php)

### Translation entity
* [AbstractEntityTranslation](src/Entity/Translation/AbstractEntityTranslation.php)
* [AbstractEntityTranslationInterface](src/Entity/Translation/AbstractEntityTranslationInterface.php)

* [AbstractEntityElementTranslation](src/Entity/Translation/AbstractEntityElementTranslation.php)
* [AbstractEntityElementTranslationInterface](src/Entity/Translation/AbstractEntityElementTranslationInterface.php)

<p>
  When forming a URL, a situation is possible when specific logic is needed.
  In order not to duplicate logic every time you need to display a particular route, a class was implemented in which all routes are formed.
</p>

* [AbstractLinksService](src/Service/AbstractLinksService.php)
* [AbstractListAndElementLinksService](src/Service/AbstractListAndElementLinksService.php)
* [AbstractElementLinksServiceInterface](src/Service/AbstractElementLinksServiceInterface.php)

<p>
  Look at useful classes for <a href="http://www.doctrine-project.org">Doctrine ORM</a> repository.
</p>

* [AbstractRepository](src/Repository/AbstractRepository.php)
* [AbstractRepositoryInterface](src/Repository/AbstractRepositoryInterface.php)
* [AbstractElementRepository](src/Repository/AbstractElementRepository.php)
* [AbstractElementRepositoryInterface](src/Repository/AbstractElementRepositoryInterface.php)

<p>
  Two main directories of Traits:
</p>

* [Dto/Traits](src/Dto/Traits) - use for Dto objects
* [Model/Traits](src/Model/Traits) - use for Entity

## Examples of using

* [Traits for objects](src/Resources/doc/Traits.md)
* [Repository](src/Resources/doc/Repository.md)

## Latest updates

For notes about latest changes please
read [`CHANGELOG`](https://github.com/ihor-drevetskyi/component/blob/main/CHANGELOG.md), for required changes in your
code please read [`UPGRADE`](https://github.com/ihor-drevetskyi/component/blob/main/UPGRADE.md)
chapter of documentation.

## Requirements:

- Compatible with PHP `>=7.4` versions.
- Compatible with Symfony `>=5.2` versions.

## License

This package is available under the [MIT License (MIT)](LICENSE). Please see [License File](LICENSE) for more
information.

## Authors

The component was originally created by [Ihor Drevetskyi](https://www.facebook.com/ihor.drevetskyi).
<p>I am engaged in the development of packages in my free time.
I would be grateful for a little financial assistance (sponsorship) to my bank account:
</p>

<p>
<b>UAH: 4441114452235219</b> |
<b><a href="https://send.monobank.ua/EipFYXFSC">https://send.monobank.ua/EipFYXFSC</a></b>
</p>

<p>
<b>USD:</b> <br>
Beneficiary
<br>
IBAN <b>UA933220010000026205312221935</b><br>
Account No <b> 5375418805868072</b><br>
Receiver <b>DREVETSKYI IHOR</b><br>
Account with Institution<br>
Bank: <b>JSC UNIVERSAL BANK</b><br>
City: <b>KYIV, UKRAINE</b><br>
Swift code: <b>UNJSUAUKXXX</b><br>
Intermediary<br>
Bank: <b>DEUTSCHE BANK TRUST CO. AMERICAS</b><br>
City: <b>NEW YORK, USA</b><br>
Account number: <b>4452477</b><br>
Swift code: <b>BKTRUS33XXX</b><br>
Details of payment: <b>
- private transfer |
- transfer to own account |
- help to relative |
- honorarium |
- compensation for … 
</b><br>
</p>

## Contact information
[LinkedIn](https://www.linkedin.com/in/ihor-drevetskyi/) | [Telegram](https://t.me/IhorDrevetskyi) | [Facebook](https://www.facebook.com/ihor.drevetskyi) | <a href="mailto:ihor.drevetskyi@gmail.com">EMAIL</a>
