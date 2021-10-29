<?php
  $dir=dirname( __DIR__ );
  require $dir.'/models/Producto.php';
  require $dir.'/controllers/OperacionController.php';
 $idProducto=$_POST['idProducto'];
 $u= new Producto();
 $op= new OperacionController();

      $tabla="producto";
      $val="numLikes=numLikes+1";
      $condicion="idProducto= $idProducto";
       $result=$op->actualizar($tabla,$val,$condition);
       if($result){
       echo json_encode($result);
    }else{
        echo json_encode("-1");
       }
?>