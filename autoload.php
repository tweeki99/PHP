<?php
spl_autoload_register(function($name){
    $file = "newClasses" . DIRECTORY_SEPARATOR . "{$name}.php";
    if(!file_exists($file)) die("<b>{$file}</b> doesn't exists.");

    include_once $file;

    if(!class_exists($name) && !interface_exists($name) && !trait_exists($name)) die("Class or Interface <b>'{$name}'</b> doesn't exists.");
});