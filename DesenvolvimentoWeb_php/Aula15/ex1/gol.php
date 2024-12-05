<?php

    class Gol{
        private $tempo;
        private $jogador;
        private $time;

        /**
         * Get the value of tempo
         */ 
        public function getTempo()
        {
                return $this->tempo;
        }

        /**
         * Set the value of tempo
         *
         * @return  self
         */ 
        public function setTempo($tempo)
        {
                $this->tempo = $tempo;

                return $this;
        }

        /**
         * Get the value of jogador
         */ 
        public function getJogador()
        {
                return $this->jogador;
        }

        /**
         * Set the value of jogador
         *
         * @return  self
         */ 
        public function setJogador($jogador)
        {
                $this->jogador = $jogador;

                return $this;
        }

        /**
         * Get the value of time
         */ 
        public function getTime()
        {
                return $this->time;
        }

        /**
         * Set the value of time
         *
         * @return  self
         */ 
        public function setTime($time)
        {
                $this->time = $time;

                return $this;
        }
    }

?>