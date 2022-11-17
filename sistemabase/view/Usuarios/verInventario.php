<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../../index.php");
}

include_once("../../model/functions.php");

$usrClass = new usuariosModel();

$result = array();
$resultRoles = array();
$result = $usrClass->getUsuarios();

?>
   <table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Fecha de expiracion</th>
      <th scope="col">Nombre de medicina</th>
      <th scope="col">Precio</th>
      <th scope="col">Nombre de proveedor</th>
    </tr>
  </thead>  
  <tbody>
    <tr>
      <th scope="row">1</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
    </tr>
    <tr>
      <th scope="row">2</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
   
    </tr>
    <tr>
      <th scope="row">3</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
    </tr>
  </tbody>
</table>