<link rel="stylesheet" href="./assets/css/index.css">
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Elimina este usuario</h4>
                        <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="?c=administrador&m=index" class="btn btn-success">Volver</a>
                                                <section class="form-register">
                                                    <form action="views/dashboard/deleteUser.php" method="post">
                                                    
                                                        
                                                        <input type="hidden" name="userId" value="<?php echo $_GET['userId']; ?>">
                                                        
                                                        <div class="table-responsive mt-2">
                                                            <table class="table table-border table-hover table striped cursor-pointer">
                                                                <h3>Vas a eliminar el usuario</h3>
                                                                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre" value="<?php echo $user['NOMBRE'] ?>">
                                                                <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido" value="<?php echo $user['APELLIDO'] ?>">
                                                                <input class="controls" type="text" name="usuario" id="usuario" placeholder="Ingrese su Apellido" value="<?php echo $user['USUARIO'] ?>">
                                                                <select name="tipo_documento">
                                                                    <option <?php echo $user['TIPO_DOCUMENTO_ID'] == 1 ? 'selected' : '' ?> value="1">C.C.</option>
                                                                    <option <?php echo $user['TIPO_DOCUMENTO_ID'] == 2 ? 'selected' : '' ?> value="2">C.E.</option>
                                                                    <option <?php echo $user['TIPO_DOCUMENTO_ID'] == 3 ? 'selected' : '' ?> value="3">NIT.</option>
                                                                </select>
                                                                <input class="controls" type="text" name="no_documento" id="no_documento" placeholder="Ingrese su Nuemero de Documento" value="<?php echo $user['NO_DOCUMENTO'] ?>">
                                                                <input class="controls" type="date" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Ingrese su Fecha de Nacimiento" value="<?php echo $user['FECHA_NACIMIENTO'] ?>">
                                                                <input class="controls" type="text" name="email" id="email" placeholder="Ingrese su Correo Electronico" value="<?php echo $user['EMAIL'] ?>">
                                                                <input class="controls" type="char" name="contrasena" id="contrasena" placeholder="Ingrese su Contrasena" value="<?php echo $user['CONTRASENA'] ?>">
                                                                <input class="controls" type="text" name="telefono" id="telefono" placeholder="Ingrese su Numero de telefono" value="<?php echo $user['TELEFONO'] ?>">
                                                                <select name="cargo">
                                                                    <option <?php echo $user['CARGO_ID'] == 1 ? 'selected' : '' ?> value="1">empleado</option>
                                                                    <option <?php echo $user['CARGO_ID'] == 2 ? 'selected' : '' ?> value="2">administrador</option>
                                                                    <option <?php echo $user['CARGO_ID'] == 3 ? 'selected' : '' ?> value="3">propietario</option>
                                                                    <option <?php echo $user['CARGO_ID'] == 4 ? 'selected' : '' ?> value="4">residente</option>
                                                                </select>
                                                                <input class="controls" type="text" name="torre" id="torre" placeholder="Ingrese su Torre" value="<?php echo $user['TORRE'] ?>">
                                                                <input class="controls" type="text" name="apto" id="apto" placeholder="Ingrese su apto" value="<?php echo $user['APTO'] ?>">
                                                                
                                                                        <input class="botons" type="submit" value="Eliminar">
                                                                
                                                            
                                                            </table>
                                                        </div>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- end row -->

    </div> <!-- end container-fluid -->

</div> <!-- end content -->