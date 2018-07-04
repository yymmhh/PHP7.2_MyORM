<?php

function classLoader($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . '/' . $path . '.php';

//    echo "<hr>"; var_dump("加载的类{$file}"); echo "<hr>";
//    echo "<br>";
    if (file_exists($file)) {
        require_once $file;
    }


}
spl_autoload_register('classLoader');

function dd($arr){
    echo "<pre>";

    var_dump($arr);

}