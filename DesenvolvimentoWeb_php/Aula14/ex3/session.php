<?php
    class Session{
        public $id;
        public $status;
        public $user;
        private $dataHoraInicio;
        private $dataHoraUltimoAcesso;

        public function setSessionId($id){
            $this->id = $id;
        }

        public function setStatus($status){
            $this->status = $status;
        }

        public function setUser($usuario){
            $this->user = $usuario;
        }

        public function getUserSess(){
            return $this->user;
        }

        public function sessionStart(){
            session_start();
            if(isset($_SESSION[""])){
                
            }
        }


        public function sessionFinalize(){
            session_destroy();
        }
    }
?>