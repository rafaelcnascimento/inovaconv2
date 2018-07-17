<?php 

function getCurrentUri()
    {
        $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
        $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
        if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
        $uri = '/' . trim($uri, '/');
        return $uri;
    }

    $base_url = getCurrentUri();
    $routes = array();
    $routes = explode('/', $base_url);
    foreach($routes as $route)
    {
        if(trim($route) != '')
            array_push($routes, $route);
    }

    require 'vendor/autoload.php';

    if ($routes[1] == '') {
        include 'src/home.php';
    }

    try {
        if(!@include'src/'.$routes[1].'.php') throw new Exception;
    } catch (Exception $e) {
       http_response_code(404);
       die();
    }

