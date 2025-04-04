<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liga Novato</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/styles.css">
</head>

<body class="d-flex flex-column" style="height: 100vh;">
    <?php imprime_cabecera("Liga Novato"); ?>
    <!-- Sección Clasificación y Jornadas -->
    <section class="container mt-5 mb-5 d-flex flex-column flex-grow-1 justify-content-center">
        <div class="row w-100 h-100 d-flex justify-content-center align-items-center">
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
                        <?php while ($equipo = $resultado_equipos->fetch_assoc()) {
                            echo "
                        <tr>
                        <td>$posicion</td>
                        <td>$equipo[nombre_equipo]</td>
                        <td>$equipo[puntos]</td>
                        <td>$equipo[partidos_jugados]</td>
                        <td>$equipo[goles_a_favor]</td>
                        <td>$equipo[goles_en_contra]</td>
                        </tr>
                        ";
                            $posicion++;
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
        </div>
    </section>
    <?php imprime_pie();?>
    <script src="build/js/bootstrap.bundle.js"></script>
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