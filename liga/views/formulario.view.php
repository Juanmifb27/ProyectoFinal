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
    <?php imprime_cabecera("") ?>

    <main class="container mt-4">
        <h2 class="text-center mb-4">Formulario de Inscripción</h2>
        <form id="formInscripcion" class="needs-validation" method="post" role="form" action="<?php RUTA; ?>formulario.php" novalidate>
            <input type="hidden" name="aux" id="aux" />

            <?php $nombreEquipo = "";
            if (isset($datosFormulario['nombre_equipo'])) {
                $nombreEquipo = $datosFormulario['nombre_equipo'];
            }
            ?>
            <div class="mb-3">
                <label for="nombreEquipo" class="form-label">Nombre del Equipo</label>

                <?php if ($nombreEquipo == "") {
                    print("<input
                    type=\"text\"
                    class=\"form-control\"
                    id=\"nombreEquipo\"
                    name=\"nombreEquipo\"
                    required
                    placeholder=\"Ruiz Gijon FC\" />");
                } else {
                    print("<input
                    type=\"text\"
                    class=\"form-control\"
                    id=\"nombreEquipo\"
                    name=\"nombreEquipo\"
                    required
                    placeholder=\"Ruiz Gijon FC\"
                    value=\"" . $nombreEquipo . "\"
                    />");
                } ?>
                <div class="invalid-feedback">Por favor, introduce un nombre válido.</div>
            </div>

            <?php $correoContacto = "";
            if (isset($datosFormulario['equipo_correo'])) {
                $correoContacto = $datosFormulario['equipo_correo'];
            }
            ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email de Contacto</label>
                <?php if ($correoContacto == "") {
                    print("<input
                    type=\"email\"
                    class=\"form-control correo\"
                    id=\"email\"
                    name=\"email\"
                    required
                    placeholder=\"Introduce tu correo Corporativo: nombre.apellido1-apellido2@iesruizgijon.com\" />");
                } else {
                    print("<input
                    type=\"email\"
                    class=\"form-control correo\"
                    id=\"email\"
                    name=\"email\"
                    required
                    placeholder=\"Introduce tu correo Corporativo: nombre.apellido1-apellido2@iesruizgijon.com\" 
                    value=\"" . $correoContacto . "\"
                    />");
                } ?>
                <div class="invalid-feedback">Introduce un email válido.</div>
            </div>

            <?php $ligaOpc = "";
            if (isset($datosFormulario['equipo_liga'])) {
                $ligaOpc = $datosFormulario['equipo_liga'];
            }
            ?>
            <div class="mb-3">
                <label for="liga" class="form-label">Liga a la que desea inscribirse</label>
                <select class="form-select" id="liga" name="liga" required>
                    <?php
                    if ($ligaOpc == "") {
                        print("<option value=\"\" selected=\"selected\" disabled> Seleccione una liga...</option> ");
                    } else {
                        print("<option value=\"\" disabled> Seleccione una liga...</option> ");
                    }
                    $sqlLiga = "SELECT *  FROM ligas WHERE nombre_liga NOT LIKE '%Grupo%'";
                    $resLiga = $conexion->BD_Consulta($sqlLiga);
                    $tuplaLiga = $conexion->BD_GetTupla($resLiga);
                    while ($tuplaLiga != NULL) {
                        if ($ligaOpc == $tuplaLiga['nombre_liga']) {
                            print("<option value=\"" . $tuplaLiga['nombre_liga'] . "\" selected=\"selected\">" . $tuplaLiga["nombre_liga"] . "</option>");
                        } else {
                            print("<option value=\"" . $tuplaLiga['nombre_liga'] . "\">" . $tuplaLiga["nombre_liga"] . "</option>");
                        }
                        $tuplaLiga = $conexion->BD_GetTupla($resLiga);
                    }
                    ?>
                </select>
                <div class="invalid-feedback">Selecciona una liga.</div>
            </div>

            <div class="mb-3">
                <div id="jugadores" class=" jugadores container d-flex flex-column border-4 border-primary">
                    <label class="form-label">Introduzca los datos de los jugadores del Equipo (Minimo 5)</label>
                    <div id="dataJugadores" class="dataJugadores">
                    </div>
                    <button id="btnAdd" class="btn btn-secondary float-end mb-3">Añadir Jugador</button>
                    <button id="btnDel" class="btn btn-secondary float-end mb-3">Eliminar último Jugador</button>
                    <div id="errores" hidden>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Enviar Inscripción</button>
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
            const jugadoresField = document.getElementById("jugadores");
            const btnAddJugador = document.getElementById("btnAdd");
            const btnDelJugador = document.getElementById("btnDel");
            const cantidadJugadores = document.getElementsByClassName("jugador");

            <?php
            if (isset($datosFormularioJugadores)): ?>
                addJugador(<?php echo count($datosFormularioJugadores); ?>);
                delJugador(1);
            <?php endif; ?>


            btnAddJugador.addEventListener("click", function(e) {
                e.preventDefault();
                addJugador(1);
            });

            btnDelJugador.addEventListener("click", function(e) {
                e.preventDefault();
                delJugador(1);
            })

            function addJugador(cantidad) {
                for (let index = 0; index < cantidad; index++) {
                    persistenciaJugadores();
                }
                let cantidadJugadores = document.getElementsByClassName("jugador").length;
                let jugador = `<div id="jugador` + cantidadJugadores + `" class="d-flex justify-content-between my-3 jugador">
                <input type="text" name="nombre_jugadores[]" class="form-control w-25 me-3" placeholder="Nombre" value="" >
                <input type="text" name="apellidos_jugadores[]" class="form-control w-25 me-3" placeholder="Apellidos" >
                <input type="email" name="correos_jugadores[]" class="form-control w-25 me-3 correo" placeholder="Correo Corporativo" >
                <select class="form-select w-25" id="curso" name="curso[]" >
                <option value="">Seleccione el curso...</option>
                <option value="1 ESO">1º ESO</option>
                <option value="2 ESO">2º ESO</option>
                <option value="3 ESO">3º ESO</option> 
                <option value="4 ESO">4º ESO</option>
                <option value="1 Bach">1º Bachillerato</option>
                <option value="2 Bach">2º Bachillerato</option>
                <option value="1 SMR">1º SMR</option>
                <option value="2 SMR">2º SMR</option>
                <option value="1 DAW">2º DAW</option>
                <option value="2 DAW">2º DAW</option>
                </select>
                </div>`;
                document.getElementById("dataJugadores").innerHTML += jugador;
            }

            function delJugador(cantidad) {
                let cantidadJugadores = document.getElementsByClassName("jugador").length;
                let jugadorObjetivo = document.getElementById("jugador" + (cantidadJugadores - 1));
                if (jugadorObjetivo != null) {
                    jugadorObjetivo.remove();
                }
            }

            function persistenciaJugadores() {
                let datosJugadores = [];
                let cantidadJugadores2 = document.getElementById("dataJugadores").children;

                for (let index = 0; index < cantidadJugadores2.length; index++) {
                    let datosJugador = cantidadJugadores2[index].children;
                    datosJugadores[index] = new Array(datosJugador.length);
                    for (let index2 = 0; index2 < datosJugador.length; index2++) {
                        datosJugadores[index][index2] = datosJugador[index2].value;
                    }
                }


                <?php if (isset($datosFormularioJugadores) && $datosFormularioJugadores != ""): ?>

                    <?php for ($i = 0; $i < count($datosFormularioJugadores); $i++): ?>
                        datosJugadores[<?php echo $i; ?>] = new Array(<?php //echo count($datosFormularioJugadores[$i]);?>);
                        <?php $j = 0; ?>
                        <?php foreach ($datosFormularioJugadores[$i] as $valor) : ?>
                            datosJugadores[<?php echo $i; ?>][<?php echo $j++ ?>] = "<?php echo $valor ?>";
                        <?php endforeach; ?>
                    <?php endfor; ?>
                <?php endif; ?>
                <?php $datosFormularioJugadores = ""?>
                document.getElementById("dataJugadores").innerHTML = ""

                for (let index = 0; index < datosJugadores.length; index++) {
                    let j = 0;

                    let jugador = `<div id="jugador` + index + `" class="d-flex justify-content-between my-3 jugador">
                    <input type="text" name="nombre_jugadores[]" class="form-control w-25 me-3" placeholder="Nombre" value="` + datosJugadores[index][0] + `" >
                    <input type="text" name="apellidos_jugadores[]" class="form-control w-25 me-3" placeholder="Apellidos" value="` + datosJugadores[index][1] + `" >
                    <input type="email" name="correos_jugadores[]" class="form-control w-25 me-3 correo" placeholder="Correo Corporativo" value="` + datosJugadores[index][2] + `" >
                    <select class="form-select w-25" id="curso` + index + `" name="curso[]" >
                    <option value="">Seleccione el curso...</option>
                    <option value="1 ESO">1º ESO</option>
                    <option value="2 ESO">2º ESO</option>
                    <option value="3 ESO">3º ESO</option> 
                    <option value="4 ESO">4º ESO</option>
                    <option value="1 Bach">1º Bachillerato</option>
                    <option value="2 Bach">2º Bachillerato</option>
                    <option value="1 SMR">1º SMR</option>
                    <option value="2 SMR">2º SMR</option>
                    <option value="1 DAW">2º DAW</option>
                    <option value="2 DAW">2º DAW</option>
                    </select>
                    </div>`;

                    document.getElementById("dataJugadores").innerHTML += jugador;

                    let options = document.getElementById("curso" + index)
                    for (let index2 = 0; index2 < options.length; index2++) {
                        if (datosJugadores[index][3] == options[index2].value) {
                            options[index2].setAttribute("selected", "selected")
                            options.setAttribute("value", datosJugadores[index][3])
                        }
                    }
                }
                console.log(datosJugadores);

            }

            function contarJugadores() {
                const cantidadJugadores = document.getElementsByClassName("jugador");
                let jugadoresCompletos = 0;
                for (let index = 0; index < cantidadJugadores.length; index++) {
                    const jugador = cantidadJugadores[index].children;
                    let valido = true
                    for (let index2 = 0; index2 < jugador.length; index2++) {
                        if (jugador[index2].value =="") {
                        valido = false;                            
                        }
                    }
                    if (valido){
                        jugadoresCompletos++;
                    }
                }
                return jugadoresCompletos; // Devuelve el número de jugadores
            }
            
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
            }

            form.addEventListener("submit", function(event) {
                const totalJugadores = contarJugadores();
                verificarCorreo();
                // Si el formulario no es válido o hay menos de 5 jugadores, evita el envío
                if (!form.checkValidity() || totalJugadores < 5) {
                    event.preventDefault();
                    event.stopPropagation();
                    if (totalJugadores < 5) {
                        const errores = document.getElementById("errores")
                        jugadoresField.classList.add("is-invalid");
                        jugadoresField.classList.remove("is-valid"); // Evita que aparezca el check
                        errores.setAttribute("hidden", "hidden");
                        errores.removeAttribute("hidden");
                        errores.innerHTML = "Debe haber al menos 5 jugadores.";
                    }
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