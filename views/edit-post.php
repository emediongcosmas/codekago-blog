<?php

$page = 'Edit';

if(isset($_SESSION['email'])) {

    $email = $_SESSION['email'];
    $user = users::details($email);
    
    $id = $user['id'];
    
    $user_id = $user['id'];
   
    
    require 'views/admin/partials/header.php';
    require 'views/'.$view.'/'.$view.'.php';
    require 'views/admin/partials/footer.php';
    
}else{
    require 'views/admin/partials/header.php';
    require 'views/login/login.php';
    require 'views/admin/partials/footer.php';
}