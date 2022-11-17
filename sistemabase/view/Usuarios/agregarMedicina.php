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


    <div class="container-fluid">



        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-title">

                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="row" method="POST" id="submitProductForm" action="php_action/createProduct.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="currnt_date" class="form-control">

                                <div class="form-group col-md-6">
                                    <label class="ontrol-label">Codigo</label>
                                    <input type="text" class="form-control" id="productName" placeholder="Nombre Medicina" name="productName" autocomplete="off" required="" />
                                </div>
                                

                                <div class="form-group col-md-6">
                                    <label class="ontrol-label">Nombre Medicina</label>
                                    <input type="text" class="form-control" id="productName" placeholder="Nombre Medicina" name="productName" autocomplete="off" required="" />
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label class="control-label">Cantidad</label>
                                    <input type="text" class="form-control" id="quantity" placeholder="Cantidad" name="quantity" autocomplete="off" required="" pattern="^[0-9]+$" />
                                </div>
                               
                                
                                
                                <div class="form-group col-md-6">
                                    <label class="control-label">Precio</label>
                                    <input type="text" class="form-control" id="mrp" placeholder="Precio" name="mrp" autocomplete="off" required="" pattern="^[0-9]+$" />
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label class="control-label">Fecha Expiración</label>
                                    <input type="date" class="form-control" id="expdate" placeholder="Expiry Date" name="expdate" autocomplete="off" required="" pattern="^[0-9]+$" />
                                </div>
                              
                                
                                <div class="form-group col-md-6">
                                    <label class="ontrol-label">Nombre de proveedor</label>
                                    <input type="text" class="form-control" id="productName" placeholder="Nombre de proveedor" name="productName" autocomplete="off" required="" />
                                </div>
                               
                                
                               <hr>
                               

                                <div class="col-md-1 mx-auto">
                                    <button type="submit" name="create" id="createProductBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Guardar
                                    </button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
