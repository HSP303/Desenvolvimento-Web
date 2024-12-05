<?php

    $admin = 'admin';
    $senha = '123';

    $user = $_POST['user'];
    $psword = $_POST['psword'];

    session_start();

    if(!isset($_SESSION['usuario'])){

        if($user == $admin && $psword == $senha){
            $_SESSION['usuario'] = $user;

            header("location: index.php"); 
        } else{
            header("location: login.php"); 
        }


    } else {
        header("location: index.php"); 
    }


?>