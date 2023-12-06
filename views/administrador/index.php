<link rel="stylesheet" href="./assets/css/index.css">
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Listado</h4>
                        <div class="col-15">
                            <div class="card">
                                <div class="card-body">
                                    <a href="?c=administrador&m=create" class="boton4">Crear Nuevo Usuario</a>
                                    <div class="table-responsive mt-2">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NOMBRE</th>
                                                    <th>APELLIDO</th>
                                                    <th>USUARIO</th>
                                                    <th>TIPO DOCUMENTO</th>
                                                    <th>NUMERO DOCUMENTO</th>
                                                    <th>FECHA NACIMIENTO</th>
                                                    <th>EMAIL</th>
                                                    <th>CONTRASENA</th>
                                                    <th>TELEFONO</th>
                                                    <th>CARGO</th>
                                                    <th>TORRE</th>
                                                    <th>APTO</th>
                                                    <th class="accion">ACCIONES</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // LOOP TILL END OF DATA
                                                while ($rows = $resultado->fetch_assoc()) {
                                                ?>
                                                    <tr>
                                                        <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                                                        <td><?php echo $rows['ID']; ?></td>
                                                        <td><?php echo $rows['NOMBRE']; ?></td>
                                                        <td><?php echo $rows['APELLIDO']; ?></td>
                                                        <td><?php echo $rows['USUARIO']; ?></td>
                                                        <td><?php echo $rows['TIPO_DOCUMENTO_ID']; ?></td>
                                                        <td><?php echo $rows['NO_DOCUMENTO']; ?></td>
                                                        <td><?php echo $rows['FECHA_NACIEMIENTO']; ?></td>
                                                        <td><?php echo $rows['EMAIL']; ?></td>
                                                        <td><?php echo $rows['CONTRASENA']; ?></td>
                                                        <td><?php echo $rows['TELEFONO']; ?></td>
                                                        <td><?php echo $rows['CARGO_ID']; ?></td>
                                                        <td><?php echo $rows['TORRE']; ?></td>
                                                        <td><?php echo $rows['APTO']; ?></td>
                                                    <td>
                                                        
                                                        <a href="?c=administrador&m=edit&userId=<?php echo $rows['ID']; ?>" class="boton2">Editar</a>
                                                        <a href="?c=administrador&m=destroy&userId=<?php echo $rows['ID']; ?>" class="boton3">Eliminar</a>

                                                    </td>
                                                        
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                    </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end row -->

    </div> <!-- end container-fluid -->

</div> <!-- end content -->
</div>