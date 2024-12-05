<?php
    class Time{
        public $nome;
        public $anoFundacao;
        public $jogadores;

        public function __construct(){
            $this->jogadores = Array();
        }

        public function setNome($nome){

        }

        public function setAnoFundacao($ano){

        }

        public function addJogador($jogador){
            array_push($this->jogadores, $jogador);
        }

        public function getJogadores(){
            return $this->jogadores;
        }
    }

?>