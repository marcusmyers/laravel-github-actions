# Laravel Github Actions

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marcusmyers/laravel-github-actions.svg?style=flat-square)](https://packagist.org/packages/marcusmyers/laravel-github-actions)
[![Total Downloads](https://img.shields.io/packagist/dt/marcusmyers/laravel-github-actions.svg?style=flat-square)](https://packagist.org/packages/marcusmyers/laravel-github-actions)

Up and running with [GitHub Actions](https://github.com/features/actions) for your [Laravel](https://www.laravel.com) project. Currently, all actions are for testing your application. This will require you to signup for [GitHub Actions](https://github.com/features/actions), once available to your GitHub account this package can be installed in your project.

## Installation

This is just a small set of files that sets up [GitHub Actions](https://github.com/features/actions) per project. There is nothing to install globally!

```bash
composer require marcusmyers/laravel-github-actions
```

If all you want is just the simple phpunit test suite run this after install.
``` php
php artisan vendor:publish --provider="Marcusmyers\LaravelGithubActions\LaravelGithubActionsServiceProvider" --tag="app-actions"
```

If you are writing a package run this after install
``` php
php artisan vendor:publish --provider="Marcusmyers\LaravelGithubActions\LaravelGithubActionsServiceProvider" --tag="package-actions"
```

For dusk browser testing run the following:
``` php
php artisan vendor:publish --provider="Marcusmyers\LaravelGithubActions\LaravelGithubActionsServiceProvider" --tag="dusk-actions"
```

For all app testing run the following:
``` php
php artisan vendor:publish --provider="Marcusmyers\LaravelGithubActions\LaravelGithubActionsServiceProvider" --tag="all-app-actions"
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email marcusmyers@gmail.com instead of using the issue tracker.

## Credits

- [Mark Myers](https://github.com/marcusmyers)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
