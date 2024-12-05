<?php 

    class conexaobd {
        private $ip;
        private $porta;
        private $user;
        private $password;
        private $database;
        private $dbconn;
        private $status;

        public function __construct()
        {
            $this->inicializaInstancia();
        }

        private function inicializaInstancia() {
            $this->user = 'postgres';
            $this->porta = 5432;
            $this->ip = 'localhost';
            $this->desconecta();
        }

        private function setStatus($sStatus) {
            $this->status = $sStatus;
        }

        public function getStatus() {
            return $this->status;
        }

        public function conecta() {
            try {
                $this->setStatus('Conectando');
                $this->dbconn = pg_connect("host=". $this->ip . " port=" . $this->porta . " dbname=" . $this->database . " user=" . $this->user . " password=" . $this->password);
                if($this->dbconn) {
                    $this->setStatus('Conectado');
                    return true;
                }
            } catch (Exception $e){
                $this->setStatus('Erro: ' . $e->getMessage());
            }
        }

        public function getInternalConnection() {
            return $this->dbconn;
        }

        public function desconecta() {
            if($this->dbconn) {
                pg_close($this->dbconn);
            }
            $this->setStatus('Desconectado');
        }

        public function setIp($sIp) {
            $this->ip = $sIp;
        }

        public function setPorta($iPorta) {
            $this->porta = $iPorta;
        }

        public function setUser($sUser) {
            $this->user = $sUser;
        }

        public function setPassword($sPassword) {
            $this->password = $sPassword;
        }

        public function setDatabase($sDatabase) {
            $this->database = $sDatabase;
        }

    }

?>