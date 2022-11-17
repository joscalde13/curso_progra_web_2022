<? php
Class clientesmodel{
    function getclientes(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar()
				$query = mysqli_query($conexion, "SELECT * FROM cliente");
				$result = mysqli_num_rows($query);
				$conexionClass->desconectar($conexion);
        return $query;
    }
}
?>