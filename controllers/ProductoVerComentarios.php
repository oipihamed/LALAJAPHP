<?php
  $dir=dirname( __DIR__ );
  require $dir.'/models/Producto.php';
  require $dir.'/controllers/OperacionController.php';
 $idProducto=$_POST['idProducto'];

 $u= new Producto();
 $op= new OperacionController();

 $columnas=" idComentario,contenido,fecha,idProducto,nombre ";

 $tabla="Comentario";
 $inner="";
 $condicion="WHERE idProducto=$idProducto";
 $orden="ORDER BY fecha desc";
  $result =$op->buscarComentarios($columnas,$tabla,$inner,$condicion,$orden);
         echo json_encode($result);
?>