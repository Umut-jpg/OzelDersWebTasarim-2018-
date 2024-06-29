<?php

require  __DIR__ . '/app/init.php';

$routeExplode = explode('?', $_SERVER['REQUEST_URI']);

$routeArrayMerge = array_filter(explode('/', $routeExplode[0]));

$route =array_merge($routeArrayMerge);

if(!route( 0)){
    $route[0] ='index';
}

if(!file_exists(controller($route[0]))){
    $route[0]='404';
}
if(setting('maintenance_mode')== 1 && route(0) != 'admin'){
    $route[0] = 'maintenance-mode';
}

require  controller(route(0));
