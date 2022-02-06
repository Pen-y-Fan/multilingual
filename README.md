# Multilingual

Based on the tutorial [How to Create Multilingual Website in Laravel?](https://www.itsolutionstuff.com/post/how-to-create-multilingual-website-in-laravelexample.html)

## Requirements

This is a Laravel 8 project. The installation is similar to a new Laravel 8 project.

- [PHP 7.3 or 8.0+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org)

Recommended:

- [Git](https://git-scm.com/downloads)

## Clone

See [Cloning a repository](https://help.github.com/en/articles/cloning-a-repository) for details on how to create a
local copy of this project on your computer.

e.g.

```sh
git clone git@github.com:Pen-y-Fan/multilingual.git
```

## Install

Install all the dependencies using composer

```sh
cd multilingual
composer install
```

## Create .env

Create an `.env` file from `.env.example`

```shell script
composer post-root-package-install
```

## Generate APP_KEY

Generate an APP_KEY using the artisan command

```shell script
php artisan key:generate
```

## run tests

```shell
composer test
```

All being well you should see the tests run successfully: 

```text
 PHPUnit 9.5.13 by Sebastian Bergmann and contributors.

Example (Tests\Unit\Example)
 ✔ Example

Example (Tests\Feature\Example)
 ✔ Example

Language (Tests\Feature\Language)
 ✔ The default language is english
 ✔ The language can be set to spanish
 ✔ The language can be set to french

Time: 00:00.139, Memory: 22.00 MB

OK (5 tests, 13 assertions)
```

## Start the app

```shell
php artisan serve
```

## Access the route

Open your browser to: <https://localhost:8000/lang/home>

## Contributing

This is a **personal project**. Contributions are **not** required. Anyone interested in developing this project are
welcome to fork or clone for your own use.

## Credits

- [Michael Pritchard \(AKA Pen-y-Fan\)](https://github.com/pen-y-fan), based on the tutorial [How to Create Multilingual Website in Laravel?](https://www.itsolutionstuff.com/post/how-to-create-multilingual-website-in-laravelexample.html)

## License

MIT License (MIT). Please see [License File](LICENSE.md) for more information.
