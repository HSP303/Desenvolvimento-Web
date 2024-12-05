<?php

    require_once 'conexaobd.php';
    require_once 'query.php';

    $connbd = new conexaobd();
    $connbd->setIp('localhost');
    $connbd->setPorta(5432);
    $connbd->setUser('postgres');
    $connbd->setPassword('123456');
    $connbd->setDatabase('local');

    if($connbd->conecta()) {
        echo $connbd->getStatus() . "<br>";
        
        $query = new query($connbd);
        $query->setSql("select * from tbpessoa");
        $query->open();
        while($row = $query->getNextRow()) {
            echo print_r($row) . "<br>";
        }

        //Fazer um update no registro código 2, trocando o nome de João para Maria.
        $query->update("tbpessoa", "pesnome, pesemail", array("maria", "maria@gmail.com"), "pescodigo = 2");
    }

    $connbd->desconecta();
    echo $connbd->getStatus();
?>