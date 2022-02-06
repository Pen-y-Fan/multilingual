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

## Install Database

This experiment uses models and seeders to generate the tables for the database.

## Configure Laravel

Once the multilingual database has been created on your MySQL server, configure the Laravel **.env** file with the database,
updating username and password as per you local setup.

```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=multilingual
DB_USERNAME=YourDatabaseUserName
DB_PASSWORD=YourDatabaseUserPassword
```

## Run tests

To make it easy to run all the PHPUnit tests a composer script has been created in composer.json. From the root of the
projects, run:

```shell script
composer tests
```

## Contributing

This is a **personal project**. Contributions are **not** required. Anyone interested in developing this project are
welcome to fork or clone for your own use.

## Credits

- [Michael Pritchard \(AKA Pen-y-Fan\)](https://github.com/pen-y-fan), based on the tutorial [How to Create Multilingual Website in Laravel?](https://www.itsolutionstuff.com/post/how-to-create-multilingual-website-in-laravelexample.html)

## License

MIT License (MIT). Please see [License File](LICENSE.md) for more information.
