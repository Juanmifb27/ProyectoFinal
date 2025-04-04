<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $liga_nombre ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../build/css/styles.css">
</head>

<body class="d-flex flex-column" style="height: 100vh;">
    <?php imprime_cabecera($liga_nombre); ?>
    <!-- Sección Clasificación y Jornadas -->
    <section class="container mt-5 mb-5 d-flex flex-column flex-grow-1 justify-content-center">
        <div class="row w-100 h-100 d-flex justify-content-center align-items-center">

            <?php if ($errores != "") {
                print("<div class=\" bg-danger color-white\">
                <p>" . $errores . "</p>
                </div>");
            } else {
                // Contador para indicar cuando tiene que cambiar de liga;
                $cambiodeLiga = 1;
                if (count($liga_seleccionada) > 1): ?>
                    <?php
                    print("<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">");
                    for ($i = 0; $i < count($liga_seleccionada); $i++) {
                        print("<li class=\"nav-item\" role=\"presentation\">
                            <a
                            class=\"nav-link " . ($i == 0 ? "active show" : '') . "\"
                            id=\"grupo" . $grupos[$i] . "-tab\"
                            data-bs-toggle=\"tab\"
                            href=\"#grupo" . $grupos[$i] . "\"
                            role=\"tab\"
                            aria-controls=\"grupo" . $grupos[$i] . "\"
                            aria-selected=\"" . ($i == 0 ? "true" : 'false') . "\">Grupo " . $grupos[$i] . "</a>
                        </li>
                        ");
                    }
                    print("</ul>");
                    ?>
                    <!-- <li class="nav-item" role="presentation">
                        <a
                            class="nav-link"
                            id="grupoB-tab"
                            data-bs-toggle="tab"
                            href="#grupoB"
                            role="tab"
                            aria-controls="grupoB"
                            aria-selected="false">Grupo B</a>
                    </li> -->

                    <?php
                    print("<div class=\"tab-content w-100 mt-4\" id=\"myTabContent\">");

                    for ($i = 0; $i < count($liga_seleccionada); $i++) {
                        print("
                        <!-- Grupo " . $grupos[$i] . " -->
                        <div
                        class=\"tab-pane fade " . ($i == 0 ? "active show" : '') . "\"
                        id=\"grupo" . $grupos[$i] . "\"
                        role=\"tabpanel\"
                        aria-labelledby=\"grupo" . $grupos[$i] . "-tab\">
                        <div class=\"row\">
                        <!-- Tabla Clasificación Grupo " . $grupos[$i] . " -->
                        <div class=\"col-12 col-lg-6 mb-4 tabla\">
                        <h3 class=\"text-center\">Clasificación Grupo " . $grupos[$i] . "</h3>
                        <table
                        class=\"table table-bordered table-striped\"
                        id=\"tabla-clasificacionA\">
                        <thead>
                        <tr>
                        <th>Posición</th>
                        <th>Equipo</th>
                        <th>Puntos</th>
                        <th>PJ</th>
                        <th>GF</th>
                        <th>GC</th>
                        </tr>
                        </thead>
                        </thead>
                        <tbody>"
                        );

                        $posicion = 1;
                        for ($j = 0; $j < count($equipos_liga); $j++) {
                            if (isset($equipos_liga[$cambiodeLiga]["id_liga"])) {
                                if ($equipos_liga[$cambiodeLiga]["id_liga"] == $equipos_liga[$j]["id_liga"]) {
                                    print("
                                    <tr>
                                    <td>$posicion</td>
                                    <td>" . $equipos_liga[$j]["nombre_equipo"] . "</td>
                                    <td>" . $equipos_liga[$j]["puntos"] . "</td>
                                    <td>" . $equipos_liga[$j]["partidos_jugados"] . "</td>
                                    <td>" . $equipos_liga[$j]["goles_a_favor"] . "</td>
                                    <td>" . $equipos_liga[$j]["goles_en_contra"] . "</td>
                                    </tr>
                                    ");
                                    $posicion++;
                                }
                            }
                        }
                        print("
                            </tbody>
                            </table>
                            </div>
                            <!-- Tabla Jornadas Grupo " . $grupos[$i] . " -->
                                            <div class=\"col-12 col-lg-6 mb-4 tabla\">
                                            <h3 class=\"text-center\">Jornadas y Resultados Grupo " . $grupos[$i] . "</h3>
                                            <div class=\"table-responsive\" id=\"tabla-jornadas" . $grupos[$i] . "\">
                                            <table class=\"table table-bordered table-striped\">
                                            <thead class=\"sticky-top\">
                                            <tr>
                                            <th>Jornada</th>
                                            <th>Partido</th>
                                            <th>Resultado</th>
                                            </tr>
                                            </thead>
                                            <tbody class=\"text-center\">
                                            <!-- Jornada 1 -->
                                            <tr>
                                            <td rowspan=\"2\">Jornada 1</td>
                                            <td>Rayo Vaticano vs Notthingam Miedo</td>
                                            <td>1 - 3</td>
                                            </tr>
                                            <tr>
                                            <td>Biofrutas vs FC Barceló</td>
                                            <td>0 - 8</td>
                                            </tr>
                                            <!-- Jornada 2 -->
                                            <tr>
                                            <td rowspan=\"2\">Jornada 2</td>
                                            <td>FC Barceló vs Rayo Vaticano</td>
                                            <td>7 - 3</td>
                                            </tr>
                                                <tr>
                                                <td>Notthingam Miedo vs Biofrutas</td>
                                                <td>7 - 0</td>
                                                </tr>
                                                
                                                <!-- Jornada 3 -->
                                                <tr>
                                                <td rowspan=\"2\">Jornada 3</td>
                                                <td>Rayo Vaticano vs Biofrutas</td>
                                                <td>1 - 0</td>
                                                </tr>
                                                <tr>
                                                <td>FC Barceló vs Notthingam Miedo</td>
                                                <td>1 - 3</td>
                                                </tr>
                                                </tbody>
                                                </table>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                ");
                        $cambiodeLiga++;
                    }
                    ?>
                <?php else: ?>

                    <!-- Tabla Clasificación -->
                    <div class="col-12 col-lg-6 mb-4 tabla">
                        <h3 class="text-center">Clasificación</h3>
                        <table class="table table-bordered table-striped" id="tabla-clasificacion">
                            <thead>
                                <tr>
                                    <th>Posición</th>
                                    <th>Equipo</th>
                                    <th>Puntos</th>
                                    <th>PJ</th>
                                    <th>GF</th>
                                    <th>GC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $posicion = 1;
                                if (isset($equipos_liga)) {
                                    for ($i = 0; $i < count($equipos_liga); $i++) {
                                        echo "
                                        <tr>
                                        <td>$posicion</td>
                                        <td>" . $equipos_liga[$i]["nombre_equipo"] . "</td>
                                        <td>" . $equipos_liga[$i]["puntos"] . "</td>
                                        <td>" . $equipos_liga[$i]["partidos_jugados"] . "</td>
                                        <td>" . $equipos_liga[$i]["goles_a_favor"] . "</td>
                                        <td>" . $equipos_liga[$i]["goles_en_contra"] . "</td>
                                        </tr>
                                        ";
                                        $posicion++;
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Tabla Jornadas y Resultados -->
                    <div class="col-12 col-lg-6 mb-4 tabla">
                        <h3 class="text-center">Jornadas y Resultados</h3>
                        <div class="table-responsive" id="tabla-jornadas">
                            <table class="table table-bordered table-striped">
                                <thead class="sticky-top">
                                    <tr>
                                        <th>Jornada</th>
                                        <th>Partido</th>
                                        <th>Resultado</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <!-- Jornada 1 -->
                                    <tr>
                                        <td rowspan="3">Jornada 1</td>
                                        <td>Los Gachones vs Los Colgaos</td>
                                        <td>9 - 0</td>
                                    </tr>
                                    <tr>
                                        <td>Los Potrillos vs Los Enderpel</td>
                                        <td>0 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Los Colgaos</td>
                                        <td>DESCANSA</td>
                                    </tr>

                                    <!-- Jornada 2 -->
                                    <tr>
                                        <td rowspan="3">Jornada 2</td>
                                        <td>Los profiteroles vs Los Potrillos</td>
                                        <td>1 - 0</td>
                                    </tr>
                                    <tr>
                                        <td>Los Colgaos vs EnderPel fc</td>
                                        <td>0 - 7</td>
                                    </tr>
                                    <tr>
                                        <td>Los Gachones</td>
                                        <td>DESCANSA</td>
                                    </tr>

                                    <!-- Jornada 3 -->
                                    <tr>
                                        <td rowspan="3">Jornada 3</td>
                                        <td>EnderpelFc vs Los Gachones</td>
                                        <td>7 - 6</td>
                                    </tr>
                                    <tr>
                                        <td>Los Colgaos vs Los profiteroles</td>
                                        <td>0 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Los Potrillos</td>
                                        <td>Descansa</td>
                                    </tr>

                                    <!-- Jornada 4 -->
                                    <tr>
                                        <td rowspan="3">Jornada 4</td>
                                        <td>Los Potrillos vs Los Colgaos</td>
                                        <td>7 - 0</td>
                                    </tr>
                                    <tr>
                                        <td>Los Gachones vs Los profiteroles</td>
                                        <td>5 - 0</td>
                                    </tr>
                                    <tr>
                                        <td>EnderpelFc</td>
                                        <td>Descansa</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            <?php endif;
            } ?>

        </div>
    </section>
    <?php imprime_pie(); ?>
    <script src="../build/js/bootstrap.bundle.js"></script>
    <script>
        window.addEventListener("load", function() {
            // Obtenemos las tablas
            const tablaClasificacion = document.getElementById("tabla-clasificacion");
            const tablaJornadas = document.getElementById("tabla-jornadas");

            // Ajustamos la altura de la tabla de Jornadas a la altura de la tabla de Clasificación
            if (tablaClasificacion && tablaJornadas) {
                const alturaClasificacion = tablaClasificacion.offsetHeight;
                tablaJornadas.style.maxHeight = `${alturaClasificacion}px`;
            }
        });
    </script>
</body>

</html>