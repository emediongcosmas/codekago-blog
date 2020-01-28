<?php
$page = "Login";

$views = array("login", "register", "home");
    if($routes[2] != ''){
        if(in_array($routes[2], $views)){

            $view = $routes[2];

        }else{
            
            $view = '404';
            
            header('Location:'.$view.'.php');

            }

    }else{
        $view = "home";
    }

    require 'views/'.$view.'/partials/header.php';
    require 'views/'.$view.'/'.$view.'.php';
    require 'views/'.$view.'/partials/footer.php';