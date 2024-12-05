<?php
    class Jogador{
        public $nome;
        public $posicao;
        public $dataNascimento;

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setPosicao($posicao){
            $this->nome = $posicao;
        }
        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }
    }
?>