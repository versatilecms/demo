<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Page layouts
    |--------------------------------------------------------------------------
    |
    | This is an array with a listing of all layouts for pages and posts 
    | available in the template.
    |
    */
    'page_layouts' => [
        'default' => 'Default',
        'sidebar-right' => 'Sidebar Right'
    ],

    /*
    |--------------------------------------------------------------------------
    | Page Blocks
    |--------------------------------------------------------------------------
    |
    | Listing all the page blocks that will be available for pages and posts
    | in this template.
    |
    */
    'page_blocks' => [
    	'Themes\\ThemeDefault\\Blocks\\TestimonialHandler'
    ],

    /*
    |--------------------------------------------------------------------------
    | Form Fields
    |--------------------------------------------------------------------------
    |
    | Registration of form fields for global use.
    |
    */
    'form_fields' => [
        'Themes\\ThemeDefault\\FormFields\\CpfHandler'
    ]
];
