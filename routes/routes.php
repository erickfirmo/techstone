<?php

/* configurações de rotas */

return [

    '/' => [
        'action' => 'Site\SiteController@index',
        'method' => 'GET'
    ],

    '/sobre/' => [
        'action' => 'Site\SiteController@sobre',
        'method' => 'GET'
    ],

    '/servicos/' => [
        'action' => 'Site\SiteController@servicos',
        'method' => 'GET'
    ],

    '/portfolio/' => [
        'action' => 'Site\SiteController@portfolio',
        'method' => 'GET'
    ],

    '/contato/' => [
        'action' => 'Site\SiteController@contato',
        'method' => 'GET'
    ],

    /* rotas admin */

    '/admin/home/' => [
        'action' => 'Admin\HomeController@index',
        'method' => 'GET'
    ],


    /* rotas dos posts */

    '/admin/posts/' => [
        'action' => 'PostController@index',
        'method' => 'GET'
    ],

    '/admin/posts/create/' => [
        'action' => 'PostController@create',
        'method' => 'GET'
    ],

    '/admin/posts/$id/edit/' => [
        'action' => 'PostController@edit',
        'method' => 'GET'
    ],

    '/admin/posts/$id/show/' => [
        'action' => 'PostController@show',
        'method' => 'GET'
    ],

    '/admin/posts/store/' => [
        'action' => 'PostController@store',
        'method' => 'POST'
    ],

    '/admin/posts/$id/update/' => [
        'action' => 'PostController@store',
        'method' => 'POST'
    ],

    '/admin/posts/$id/destroy/' => [
        'action' => 'PostController@store',
        'method' => 'POST'
    ],

    // authentication routes

    '/login/' => [
        'action' => 'Auth\UserController@showLoginForm',
        'method' => 'GET'
    ],

    '/admin/login/' => [
        'action' => 'Auth\AdminController@showLoginForm',
        'method' => 'GET'
    ],

    '/register/' => [
        'action' => 'Auth\UserController@showRegisterForm',
        'method' => 'GET'
    ],

    '/admin/register/' => [
        'action' => 'Auth\AdminController@showRegisterForm',
        'method' => 'GET'
    ],

    '/auth/register/' => [
        'action' => 'Auth\UserController@register',
        'method' => 'POST'
    ],

    '/auth/admin/register/' => [
        'action' => 'Auth\AdminController@register',
        'method' => 'POST'
    ],

    '/auth/login/' => [
        'action' => 'Auth\UserController@login',
        'method' => 'POST'
    ],
    
    '/auth/admin/login/' => [
        'action' => 'Auth\AdminController@login',
        'method' => 'POST'
    ],

    '/auth/logout/' => [
        'action' => 'Auth\UserController@logout',
        'method' => 'POST'
    ],

    '/auth/admin/logout/' => [
        'action' => 'Auth\AdminController@logout',
        'method' => 'POST'
    ],
];

