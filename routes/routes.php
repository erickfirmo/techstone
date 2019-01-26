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

    '/produtos/' => [
        'action' => 'Site\SiteController@produtos',
        'method' => 'GET'
    ],

    '/portfolio/' => [
        'action' => 'Site\SiteController@portfolio',
        'method' => 'GET'
    ],

    '/adwords/' => [
        'action' => 'Site\SiteController@adwords',
        'method' => 'GET'
    ],

    '/criacao_de_sites/' => [
        'action' => 'Site\SiteController@criacao_de_sites',
        'method' => 'GET'
    ],

    '/lojas_virtuais/' => [
        'action' => 'Site\SiteController@lojas_virtuais',
        'method' => 'GET'
    ],

    '/contato/' => [
        'action' => 'Site\SiteController@contato',
        'method' => 'GET'
    ],

    '/enviar_mensagem/' => [
        'action' => 'Site\SiteController@enviar_mensagem',
        'method' => 'POST'
    ],

    /* rotas admin */

    '/admin/home/' => [
        'action' => 'Admin\HomeController@index',
        'method' => 'GET'
    ],

    /* rotas das mensagens */

    '/admin/mensagens/' => [
        'action' => 'Admin\MensagemController@all',
        'method' => 'GET'
    ],

    '/admin/mensagens/$id/' => [
        'action' => 'Admin\MensagemController@single',
        'method' => 'GET'
    ],

    '/admin/mensagens/favoritas/' => [
        'action' => 'Admin\MensagemController@favoritas',
        'method' => 'GET'
    ],

    '/admin/mensagens/lixeira/' => [
        'action' => 'Admin\MensagemController@lixeira',
        'method' => 'GET'
    ],

    '/admin/mensagens/add-lixeira-single/$id/' => [
        'action' => 'Admin\MensagemController@add_lixeira_single',
        'method' => 'POST'
    ],

    '/admin/mensagens/destroy-single/$id/' => [
        'action' => 'Admin\MensagemController@destroy_single',
        'method' => 'POST'
    ],

    '/admin/mensagens/add-lixeira-multi/' => [
        'action' => 'Admin\MensagemController@add_lixeira_multi',
        'method' => 'POST'
    ],

    '/admin/mensagens/add-favorita/' => [
        'action' => 'Admin\MensagemController@toggle_favorita',
        'method' => 'POST'
    ],

    '/admin/mensagens/destroy_multi/' => [
        'action' => 'Admin\MensagemController@destroy_multi',
        'method' => 'POST'
    ],

    '/admin/mensagens/restaurar/' => [
        'action' => 'Admin\MensagemController@restaurar',
        'method' => 'POST'
    ],

    '/admin/mensagens/destroy-multi/' => [
        'action' => 'Admin\MensagemController@destroy_multi',
        'method' => 'POST'
    ],

    '/admin/mensagens/destroy/' => [
        'action' => 'Admin\MensagemController@destroy',
        'method' => 'POST'
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

