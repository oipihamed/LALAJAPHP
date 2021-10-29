<?php
    $dir=dirname( __DIR__ );
require $dir.'/config/Conexion.php';


    class OperacionController{

        public function insertar($tabla,$campos,$val){
            //$sql= "INSERT INTO ".$tabla." VALUES ".$val;
            $sql= "INSERT INTO $tabla ($campos) VALUES ($val)";
            $con = new Conexion();
            $con->conectar();
            $conect= $con->get_conexion();
            $resultado= mysqli_query($conect,$sql);
            
            if($resultado){
                return true;
            }else{
                return false;
            }
        }
        
      

        public function buscar($columnas,$tabla,$inner,$condicion,$orden){
            $sql= " SELECT  $columnas FROM $tabla $inner $condicion $orden";
            $con = new Conexion();
            $con->conectar();
            $conect= $con->get_conexion();
            $result=mysqli_query($conect,$sql);
           
            $num_rows=mysqli_num_rows($result);
            if($num_rows>0){
                while($row=mysqli_fetch_array($result)){
                    $json[]=array(
                        'nombre'=>$row['nombre'],
                        'peso'=>$row['peso'],
                        'precio'=>$row['precio'],
                        'imagen'=>$row['imagen'],
                        'descuento'=>$row['descuento'],
                        'tipo'=>$row['tipo'],
                        'estado'=>$row['estado'],
                        'numLikes'=>$row['numLikes'],
                        'descripcion'=>$row['descripcion'],
                        'idProducto'=>$row['idProducto']
                    );
                }
                $json;
                return $json;
            }else{
                return "-1";
            }  
          
        }
        public function buscarComentarios($columnas,$tabla,$inner,$condicion,$orden){
            $sql= " SELECT  $columnas FROM $tabla $inner $condicion $orden";
            $con = new Conexion();
            $con->conectar();
            $conect= $con->get_conexion();
            $result=mysqli_query($conect,$sql);
           
            $num_rows=mysqli_num_rows($result);
            if($num_rows>0){
                while($row=mysqli_fetch_array($result)){
                    $json[]=array(
                        'nombre'=>$row['nombre'],
                        'fecha'=>$row['fecha'],
                        'idComentario'=>$row['idComentario'],
                        'idProducto'=>$row['idProducto'],
                        'contenido'=>$row['contenido'],
                    );
                }
                $json;
                return $json;
            }else{
                return "-1";
            }  
          
        }
        public function actualizar($tabla,$val,$condicion){
            $sql= "UPDATE $tabla SET $val $condicion";
            $con = new Conexion();
            $con->conectar();
            $conect= $con->get_conexion();
            $resultado= mysqli_query($conect,$sql);
            if($resultado){
                return true;
            }else{
                return false;
            }
        }

        public function borrar($tabla,$val){
            $sql= " DELETE FROM ".$tabla." WHERE ".$val;
            $con = new Conexion();
            $con->conectar();
            $conect= $con->get_conexion();
            $resultado= mysqli_query($conect,$sql);
            if($resultado){
                return true;
            }else{
                return false;
            }
        }
    }

?>

