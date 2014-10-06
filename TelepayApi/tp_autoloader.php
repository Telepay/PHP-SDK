<?php

function tp_autoloader($className){
    $fileName = str_replace("\\", "/", $className).".php";
    if(file_exists($fileName)){
        require_once($fileName);
    }
}

spl_autoload_register("tp_autoloader");