<?php
spl_autoload_register(function ($name){
    $file = "Classes" . DIRECTORY_SEPARATOR . "{$name}.php";
    if(!file_exists($file))
        die ("{$file} doesnt't exist");
    include_once $file;

    if(!class_exists($name)){
        die("Class <b>{$name}</b>  doesnt't exist");
    }
});
