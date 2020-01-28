<?php
$page = "Blog";
$views = array("blog", "blog-details");

    if($routes[1] != ''){
        if(in_array($routes[1], $views)){

            $view = $routes[1];

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
        
        require 'views/partials/header.php';
        require 'views/'.$view.'/'.$view.'.php';
        require 'views/partials/footer.php';
        
    } else {
        
        require 'views/partials/header.php';
        require 'views/'.$view.'/'.$view.'.php';
        require 'views/partials/footer.php';
        
    }
     


    