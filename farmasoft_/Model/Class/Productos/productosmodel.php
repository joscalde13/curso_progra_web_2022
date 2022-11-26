<? php
Class productosmodel{
    function getproductos(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar()
        $query = mysqli_query($conexion, "SELECT * FROM producto");
        $result = mysqli_num_rows($query);
				$conexionClass->desconectar($conexion);
        return $query;
    }
}
?>