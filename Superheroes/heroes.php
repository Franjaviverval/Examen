<?php

session_start();

class Heroes{

  private $heroes;

  public function __construct(){
    $heroes = [];
    $marca = $_SESSION['user'];

    $m = '';

    if($marca == 'DC')
      $m = 'DC Comics';
    else
      $m = 'Marvel Comics';

   // $this->load($m);
  }

  public function mostrar(){
    $heroes = $this->heroes;

    include_once('vista.php');
  }
  
  private function load($marca){
    if($fp = fopen('heroes.csv', "r")){
      while(!feof($fp)){
        $linea = fgets($pf);
        $data = explode(';', $linea);
        
        if($data[1] == $marca){
          $heroe = [ "nombre" => $data[0], "marca" => $data[1], "alter" => $data[2], "aparicion'" => $data[3], "caracter" => $data[4], "img" => $data[5] ];

          $this->heroes[] = $heroe;
        }
      }

      fclose($fp);
    }
  }

}

?>