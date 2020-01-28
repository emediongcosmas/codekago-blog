<?php
session_start();
ob_start();
error_reporting(E_ALL);

require("config/Db.class.php");

// Creates the instance
$db = new Db();



 spl_autoload_register( function($class) {

     if (file_exists("controllers/{$class}.php")) {
         require_once "controllers/{$class}.php";
     }else if (file_exists("classes/{$class}.php")) {
         require_once "classes/{$class}.php";
     }

 });

    /*
    The following function will strip the script name from URL i.e.  http://www.something.com/search/book/fitzgerald will become /search/book/fitzgerald
    */
    function getCurrentUri()
    {
        $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
        $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
        if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
        $uri = '/' . trim($uri, '/');
        return $uri;
    }

    $base_url = getCurrentUri();
    $routes = array();
    $routes = explode('/', $base_url);
    foreach($routes as $route)
    {
        if(trim($route) != '')
            array_push($routes, $route);
    }

    /*
    Now, $routes will contain all the routes. $routes[0] will correspond to first route. For e.g. in above example $routes[0] is search, $routes[1] is book and $routes[2] is fitzgerald
    */

        if($routes[1] != ''){
            $views = array(
                "home", 
                "about",
                "admin",
                "login",
                "logout",
                "register",
                "edit-post",
                "blog-details",
                "blog",
                "about",
                "contact"
                );

            if(in_array($routes[1], $views)){

                $view = $routes[1];

            }else {

            	$view = '404';

            }

        }else{
            $view = "home";
        }
        
        require 'views/'.$view.'.php';