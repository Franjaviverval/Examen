<?php

require_once('producto.php');

class Inventario{

  private $productos;

  public function __construct($data){
    $productos = [];

    for($i = 0; $i < count($data); $i++){
      $producto = new Producto($data[$i]['id'], $data[$i]['nombre'], $data[$i]['precio'], $data[$i]['stock'], $data[$i]['categoria']);

      $this->productos[] = $producto;
    }      
  }

  //1 Funcion Examen
  public function obtenerDisponible(){
    return array_filter($productos, function($producto){ return $producto->isDisponible(); });
  }

  //2 Funcion Examen
  public function valorStock(){
    $suma = 0;

    foreach($this->productos as $producto)
      $suma += $producto->getValor();

    return $suma;
  }

  //3 Funcion Examen
  public function buscar($id){
    foreach($this->productos as $producto)
      if($producto->getId() == $id)
        return $producto;
    
    return null;
  }

  //4 Funcion Examen

  public function getNombres(){
    $nombres = [];

    foreach($this->productos as $producto)
      $nombres[] = $producto->getNombre();

    return $nombres;
  }

  //5 Funcion Examen

  public function getCategorias(){
    $categorias = [];

    foreach($this->productos as $producto){
      $categoria = $producto->getCategoria();

      if(!array_search($categoria, $categorias))
        $categorias[] = $categoria;
    }

    return $categorias;
  }

  //6 Funcion examen

  public function clasificar(){
    foreach($this->productos as $producto)
     $producto->setEstado();
  }

  //7 Funcion

  public function mostrar(){
    $valor = $this->valorStock();
    $categorias = implode(', ', $this->getCategorias());
    $productos = $this->productos;    
    
    require_once('vista.php');
  }

}

?>