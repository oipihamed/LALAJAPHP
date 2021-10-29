<?php
  $dir=dirname( __DIR__ );
  require $dir.'/models/Producto.php';
  require $dir.'/controllers/OperacionController.php';
 $contenido=$_POST['contenido'];
$idProducto=$_POST['idProducto'];
$nombre=$_POST['nombre'];
 $u= new Producto();
 $op= new OperacionController();

 $columnas="idProducto,nombre,contenido";

 $tabla=" Comentario";

 $values="$idProducto,'$nombre','$contenido'";
 
  $result =$op->insertar($tabla,$columnas,$values);

         echo json_encode($result);
?>