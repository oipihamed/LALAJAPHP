<?php
  $dir=dirname( __DIR__ );
  require $dir.'/models/Producto.php';
  require $dir.'/controllers/OperacionController.php';
 $idProducto=$_GET['idProducto'];

 $u= new Producto();
 $op= new OperacionController();

      $tabla="Producto";
      $val="numLikes=numLikes+1";
      $condicion="WHERE idProducto= $idProducto";

       $result=$op->actualizar($tabla,$val,$condicion);
       if($result){
       echo json_encode($result);
    }else{
        echo json_encode("-1");
       }
?>