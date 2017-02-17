<?php

spl_autoload_register(function ($class) {
    //namespace: move to namespaced folders vendor/sketchings/users
    //$file = 'vendor/' . strtolower(str_replace('\\','/',$class)) . '.php';

    $file = 'users/' . strtolower($class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});