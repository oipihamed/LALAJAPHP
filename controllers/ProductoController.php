<?php
    //Alta de un registro de usuario
    $dir=dirname( __DIR__ );
    require $dir.'/models/Producto.php';
    require $dir.'/controllers/OperacionController.php';
    
    //Variables de extraccion de informacion
    $result;
    $u= new Producto();
    $op= new OperacionController();

    $columnas=" nombre,tipo, peso, precio, imagen,descuento,imagen,estado,numLikes,descripcion,idProducto,(SELECT COUNT(idComentario) FROM Comentario c WHERE c.idProducto=p.idProducto) as totalComentarios ";
    $tabla=" Producto p ";
    $inner="";
    $condicion="";
    $orden="";
    $orden=$_POST['orden'];
    $condicion=$_POST['where'];
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