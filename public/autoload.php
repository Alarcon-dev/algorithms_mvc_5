<?php


spl_autoload_register(function ($className) {

    $routes = ['controller', 'models'];
    foreach ($routes as $rout) {
        if (file_exists("../app/$rout/$className.php")) {
            require_once "../app/$rout/$className.php";
        }
    }
});
