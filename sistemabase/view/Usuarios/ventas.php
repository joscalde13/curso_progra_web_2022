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

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6 m-auto">
            <form action="" method="post">
                <?php echo isset($alert) ? $alert : ''; ?>
                <div class="form-group">
                    <label for="precio">Precio Actual</label>
                    <input type="number" class="form-control" value="<?php echo $data_producto['precio']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="precio">Cantidad de productos Disponibles</label>
                    <input type="number" class="form-control" value="<?php echo $data_producto['existencia']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="precio">Nuevo Precio</label>
                    <input type="number" placeholder="Ingrese nombre del precio" name="precio" class="form-control" value="<?php echo $data_producto['precio']; ?>">
                </div>
                <div class="form-group">
                    <label for="cantidad">Agregar Cantidad</label>
                    <input type="number" placeholder="Ingrese cantidad" name="cantidad" id="cantidad" class="form-control">
                </div>

                <input type="submit" value="Actualizar" class="btn btn-primary">
                <a href="lista_productos.php" class="btn btn-danger">Regresar</a>
            </form>
        </div>
    </div>

   