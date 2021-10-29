<?php
    //Alta de un registro de usuario
    $dir=dirname( __DIR__ );
    require $dir.'/models/Producto.php';
    require $dir.'/controllers/OperacionController.php';
    //$tipoFun=$_POST['tipoFuncion'];
    //Variables de extraccion de informacion
    $result;
    $u= new Producto();
    $op= new OperacionController();

    $columnas=" * ";

    $tabla="Producto";
    $inner="";
    $condicion="";
    $orden="";
     $result =$op->buscar($columnas,$tabla,$inner,$condicion,$orden);
   
            echo json_encode($result);
             
    
 
 //   function darLike(){
 //       $idProducto=$_POST['idProducto'];
  //      $tabla="producto";
  //      $val="numLikes=numLikes+1";
  //      $condicion="idProducto= $idProducto";
 //       $result=$op->actualizar($tabla,$val,$condition);
      
  //  }
?>