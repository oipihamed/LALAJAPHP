<?php
    class Conexion{

        private $host= "localhost";
        private $usuario= "gds0s231";
        private $clave= "gds0231";
        private $db= "a";
        private $conexion;

        public function conectar(){
            $this->conexion=
                mysqli_connect(
                $this->host,
                $this->usuario,
                $this->clave,
                $this->db
                );
                if(!($this->conexion)){
                    die("fallo la conexion".mysqli_connect_error());
                    return "-1";
                }else{
                    return "La conexion fue exitosa";
                }
                $this->conexion->set_charset("utf8");
        }
        public function cerrarcon(){
            mysqli_close($this->conexion);
                
        }

        public function get_conexion(){
            return $this->conexion;
        }
    }

    //$con= new Conexion();
    //$con->conectar();
?>