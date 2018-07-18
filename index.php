<?php 

$uri = substr($_SERVER['REQUEST_URI'], 1);

require 'vendor/autoload.php';

if ($uri == '') {
    include 'src/home.php';
}

try {
    if(!@include'src/'.$uri.'.php') throw new Exception;
} catch (Exception $e) {
   http_response_code(404);
   die();
}

