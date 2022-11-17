<?php 

class agregarMedicinaModel {

    /**
     * Funcion para obtener el listado de usuarios
     */
    function getMedicina(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT codigo,
                        cantidad,
                        fechadeex,                        
                        nombredemedicina,
                        precio,                                                
                        nombredeproveedor 
                FROM inventario ";
 
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }
    

    /**
     * Funcion para obtener el listado de usuarios
     */
    function getUsuarioById($user_codigo){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT codigo,
         cantidad,
        fechadeex,                        
        nombredemedicina,
        precio,                                                
        nombredeproveedor
                FROM inventario where codigo = $user_codigo";
 
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }
  
?>