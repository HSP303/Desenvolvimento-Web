<?php
    class Computador{
        public $estado;

        public function Ligar(){
            $this->estado = "Ligado";
            $this->escreveEstado();
        }

        public function Desligar(){
            $this->estado = "Desligado";
            $this->escreveEstado();
        }

        public function getStatus(){
            return $this->estado;
        }

        private function escreveEstado (){
            echo $this->getStatus();
        }
    }
?>