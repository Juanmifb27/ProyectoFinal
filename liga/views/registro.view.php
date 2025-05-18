<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario Inscripción a la Liga</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../build/css/styles.css" />
    <!-- <link rel="stylesheet" href="build/css/bootstrap.min.css" /> -->
</head>


<body class="d-flex flex-column" style="height: 100vh;">
    <?php imprime_cabecera("", $vectorUsuario) ?>

    <main class="container mt-4">
        <h2 class="text-center mb-4">Iniciar Sesion</h2>
        <form id="formInscripcion" class="needs-validation" method="post" role="form" action="<?php RUTA; ?>/Controller/InicioSesion.php" novalidate>
            <input type="hidden" name="aux" id="aux" />
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input
                    type="text"
                    class="form-control"
                    id="usuario"
                    name="usuario"
                    required
                    />
                <div class="invalid-feedback">Por favor, introduce un nombre de Usuario</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Corporativo</label>
                <input
                    type="email"
                    class="form-control correo"
                    id="email"
                    name="email"
                    required
                    placeholder="Introduce tu correo Corporativo: nombre.apellido1-apellido2@iesruizgijon.com" />
                <div class="invalid-feedback">Introduce un email válido.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input
                    type="password"
                    class="form-control password"
                    id="password"
                    name="password"
                    required
                    />
                <div class="invalid-feedback">Por favor, introduce una Contraseña</div>
            </div>

            <div class="mb-3">
                <label for="password2" class="form-label">Confirmar Contraseña</label>
                <input
                    type="password"
                    class="form-control password"
                    id="password2"
                    name="password2"
                    required
                    />
                <div class="invalid-feedback">La contraseña debe ser igual al anterior</div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Iniciar Sesion</button>
            </div>

            </form>
    </main>

    <!-- Modal -->

    <?php (isset($exito)) ? imprime_modal($exito) : ""; ?>

    <?php imprime_pie(); ?>

    <script src="../build/js/bootstrap.bundle.js"></script>
    <script type="text/javascript">
        (function() {
            "use strict";
            const form = document.getElementById("formInscripcion");

            function verificarCorreo() {
                const correos = document.getElementsByClassName("correo");
                let patron = /([\w]+\.[\w]+\-[\w]+@[i][e][s][r][u][i][z][g][i][j][o][n]\.[c][o][m])/;
                let verificado = true;
                for (let index = 0; index < correos.length; index++) {
                    // añadir coincidencia tipo: nombres.apellido1-apellido2@iesruizgijon.com
                    if (correos[index].value.match(patron)) {
                        correos[index].classList.add("is-valid");
                        correos[index].classList.remove("is-invalid"); // Evita que aparezca el check
                    } else {
                        correos[index].classList.add("is-invalid");
                        correos[index].classList.remove("is-valid"); // Evita que aparezca el check
                        verificado = false;
                    }
                }
                return verificado;
            }

            function verificarContraseña(){
                const passwords = document.getElementsByClassName("password");

            }


            form.addEventListener("submit", function(event) {
                const correo = verificarCorreo();
                // Si el formulario no es válido o el correo no es Corporativo
                if (!form.checkValidity() || !correo) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add("was-validated");
            });


            <?php if (isset($exito)):
            ?>
                const modal = new bootstrap.Modal(document.getElementById("modalConfirmacion"));
                modal.show(); // Muestra el modal de confirmación
            <?php endif
            ?>

        })();
    </script>



</body>

</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario Inscripción a la Liga</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../build/css/styles.css" />
    <!-- <link rel="stylesheet" href="build/css/bootstrap.min.css" /> -->
</head>


<body class="d-flex flex-column" style="height: 100vh;">
    <?php imprime_cabecera("", $vectorUsuario) ?>

    <main class="container mt-4">
        <h2 class="text-center mb-4">Iniciar Sesion</h2>
        <form id="formInscripcion" class="needs-validation" method="post" role="form" action="<?php RUTA; ?>/Controller/InicioSesion.php" novalidate>
            <input type="hidden" name="aux" id="aux" />
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input
                    type="text"
                    class="form-control"
                    id="usuario"
                    name="usuario"
                    required
                    />
                <div class="invalid-feedback">Por favor, introduce un nombre de Usuario</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Corporativo</label>
                <input
                    type="email"
                    class="form-control correo"
                    id="email"
                    name="email"
                    required
                    placeholder="Introduce tu correo Corporativo: nombre.apellido1-apellido2@iesruizgijon.com" />
                <div class="invalid-feedback">Introduce un email válido.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input
                    type="password"
                    class="form-control password"
                    id="password"
                    name="password"
                    required
                    />
                <div class="invalid-feedback">Por favor, introduce una Contraseña</div>
            </div>

            <div class="mb-3">
                <label for="password2" class="form-label">Confirmar Contraseña</label>
                <input
                    type="password"
                    class="form-control password"
                    id="password2"
                    name="password2"
                    required
                    />
                <div class="invalid-feedback">La contraseña debe ser igual al anterior</div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Iniciar Sesion</button>
            </div>

            </form>
    </main>

    <!-- Modal -->

    <?php (isset($exito)) ? imprime_modal($exito) : ""; ?>

    <?php imprime_pie(); ?>

    <script src="../build/js/bootstrap.bundle.js"></script>
    <script type="text/javascript">
        (function() {
            "use strict";
            const form = document.getElementById("formInscripcion");

            function verificarCorreo() {
                const correos = document.getElementsByClassName("correo");
                let patron = /([\w]+\.[\w]+\-[\w]+@[i][e][s][r][u][i][z][g][i][j][o][n]\.[c][o][m])/;
                let verificado = true;
                for (let index = 0; index < correos.length; index++) {
                    // añadir coincidencia tipo: nombres.apellido1-apellido2@iesruizgijon.com
                    if (correos[index].value.match(patron)) {
                        correos[index].classList.add("is-valid");
                        correos[index].classList.remove("is-invalid"); // Evita que aparezca el check
                    } else {
                        correos[index].classList.add("is-invalid");
                        correos[index].classList.remove("is-valid"); // Evita que aparezca el check
                        verificado = false;
                    }
                }
                return verificado;
            }

            function verificarContraseña(){
                const passwords = document.getElementsByClassName("password");

            }


            form.addEventListener("submit", function(event) {
                const correo = verificarCorreo();
                // Si el formulario no es válido o el correo no es Corporativo
                if (!form.checkValidity() || !correo) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add("was-validated");
            });


            <?php if (isset($exito)):
            ?>
                const modal = new bootstrap.Modal(document.getElementById("modalConfirmacion"));
                modal.show(); // Muestra el modal de confirmación
            <?php endif
            ?>

        })();
    </script>



</body>

</html>