<?php 

class UsuariosModel {

    function getUsuarioById($user_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT idusuario,
                        nombre,                 
                        usuario,                                                                  
                        correo,
                        rol 
                FROM usuario 
                where idusuario = $user_id";
 
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }


    function eliminar_usuario(){  
        if (!empty($_GET['id'])) {
        require("../conexion.php");
        $id = $_GET['id'];
        $query_delete = mysqli_query($conexion, "DELETE FROM usuario WHERE idusuario = $id");
        mysqli_close($conexion);
        header("location: lista_usuarios.php");
    }
    }
  
    function getUsuarios(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $query = mysqli_query($conexion, "SELECT u.idusuario, u.nombre, u.correo, u.usuario, r.rol FROM usuario u INNER JOIN rol r ON u.rol = r.idrol");
        $result = mysqli_num_rows($query);
        $conexionClass->desconectar($conexion);
        return $query;
         }
         function actualizarusuario($idusuario, $nombre, $correo, $usuario){
        
                  
                  $conexionClass = new Tools();
                  $conexion = $conexionClass->conectar();
                  $sql_update = mysqli_query($conexion, "UPDATE usuario SET nombre = '$nombre', correo = '$correo' , usuario = '$usuario' WHERE idusuario = $idusuario");
                  $alert = '<p>Usuario Actualizado</p>';
                     if($sql_update){
                        $conexionClass->desconectar($conexion);
                        return 1;
                    }else{
                        $conexionClass->desconectar($conexion);
                        return 0;
                    }
                
                }
              
              } 
              ?>



         


    
