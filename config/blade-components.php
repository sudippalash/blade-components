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
    | Seo Meta Form
    |--------------------------------------------------------------------------
    |
    | SEO Tag input append your form. This is for <x-sp-components::seo-meta-input /> component.
    | background_color : null or any css color. Example: null, rgba(0,0,0,.02), #fofofo
    | background_padding : null or any css support padding. Example: null, 15px, 1rem
    | title_show : true or false. If you want to hide or show title.
    | label_col : bootstrap col- class name. If you want to show horizontal label otherwise leave it to null. Example: null, col-md-*
    | input_col : bootstrap col- class name. If you want to show horizontal input otherwise leave it to null. Example: null, col-md-*
    | 
    */

    'seo_form' => [
        'background_color' => null,
        'background_padding' => null,
        'title_show' => true,
        'label_col' => null,
        'input_col' => null,
    ],

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
