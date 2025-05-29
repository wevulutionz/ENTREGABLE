<?php
require '../config/DB.php';
class Cliente
{
        private $idcliente;
        private $nombre;
        private $email;
        private $telefono;
        public function getIdcliente()
        {
                return $this->idcliente;
        }

        public function setIdcliente($idcliente)
        {
                $this->idcliente = $idcliente;

                return $this;
        }

        public function getNombre()
        {
                return $this->nombre;
        }

        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        public function getTelefono()
        {
                return $this->telefono;
        }

        public function setTelefono($telefono)
        {
                $this->telefono = $telefono;

                return $this;
        }
}
