<?php

    class Jogo{
        public $timeA;
        public $timeB;
        public $gols;

        private function __construct()
        {
            $this->gols = Array();
        }

        /**
         * Set the value of timeA
         *
         * 
         */ 
        public function setTimeA($timeA)
        {
                $this->timeA = $timeA;

                return $this;
        }

        /**
         * Set the value of timeB
         *
         * 
         */ 
        public function setTimeB($timeB)
        {
                $this->timeB = $timeB;

                return $this;
        }

        /**
         * Set the value of gols
         *
         *
         */ 
        public function addGols($gol)
        {
                array_push($this->gols, $gol);
                echo $gol;
                return $this;
        }

        /**
         * Get the value of gols
         */ 
        public function getGols()
        {
                return $this->gols;
        }

        /**
         * Get the value of timeA
         */ 
        public function getTimeA()
        {
                return $this->timeA;
        }
    }

?>