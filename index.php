<?php 

//URI é o o que vem depois do / 
$uri = substr($_SERVER['REQUEST_URI'], 1);

require 'vendor/autoload.php';

if ($uri == '' || $uri == 'home')
{
    include 'src/home.php';
}

//Se a URL contem parametos GET deve ser tratada de uma maneira diferente
if (strpos($uri, '?') !== false)
{
    $vetor = explode("?", $uri, 2);
    $uri_base = $vetor[0];

    include 'src/'.$uri_base.'.php';
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

