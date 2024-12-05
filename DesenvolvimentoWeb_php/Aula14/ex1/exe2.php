<?php
    require_once("computador.php");

    $computador = new Computador();

    $computador->ligar();
    $computador->desligar();
    echo $computador->getStatus();

?>