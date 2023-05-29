<?php

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

    /*
    |--------------------------------------------------------------------------
    | Action Group button CSS class
    |--------------------------------------------------------------------------
    |
    | You can add additional class name as per your project requirment
    | 
    */

    'action_group_btn_class' => null,

    /*
    |--------------------------------------------------------------------------
    | Import modal button CSS class
    |--------------------------------------------------------------------------
    |
    | You can add additional class name as per your project requirment
    | 
    */

    'import_modal_btn_class' => null,

    /*
    |--------------------------------------------------------------------------
    | Styles Default Stack
    |--------------------------------------------------------------------------
    |
    | Styles to push in appropriate stack
    | 
    */

    'styles_stack' => 'styles',

    /*
    |--------------------------------------------------------------------------
    | Scripts Default Stack
    |--------------------------------------------------------------------------
    |
    | Scripts to push in appropriate stack
    | 
    */

    'scripts_stack' => 'scripts',

    /*
    |--------------------------------------------------------------------------
    | Seo Meta Default Section
    |--------------------------------------------------------------------------
    |
    | SEO Tag section push in appropriate yield. This is for <x-sp-components::seo-meta-push /> component.
    | If you leave it null then you should pass your own section name to sectionName parameter.
    | 
    */

    'seo_section' => 'seo',
];
