<?php
    class Calculadora{
        private $operador1;
        private $operador2;

        public function setOperador1($operador){
            $this->operador1= $operador;
        }

        public function setOperador2($operador){
            $this->operador2= $operador;
        }

        public function somar(){
            return $this->operador1 + $this->operador2;
        }

        public function subtrair(){
            return $this->operador1 - $this->operador2;
        }

        public function multiplicar(){
            return $this->operador1 * $this->operador2;
        }

        public function dividir(){
            return $this->operador1 / $this->operador2;
        }

    }
?>