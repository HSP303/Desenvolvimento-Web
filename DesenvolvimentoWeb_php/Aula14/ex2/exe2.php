<?php
    require_once("time.php");
    require_once("jogador.php");
    
    $time = new Time();

    $time->setNome("Unidavi FC");
    $time->setAnoFundacao(2000);

    $jogador = new Jogador();

    $jogador->setNome("Pedro");
    $jogador->setPosicao($i);
    $jogador->setDataNascimento(new DateTime("2000-01-01"));

    $time->addJogador($jogador);
    
    print_r($time->getJogadores())
?>
