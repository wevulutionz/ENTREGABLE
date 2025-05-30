<?php
    class proyectos {
        private $idproyecto;
        private $nombre;
        private $descripcion;
        private $fechainicio;
        private $fechafin;
        private $idcliente;

        public function getIdproyecto()
        {
                return $this->idproyecto;
        }

        public function setIdproyecto($idproyecto)
        {
                $this->idproyecto = $idproyecto;

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
 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        public function getFechainicio()
        {
                return $this->fechainicio;
        }

        public function setFechainicio($fechainicio)
        {
                $this->fechainicio = $fechainicio;

                return $this;
        }

        public function getFechafin()
        {
                return $this->fechafin;
        }

        public function setFechafin($fechafin)
        {
                $this->fechafin = $fechafin;

                return $this;
        }

        public function getIdcliente()
        {
                return $this->idcliente;
        }

        public function setIdcliente($idcliente)
        {
                $this->idcliente = $idcliente;

                return $this;
        }
    }

?>