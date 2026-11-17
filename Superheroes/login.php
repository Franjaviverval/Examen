<?php
require_once('heroes.php');

session_start();

$user = trim($_POST['user']) ?? '';
$password = trim($_POST['password']) ?? '';



if( ($user == 'DC' || $user == 'MARVEL') && $password == '1234'){
  $_SESSION['user'] = $user;
  $heroes = new Heroes();
  
  $heroes->mostrar();
}
else{
  header('Location: index.php');
  exit();
}

?>