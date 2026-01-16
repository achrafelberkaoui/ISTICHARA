<?php
spl_autoload_register(function(string $class){
    $fille = __DIR__ . "\\..\\" . '/app/' . $class . ".php";
    $path = str_replace('\\','/',$fille);
    if(file_exists($path)){
        require $path;
    }
});