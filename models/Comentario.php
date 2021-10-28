<?php

 class Comentario{
    private $contenido;
    private $idUsuario;
    private $producto;
    
    public function set_Datos($contenido,$idUsuario,$producto){
        $this->contenido=$contenido;
        $this->idUsuario=$idUsuario;
        $this->producto=$producto;
    }
    
}
?>