<?php
    class Producto{
        private $nombre;
        private $descripcion;
        private $peso;
        private $precio;
        private $imagen;
        private $descuento;
        private $tipo;
        private $estado;
        private $numLikes;
      
        
    public function set_Datos($nombre,$descripcion,$peso,$precio,$imagen,$descuento,$tipo,$estado,$numLikes){
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->peso=$peso;
        $this->precio=$precio;
        $this->imagen=$imagen;
        $this->descuento=$descuento;
        $this->tipo=$tipo;
        $this->estado=$estado;
        $this->numLikes=$numLikes;
      
    }
   
}
?>