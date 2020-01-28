<?php

$page = 'Admin';

$views = array("admin", "login", "register", "logout");
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
    
    if(isset($_SESSION['email'])) {
    
        $email = $_SESSION['email'];
        $user = users::details($email);
        $user_id = $user['id'];
        
        // $image = $user['photo'];
        
        require 'views/admin/partials/header.php';
        require 'views/admin/'.$view.'.php';
        require 'views/admin/partials/footer.php';
        
    }else{
        
        $view = "login";
        
        require 'views/'.$view.'/partials/header.php';
        require 'views/'.$view.'/'.$view.'.php';
        require 'views/'.$view.'/partials/footer.php';
        
    }

    