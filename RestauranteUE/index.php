<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Bienvenidos!</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,
    wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="./assets/images/LogoUE.png" />
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>¡Inicia sesión para entrar en la página!</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿No tienes una cuenta?</h3>
                    <p>¡Regístrate!</p>
                    <button id="btn__registrarse">Regístrarse</button>
                    <a href="./assets/loginAdmin/admin.php"><button>Entrar como Administrador</button></a>
                </div>
            </div>
           
            <div class="contenedor__login-register">
             
                <form action="./PHP/Formularios/loginUsuario.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico" name="usu_correo_electronico" required>
                    <input type="password" placeholder="Contraseña" name="usu_contrasena" required>
                    <button>Entrar</button>
                </form>

                <form action="./PHP/objetos/objetoUsuario.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre" name="usu_nombre" required>
                    <input type="text" placeholder="Apellido" name="usu_apellido" required>
                    <input type="email" placeholder="Correo Electrónico" name="usu_correo_electronico" required>
                    <input type="tel" placeholder="Teléfono" name="usu_telefono" required>
                    <input type="password" placeholder="Contraseña" name="usu_contrasena" required>
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>