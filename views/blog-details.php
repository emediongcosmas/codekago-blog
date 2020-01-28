<?php
$page = "Blog";
$views = array("blog-details");
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
        
        $slug = $_REQUEST['article'];
        
        require 'views/partials/header.php';
        require 'views/'.$view.'/'.$view.'.php';
        require 'views/partials/footer.php';
        
    }else{
        require 'views/partials/header.php';
        require 'views/'.$view.'/'.$view.'.php';
        require 'views/partials/footer.php';
    }

    