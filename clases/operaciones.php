
<?php
    class Operaciones{
        private $conexion, $resultado;
        public function __construct($hostname, $username, $pw, $db){
            $this->conexion=new mysqli($hostname, $username, $pw, $db);
        }
        public function consulta($consulta){
            $this->resultado=$this->conexion->query($consulta);
        }
        public function fila_array(){
            return $this->resultado->fetch_array();
        }
        public function fila_assoc(){
            return $this->resultado->fetch_assoc();
        }
    }
?>
