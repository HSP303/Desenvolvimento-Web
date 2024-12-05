<?php
    class Endereco{
        private $logradouro;
        private $bairro;
        private $cidade;
        private $estado;
        private $cep;

        public function getLogradouro(){
            return $this->logradouro;
        }

        public function setLogradouro($logradouro){
            $this->logradouro = $logradouro;
        }

        public function getbairro(){
            return $this->bairro;
        }

        public function setBairro($bairro){
            $this->bairro = $bairro;
        }

        public function getCidade(){
            return $this->cidade;
        }

        public function setCidade($cidade){
            $this->cidade = $cidade;
        }

        public function getEstado(){
            return $this->estado;
        }

        public function setEstado($estado){
            $this->estado = $estado;
        }

        public function getCep(){
            return $this->cep;
        }

        public function setCep($cep){
            $this->cep = $cep;
        }
    }
?>