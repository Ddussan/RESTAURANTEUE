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
                    <h3>Registra el menú!!?</h3>
                    <p>Agrega la información necesaria</p>
                    <button id="btn__iniciar-sesion">Enviar información</button>
                </div>
                <div class="caja__trasera-register">

                </div>
            </div>
            <!--registrar menú-->
                </form>
                <!--Register-->
                <form action="./PHP/objetos/objetoMenu.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Platillo" name="mnu_platillo" required>
                    <input type="text" placeholder="Descripción" name="mnu_descripción" required>
                    <input type="text" placeholder="Precio" name="mnu_precio" required>
                    <input type="number" placeholder="Cantidades" name="mnu_cantidades" required>
                    <input type="text" placeholder="fecha de disponibilidad" name="mnu_fecha de disponibilidad" required>
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>