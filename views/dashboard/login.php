<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
            <form action="views/administrador/login1.php" method="post">
                    <label for="email">Correo electrónico:</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="password">Contraseña:</label><br>
                    <input type="password" id="password" name="password" required><br><br>
                    <input type="submit" value="Iniciar sesión">
                </form>
                

                <!--Register-->
                <form action="views/dashboard/DB2.php" method="post" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="text" name="apellido" placeholder="Apellido">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <select name="tipo_documento">
                        <option value="1">C.C.</option>
                        <option value="2">C.E.</option>
                        <option value="3">NIT.</option>
                    </select>
                    <input type="text" name="no_documento" placeholder="no_documento">
                    <input type="date" name="fecha_nacimiento" placeholder="Fecha nacimiento">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="contrasena" placeholder="Contrasena">
                    <input type="text" name="telefono" placeholder="Telefono">
                    <select name="cargo">
                        <option value="2">administrador</option>
                    </select>
                    <input type="text" name="torre" placeholder="Torre">
                    <input type="text" name="apto" placeholder="Apto">
                    <button type="submit"> Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="./assets/js/scrip.js"></script>
</body>

</html>