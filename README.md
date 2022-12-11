## blade-components

![alt text](https://github.com/sudippalash/blade-components/blob/master/img.jpg?raw=true)


[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]


This package provides a set of blade components


## Install

Via Composer

```bash
composer require sudippalash/blade-components
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Sudip\BladeComponents\Providers\AppServiceProvider" --tag=config
```

You can publish the lang file with:

```bash
php artisan vendor:publish --provider="Sudip\BladeComponents\Providers\AppServiceProvider" --tag=lang
```

You can publish blade files with:

```bash
php artisan vendor:publish --provider="Sudip\BladeComponents\Providers\AppServiceProvider" --tag=views
```

In `config/blade-components.php` config file you should set your data.

```php
    return [
        /*
        |--------------------------------------------------------------------------
        | Platform
        |--------------------------------------------------------------------------
        |
        | Which platform you use in your application. Example: bootstrap3 or bootstrap4 or bootstrap5
        | Note: you should add platform CSS and JS library
        | 
        */

        'platform' => 'bootstrap4',

        /*
        |--------------------------------------------------------------------------
        | Paginations
        |--------------------------------------------------------------------------
        |
        | Paginations dropdown use in your application. Example: ['15', '25', '50', '100']
        | 
        */

        'paginations' => ['15', '25', '50', '100'],

        /*
        |--------------------------------------------------------------------------
        | Paginate Default Limit
        |--------------------------------------------------------------------------
        |
        | Per page pagination limit default selected item dropdown use in your application. Example: 15 / 25 / 50 / 100
        | 
        */

        'paginate_default_limit' => 25,
    ];
```

## Usage

#### 1 .Pagination row:
```php
<x-sp-components::pagination-row :records="$users" />
```

#### 2. Action group:
```php
<x-sp-components::action-group>
    <li><a class="dropdown-item" href="#">Dropdown list here</a></li>
</x-sp-components::action-group>
```

#### 3. Seo Input Fields:
```php
<x-sp-components::seo-meta-input title_field="meta_title" keywords_field="meta_keywords" description_field="meta_description" :data="$data" />
```

#### 4. File Input Field:
```php
<x-sp-components::file-input id="uniqueId" name="field_name" required="required" multiple="multiple" path="https://exapmle.com/image.png" />
```

#### 5. Image Input Field:
```php
<x-sp-components::image-input id="uniqueId" name="field_name" required="required" multiple="multiple" path="https://exapmle.com/image.png" />
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sudippalash/blade-components?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sudippalash/blade-components?style=flat-square
[ico-license]: https://img.shields.io/github/license/sudippalash/blade-components?style=flat-square
[link-packagist]: https://packagist.org/packages/sudippalash/blade-components
[link-downloads]: https://packagist.org/packages/sudippalash/blade-components
[link-author]: https://github.com/sudippalash
