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


<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $_SESSION['user_nombre']." ".$_SESSION['user_apellido'];
                    ?></span><span class="text-black-50"></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">CAMBIO DE CONTRASEÑA </h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nombre </label><input type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-md-6"><label class="labels">Apellido</label><input type="text" class="form-control" value="" placeholder=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Usuario</label><input type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-md-12"><label class="labels">Contraseña</label><input type="text" class="form-control" placeholder="" value=""></div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Guardar datos</button></div> 
                </div>
        
        </div>
    
            </div>
        </div>
    </div>
</div>
</div>
</div>