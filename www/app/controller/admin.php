<?php

if(!route(1)){
    $route[1]='index';
}

if(!file_exists(admin_controller((route(1))))){
    $route[1]='index';
}

if (!session('user_rank') || session('user_rank') == 0){
    $route[1]='login';
}

$menus = [
    'index' => [
        'title'=>'Ana Sayfa',
    'icon' => 'tachometer'
],

    'posts' => [
        'title'=>'Makaleler',
        'icon' => 'folder'
    ],
    'users' => [
        'title'=>' Admin Kullanıcısı Ekle',
        'icon' => 'user'
    ],

    'settings' => [
        'title' => 'Ayarlar',
        'icon' =>'cog'
    ]


];
require  admin_controller(route(1));
