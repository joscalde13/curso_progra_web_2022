<?php 
session_start();
if (!$_SESSION['user_id']){
    header("location: ../../index.php");
}

include_once("../../model/functions.php");
$usrClass = new usuariosModel();
$result = 0;
$respuesta = array();

$obtenerMedicina = (isset($_POST['obtener_medicina'])) ? $_POST['obtener_medicina'] : "0";



if($obtenerMedicina == 1){
    $user_id = (isset($_POST['user_id'])) ? $_POST['user_id'] : "0";
        
    $result = $usrClass->getUsuarioById($user_id);

    if ($fila = mysqli_fetch_array($result)){
        $respuesta['codigo'] = $fila['codigo'];
        $respuesta['cantidad'] = $fila['cantidad'];
        $respuesta['fechadeex'] = $fila['fechadeex'];
        $respuesta['nombredemedicina'] = $fila['nombredemedicina'];
        $respuesta['precio'] = $fila['precio'];
        $respuesta['nombredeproveedor'] = $fila[nombredeproveedor'];

    }

    echo json_encode($respuesta);
}


?>