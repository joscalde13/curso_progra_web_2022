

<?php
    class headermodel{
        
        function obtener_header(){
            $conexionClass = new Tools();
            $conexion =
            $conexionClass->conectar();
    
    
            $query_empresa = mysqli_query($conexion, "SELECT * FROM configuracion");
            $row_empresa = mysqli_num_rows($query_empresa);
            if ($row_empresa > 0) {
                if ($infoEmpresa = mysqli_fetch_assoc($query_empresa)) {
                    $dni = $infoEmpresa['dni'];
                    $nombre_empresa = $infoEmpresa['nombre'];
                    $razonSocial = $infoEmpresa['razon_social'];
                    $telEmpresa = $infoEmpresa['telefono'];
                    $emailEmpresa = $infoEmpresa['email'];
                    $dirEmpresa = $infoEmpresa['direccion'];
                    $igv = $infoEmpresa['igv'];
                }
            }
            $query_data = mysqli_query($conexion, "CALL data();");
            $result_data = mysqli_num_rows($query_data);
            if ($result_data > 0) {
                $data = mysqli_fetch_assoc($query_data);
            }
    
        }
    }
    




?>