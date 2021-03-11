<?php
    $uri = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
    $uri .= $_SERVER['SERVER_NAME'];
    //if ($_SERVER['SERVER_PORT'] != '80')
        $uri .= ':' . $_SERVER['SERVER_PORT'];
    // echo dirname($_SERVER['REQUEST_URI']);    
    $uri .= $_SERVER['REQUEST_URI'];    
    echo $uri . PHP_EOL;
    // print_r($_SERVER);
    
?>