<?php
#CONFIGURACION PARA HABILITACION DE MODO DEBUG
require_once("config.php");

if(DEBUG == "true"){
    ini_set('display_errors', 1);
}else{
    ini_set('display_errors', 0);
}

#CLASES DE LA CAPA DEL MODELO DE BASE DE DATOS
require_once("Class/Conn/Tools.php");
require_once("Class/Usuarios/UsuariosModel.php");
require_once("Class/headermodel.php");