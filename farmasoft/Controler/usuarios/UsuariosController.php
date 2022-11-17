<?php
session_start();
if (!$_SESSION['idUser']) {
    header("location: ../../index.php");
}

include_once("../../model/functions.php");
$usrClass = new UsuariosModel();
$result = 0;
$respuesta = array();


$obtenerUsuario = (isset($_POST['obtener_usuario'])) ? $_POST['obtener_usuario'] : "0";
$crearUsuario = (isset($_POST['crear_usuario'])) ? $_POST['crear_usuario'] : "0";
$actualizarUsuario = (isset($_POST['actualizar_usuario'])) ? $_POST['actualizar_usuario'] : "0";
$eliminarUsuario = (isset($_POST['eliminar_usuario'])) ? $_POST['eliminar_usuario'] : "0";

if ($obtenerUsuario == 1) {
    $user_id = (isset($_POST['user_id'])) ? $_POST['user_id'] : "0";

    $result = $usrClass->getUsuarioById($user_id);

    if ($fila = mysqli_fetch_array($result)) {
        $respuesta['id'] = $fila['idusuario'];
        $respuesta['nombres'] = $fila['nombre'];
        $respuesta['usuario'] = $fila['usuario'];
        $respuesta['email'] = $fila['correo'];
        $respuesta['roles_id'] = $fila['rol'];
    }

    echo json_encode($respuesta);

}

if ($actualizarUsuario == 1) {
    
    $nombres = (isset($_POST['nombre'])) ? $_POST['nombre'] : "0";
    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "0";
    $email = (isset($_POST['email'])) ? $_POST['email'] : "";



    $result = $usrClass->actualizarUsuario($_SESSION['idUser'], $nombres, $email, $usuario);

    $respuesta['sql'] = $result;
    echo json_encode($respuesta);
}
