<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "base_proyecto";
$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}


$nombre = mysqli_real_escape_string($conexion, $_REQUEST['nombre']);
$apellido = mysqli_real_escape_string($conexion, $_REQUEST['apellido']);
$usuario = mysqli_real_escape_string($conexion, $_REQUEST['usuario']);
$tipoDocumento = mysqli_real_escape_string($conexion, $_REQUEST['tipo_documento']);
$numeroDocumento = mysqli_real_escape_string($conexion, $_REQUEST['no_documento']);
$fechaNacimiento = mysqli_real_escape_string($conexion, $_REQUEST['fecha_nacimiento']);
$correo = mysqli_real_escape_string($conexion, $_REQUEST['email']);
$contrasena = mysqli_real_escape_string($conexion, $_REQUEST['contrasena']);
$telefono = mysqli_real_escape_string($conexion, $_REQUEST['telefono']);
$cargo = mysqli_real_escape_string($conexion, $_REQUEST['cargo']);
$torre = mysqli_real_escape_string($conexion, $_REQUEST['torre']);
$apto = mysqli_real_escape_string($conexion, $_REQUEST['apto']);


$query = "UPDATE usuarios
    SET NOMBRE = '$nombre',
        APELLIDO = '$apellido',
        USUARIO = '$usuario',
        TIPO_DOCUMENTO_ID = '$tipoDocumento',
        NO_DOCUMENTO = '$numeroDocumento',
        FECHA_NACIMIENTO = '$fechaNacimiento',
        EMAIL = '$correo',
        CONTRASENA = '$contrasena',
        TELEFONO = '$telefono',
        CARGO_ID = '$cargo',
        TORRE = '$torre',
        APTO = '$apto' 
    WHERE ID = " . $_GET['userId'];

$resultado = mysqli_query($conexion, $query) or die("error: " . mysqli_error($conexion));

mysqli_close($conexion);
echo "El usuario ha sido editado exitosamente";
header("Location: /ADMIREDD-main/?c=administrador&m=index", true, 301);

if (mysqli_connect_errno()) {
  echo "Error al conectar con MySQL: " . mysqli_connect_error();
  exit();
}

?>