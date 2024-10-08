<?php
    //Index.php é o entry point da aplicação, então aqui deve ser feito o require do autoload.
    require_once "../vendor/autoload.php";
    
    $route = new \App\Route;
    echo 'Isso ta funcionando <br>';
    echo '<hr>';
    echo '<pre>';
    print_r($route->getUrl()); 
    echo '</pre>';

?>