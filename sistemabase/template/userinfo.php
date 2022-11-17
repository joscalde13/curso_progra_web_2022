<?php 
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../../index.php");
}

include_once("../../model/functions.php");
?>

<header class="p-3 mb-3 border-bottom fondoHeader">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <img src="assets/img/logos/logoo.png" alt="mdo" width="100" height="90" class="rounded-circle">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/img/fotos/user.png" width="50" height="50" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
         
                              
                                    <button class="btn btn-warning me-md-2" id="btnEditarUsuario"
                                        name="btnEditarUsuario" type="button" onclick="obtenerUsuario(<?php echo $fila['id']; ?>);">Editar</button>
                             
                           
            <li><a  class="dropdown-item" href="#"  onclick="cargarContenido('view/Usuarios/perfill.php');" >Mi perfil</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item " href="index.php" >Cerrar Sessión</a></li>

            </ul>
        </div>
    </div>
       <!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA AGREGAR USUARIOS -->
       <div class="modal fade" id="formActualizaUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formActualizaUsuario">Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="id_upd">
                        <label for="id_upd">ID</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombres_upd" placeholder="aqui va tu nombre">
                        <label for="nombres_upd">Nombres</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="apellidos_upd" placeholder="aqui va tu apellido">
                        <label for="apellidos_upd">Apellidos</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="usuario_upd" placeholder="username">
                        <label for="usuario_upd">Username</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="password_upd" placeholder="aqui va tu clave">
                        <label for="password_upd">Clave</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnActualizarUsuario">Actualizar Usuario</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>
</header>