<?php

spl_autoload_register(function ($classname) {
    $arrayPaths = array(
        '/models/',
        '/components/',
        '/controllers/',
    );
    foreach($arrayPaths as $path){
        $path = ROOT . $path . $classname . '.php';
        if(is_file($path)){
            include_once $path;
        }
    }
    //include 'classes/' . $class . '.class.php';
});
