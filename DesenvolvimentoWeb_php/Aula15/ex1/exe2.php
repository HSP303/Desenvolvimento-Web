<?php
    require_once("time.php");
    require_once("jogador.php");
    require_once("jogo.php");
    require_once("gol.php");
    
    $time = new Time();

    $time->setNome("Unidavi FC");
    $time->setAnoFundacao(2000);

    $jogador = new Jogador();

    $jogador->setNome("Pedro");
    $jogador->setPosicao($i);
    $jogador->setDataNascimento(new DateTime("2000-01-01"));

    $time->addJogador($jogador);
    
    //print_r($time->getJogadores());

    $jogo = new Jogo();
    $jogo->setTimeA("Robolotam");
    $jogo->setTimeB("Cimegripe");

    //$gol = new Gol();
    //$gol->setTempo(10);
    //$gol->setJogador($jogador);
    //$gol->setTime($time);

    //$jogo->addGols($gol);

    //echo $jogo->getTimeA();

?>
