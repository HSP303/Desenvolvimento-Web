<?php
    class User{
        public $name;
        public $login;
        public $password;

        public function setName($name){
            $this->name = $name;
        }

        public function setLogin($login){
            $this->login = $login;
        }

        public function setPass($password){
            $this->password = $password;
        }
    }
?>