<?php
    class Conexion{
        private $host= "localhost";
        private $usuario= "root";
        private $clave= "";
        private $db= "lalaja";
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
                    return "<script type=\"text/javascript\">console.log(\"La conexion fallo\")</script>";
                }else{
                    return "<script type=\"text/javascript\">console.log(\"La conexion fue exitosa\")</script>";
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