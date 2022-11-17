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

<script src="assets/js/moduloUsuarios.js"></script>
<div class="card">
    <div class="card-header">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">LISTADO DE USUARIOS</h1>
        </div>
    </div>

    <div class="card-body">


        <div class="container">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success me-md-2" id="btnNuevoUsuario" name="btnNuevoUsuario" type="button"
                    data-bs-toggle="modal" data-bs-target="#formNuevoUsuario">Nuevo Usuario</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">CLAVE</th>
                            <th scope="col">ESTADO</th>
                     
                        </tr>
                    </thead>
                    <tbody>


<?php 
                while ($fila = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <th><?php echo $fila['id']; ?></th>
                            <td><?php echo $fila['nombres']." ".$fila['apellidos']; ?></td>
                            <td><?php echo $fila['usuario']; ?></td>
                            <td><?php echo $fila['password']; ?></td>
                            <td><?php echo $fila['estado']; ?></td>
           

                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-warning me-md-2" id="btnEditarUsuario"
                                        name="btnEditarUsuario" type="button" onclick="obtenerUsuario(<?php echo $fila['id']; ?>);">Editar</button>
                                </div>
                            </td>
                          
                    <?php 
                    }
                    ?>
                     </div>