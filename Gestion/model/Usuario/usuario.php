<?php
class usuario
{
        private $idusuario;
        private $username;
        private $password;

        public function __construct($id, $username, $password)
        {
                $this->idusuario = $id;
                $this->username = $username;
                $this->password = $password;
        }

        public function getIdusuario()
        {
                return $this->idusuario;
        }

        public function setIdusuario($idusuario)
        {
                $this->idusuario = $idusuario;

                return $this;
        }

        public function getUsername()
        {
                return $this->username;
        }

        public function setUsername($username)
        {
                $this->username = $username;

                return $this;
        }

        public function getPassword()
        {
                return $this->password;
        }

        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }
}
