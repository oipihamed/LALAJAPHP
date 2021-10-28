<?php
    class Producto{
        private $nombre;
        private $peso;
        private $precio;
        private $imagen;
        private $descuento;
        private $tipo;
        private $estado;
        private $numLikes;
      
        
    public function set_Datos($nombre,$peso,$precio,$imagen,$descuento,$tipo,$estado,$numLikes){
        $this->nombre=$nombre;
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