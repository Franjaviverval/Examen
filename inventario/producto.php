<?php

class Producto{
  private $id;
  private $nombre;
  private $precio;
  private $stock;
  private $categoria;
  private $estado;

  public function __construct($id, $nombre, $precio, $stock, $categoria){
    $this->id = $id;
    $this->nombre = $nombre;
    $this->precio = $precio;
    $this->stock = $stock;
    $this->categoria = $categoria;
    $this->estado = $this->setEstado();
  }

  public function isDisponible(){
    return $this->stock > 0;
  }

  public function getValor(){
    return $this->precio * $this->stock;
  }

  public function getId(){
    return $this->id;
  }

  public function getPrecio(){
    return $this->precio;
  }
  
  public function getStock(){
    return $this->stock;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getCategoria(){
    return $this->categoria;
  }

  public function getEstado(){
    return $this->estado;
  }

  public function setEstado(){
    $estado = 'Otros Casos';
    if($this->stock == 0)
      $estado = 'Agotado';
    else if($this->stock <= 3)
      $estado = 'Stock bajo';
    return $estado;
  }
}

?>