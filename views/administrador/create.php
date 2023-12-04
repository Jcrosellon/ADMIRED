<link rel="stylesheet" href="./assets/css/create.css">
<div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Crear Usuario</h4>
                                    <div class="page-title-box"><a href="?c=administrador&m=index" class="btn btn-success">Volver</a>
                        <section class="form-register">
                        <form action="views/dashboard/DB2.php" method="post" class="formulario__register">
                            <h3>Crear Usuario</h3>
                            <input class="controls" type="text" name="nombre" id="nombre"
                                placeholder="Ingrese su nombre">
                            <input class="controls" type="text" name="apellido" id="apellido"
                                placeholder="Ingrese su Apellido">
                            <input class="controls" type="text" name="usuario" id="usuario"
                                placeholder="Ingrese su usuario">
                            <select name="tipo_documento">
                                <option value="1">C.C.</option>
                                <option value="2">C.E.</option>
                                <option value="3">NIT.</option>
                            </select>
                            <input class="controls" type="text" name="no_documento" id="no_documento"
                                placeholder="Ingrese su Nuemero de Documento">
                            <input class="controls" type="date" name="fecha_nacimiento" id="fecha_nacimiento"
                                placeholder="Ingrese su Fecha de Nacimiento">
                            <input class="controls" type="text" name="email" id="email"
                                placeholder="Ingrese su Correo Electronico">
                            <input class="controls" type="char" name="contrasena" id="contrasena"
                                placeholder="Ingrese su Contrasena">
                            <input class="controls" type="text" name="telefono" id="telefono"
                                placeholder="Ingrese su Numero de telefono">
                            <select name="cargo">
                                <option value="1">empleado</option>
                                <option value="2">administrador</option>
                                <option value="3">propietario</option>
                        <option value="3">residente</option>
                            </select>
                            <input class="controls" type="text" name="torre" id="torre"
                                placeholder="Ingrese su torre">
                            <input class="controls" type="text" name="apto" id="apto"
                                placeholder="Ingrese su apto">
                            <input class="botons" type="submit" value="Crear">
                        </section>
                        </div>
                                </div>
                            </div>
                        </div>     

                        
                        <!-- end row -->
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->
                