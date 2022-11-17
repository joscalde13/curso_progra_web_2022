<? php
Class proveedoresmodel{
    function getproveedores(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar()
						$query = mysqli_query($conexion, "SELECT * FROM proveedor");
						$result = mysqli_num_rows($query);
						
				$conexionClass->desconectar($conexion);
        return $query;
    }
}
?>