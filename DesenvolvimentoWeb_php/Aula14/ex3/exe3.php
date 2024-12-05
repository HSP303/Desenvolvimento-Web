<?php

    require_once("session.php");
    require_once("user.php");
    
    $user = new User();
    $sess = new Session();

    $sess->setStatus("Ativo");

    $user->setName("Bob");
    $user->setLogin("Admin");
    $user->setPass("123");

    $sess->setUser($user);

    $sess->sessionStart();
    $sess->setSessionId(session_id());
    $sess->sessionFinalize();

    var_dump($sess->getUserSess());
?>