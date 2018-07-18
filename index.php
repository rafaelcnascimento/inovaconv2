<?php 

$uri = substr($_SERVER['REQUEST_URI'], 1);

require 'vendor/autoload.php';

if ($uri == '') {
    include 'src/home.php';
}

if (file_exists('src/'.$uri.'.php')) 
{
   include 'src/'.$uri.'.php';
} 

else 
{
   http_response_code(404);
   die();
}

