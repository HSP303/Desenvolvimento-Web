<?php

    require_once "model/pessoa.php";

    $pedro = new Pessoa ();

    $pedro->setNome('Pedro');
    $pedro->setSobrenome('Scheidt');

    echo $pedro->getNomeCompleto();
?>