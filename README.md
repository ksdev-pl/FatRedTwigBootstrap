FatRedTwigBootstrap
===================
Requires PHP 5.4 (short array syntax)

* [__Fat-Free Framework:__](https://github.com/bcosca/fatfree) 3.2.*
* [__RedBean ORM:__](https://github.com/gabordemooij/redbean) 3.*
* [__Twig templates:__](https://github.com/fabpot/Twig) 1.*
* [__Twitter Bootstrap:__](https://github.com/twbs/bootstrap) 3.1.1

##### Installation:
* `git clone https://github.com/ks-git/FatRedTwigBootstrap.git`
* `composer install`

##### Remember to:
* Use `{{ 'var'|f3 }}` instead of `{{ @var }}` in templates.
* Place `favicon.ico` and `apple-touch-icon.png` in the root directory.
* Change links in `base.html.twig` to use cdnjs.