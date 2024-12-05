<?php

    
    class Pessoa {

        private $nome;
        private $sobrenome;
        private $dataNascimento;
        private $tipo;
        private $CpfCnpf;
        private $telefone;
        private $endereco;


        public function __construct() {
            $this->nome = 'vaziu';
            $this->sobrenome = 'vaziu';
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }

        public function dataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;        
        }   
         

        public function getNomeCompleto(){
            return $this->nome . ' ' . $this->sobrenome;
        }

        public function __toString()
        {
            return $this->nome;
        }

        public function __call($name, $arguments)
        {
            return $name . " não programado";
        }
    }


?>