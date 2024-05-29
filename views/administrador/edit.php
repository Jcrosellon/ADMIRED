<link rel="stylesheet" href="./assets/css/destroy.css">
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Actualiza tus datos</h4>  
                        <a href="?c=administrador&m=index" class="btn btn-success">Volver</a>
                        <section class="form-register">
                        <form action="editUser.php?userId=<?php echo $_GET['userId'] ?>" method="post" class="formulario__register">

                            <h3>Editar Usuario</h3>
                            <input class="controls" type="text" name="nombre" id="nombre"
                                placeholder="Ingrese su Nombre" value="<?php echo htmlspecialchars($user['NOMBRE']) ?>">
                            <input class="controls" type="text" name="apellido" id="apellido"
                                placeholder="Ingrese su Apellido" value="<?php echo htmlspecialchars($user['APELLIDO']) ?>">
                            <input class="controls" type="text" name="usuario" id="usuario"
                                placeholder="Ingrese su Usuario" value="<?php echo htmlspecialchars($user['USUARIO']) ?>">
                            <select name="tipo_documento">
                                <option <?php echo $user['TIPO_DOCUMENTO_ID'] == 1 ? 'selected' : '' ?> value="1">C.C.</option>
                                <option <?php echo $user['TIPO_DOCUMENTO_ID'] == 2 ? 'selected' : '' ?> value="2">C.E.</option>
                                <option <?php echo $user['TIPO_DOCUMENTO_ID'] == 3 ? 'selected' : '' ?> value="3">NIT.</option>
                            </select>
                            <input class="controls" type="text" name="no_documento" id="no_documento"
                                placeholder="Ingrese su Número de Documento" value="<?php echo htmlspecialchars($user['NO_DOCUMENTO']) ?>" readonly>
                            <input class="controls" type="date" name="fecha_nacimiento" id="fecha_nacimiento"
                                placeholder="Ingrese su Fecha de Nacimiento" value="<?php echo htmlspecialchars($user['FECHA_NACIMIENTO']) ?>" readonly>
                            <input class="controls" type="text" name="email" id="email"
                                placeholder="Ingrese su Correo Electrónico" value="<?php echo htmlspecialchars($user['EMAIL']) ?>">
                            <input class="controls" type="password" name="contrasena" id="contrasena"
                                placeholder="Ingrese su Contraseña" value="<?php echo htmlspecialchars($user['CONTRASENA']) ?>">
                            <input class="controls" type="text" name="telefono" id="telefono"
                                placeholder="Ingrese su Número de Teléfono" value="<?php echo htmlspecialchars($user['TELEFONO']) ?>">
                            <select name="cargo">
                                <option <?php echo $user['CARGO_ID'] == 1 ? 'selected' : '' ?> value="1">Empleado</option>
                                <option <?php echo $user['CARGO_ID'] == 3 ? 'selected' : '' ?> value="3">Propietario</option>
                                <option <?php echo $user['CARGO_ID'] == 4 ? 'selected' : '' ?> value="4">Residente</option>
                            </select>
                            <input class="controls" type="text" name="torre" id="torre"
                                placeholder="Ingrese su Torre" value="<?php echo htmlspecialchars($user['TORRE']) ?>">
                            <input class="controls" type="text" name="apto" id="apto"
                                placeholder="Ingrese su Apartamento" value="<?php echo htmlspecialchars($user['APTO']) ?>">
                            <input class="botons" type="submit" value="Actualizar">
                        </form>
                        </section>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- end container-fluid -->

    </div> <!-- end content -->
</div>
