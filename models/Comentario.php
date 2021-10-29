<?php

 class Comentario{
    private $contenido;
    private $idProducto;
    private $fecha;
    
    
    public function set_Datos($contenido,$idProducto,$fecha){
        $this->contenido=$contenido;
        $this->idProducto=$idProducto;
        $this->fecha=$fecha;
    }

}
?>