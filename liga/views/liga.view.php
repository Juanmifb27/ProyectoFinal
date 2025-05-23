<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $liga_nombre ?></title>
    <script src="https://kit.fontawesome.com/43cf8b4b5b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../build/css/styles.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php imprime_cabecera($liga_nombre, $vectorUsuario); ?>
    <!-- Sección Clasificación y Jornadas -->
    <section class="container mt-2 mb-5 d-flex flex-column flex-grow-1">
        <div class="row w-100 h-100 mt-2 d-flex justify-content-center align-items-stretch" style="height: 75vh;">

            <?php 
            if ($errores != "") {
                print("<div class=\" bg-danger color-white\">
                <p>" . $errores . "</p>
                </div>");
            } else {
                // Contador para indicar cuando tiene que cambiar de liga;
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
                                                                $equipos_liga_actual = array_filter($equipos_liga, function ($equipo) use ($liga_seleccionada, $i) {
                                            return $equipo["id_liga"] == $liga_seleccionada[$i]["id"];
                                        });
                                        
                                        // Total de equipos en la liga actual
                                        $total_equipos_liga = count($equipos_liga_actual);
                                        
                                        // Calcular partidos por jornada = equipos / 2
                                       $partidos_jornadas = ceil($total_equipos_liga / 2);
                        print("
                        <!-- Grupo " . $grupos[$i] . " -->
                        <div
                        class=\"tab-pane fade " . ($i == 0 ? "active show" : '') . "\"
                        id=\"grupo" . $grupos[$i] . "\"
                        role=\"tabpanel\"
                        aria-labelledby=\"grupo" . $grupos[$i] . "-tab\">
                        <div class=\"row d-flex align-items-stretch\">
                        <!-- Tabla Clasificación Grupo " . $grupos[$i] . " -->
                        <div class=\"col-12 col-lg-6 mb-4\">
                        <h3 class=\"text-center\">Clasificación Grupo " . $grupos[$i] . "</h3>
                        <div class=\"flex-grow-1\" style=\"max-height: 450px; overflow-y: auto;\">
                        <table
                        class=\"table table-bordered table-striped tabla-clasificacion\"
                        id=\"tabla-clasificacion" . $grupos[$i] ."\">
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
                            if (isset($equipos_liga[$j]["id_liga"])) {
                                if ($equipos_liga[$j]["id_liga"] == $liga_seleccionada[$i]["id"]) {
                                    if($equipos_liga[$j]["id"] == $equipo_id){
                                    print("
                                    <tr class=\"text-warning\">
                                    <td>$posicion</td>
                                    <td> <img class=\"img-fluid\" width=\"50\" height=\"50\" src=\"../build/assets/img/equipos/" . $equipos_liga[$j]["equipo_imagen"] ."\">" . $equipos_liga[$j]["nombre_equipo"] . "</td>
                                    <td>" . $equipos_liga[$j]["puntos"] . "</td>
                                    <td>" . $equipos_liga[$j]["partidos_jugados"] . "</td>
                                    <td>" . $equipos_liga[$j]["goles_a_favor"] . "</td>
                                    <td>" . $equipos_liga[$j]["goles_en_contra"] . "</td>
                                    </tr>
                                    ");
                                    }else{
                                    print("
                                    <tr>
                                    <td>$posicion</td>
                                    <td><img class=\"img-fluid\" width=\"50\" height=\"100%\" src=\"../build/assets/img/equipos/" . $equipos_liga[$j]["equipo_imagen"] ."\">" . $equipos_liga[$j]["nombre_equipo"] . "</td>
                                    <td>" . $equipos_liga[$j]["puntos"] . "</td>
                                    <td>" . $equipos_liga[$j]["partidos_jugados"] . "</td>
                                    <td>" . $equipos_liga[$j]["goles_a_favor"] . "</td>
                                    <td>" . $equipos_liga[$j]["goles_en_contra"] . "</td>
                                    </tr>
                                    ");
                                    }
                                    $posicion++;
                                }
                            }
                        }

                        print("
                            </tbody>
                            </table>
                            </div>
                            </div>
                            
                            <!-- Tabla Jornadas Grupo " . $grupos[$i] . " -->
                            <div class=\"col-12 col-lg-6 mb-4\">
                            <div class=\"h-100 d-flex flex-column\">
                            <h3 class=\"text-center\">Jornadas y Resultados Grupo " . $grupos[$i] . "</h3>
                            <div class=\"flex-grow-1 tabla-jornadas\" id=\"tabla-jornadas" . $grupos[$i] . "\" style=\"max-height: 450px; overflow-y: auto;\">
                            <table class=\"table table-bordered table-striped\" id=\"tabla-jornadas" . $grupos[$i] ."\">
                            <thead class=\"sticky-top\">
                            <tr>
                            <th>Jornada</th>
                            <th>Partido</th>
                            <th>Resultado</th>
                            </tr>
                            </thead>
                            <tbody class=\"text-center\">
                            ");
                        if (isset($emparejamientos)) {
                            for ($j = 0; $j < count($emparejamientos); $j++) {
                                if (isset($emparejamientos[$j]["liga_id"])) {
                                    if ($emparejamientos[$j]["liga_id"] == $liga_seleccionada[$i]["id"]) {


                                        print("<tr class='text-center'>");
                                        if ($j == 0) {
                                            print("<td class='pt-3' rowspan='" . $partidos_jornadas . "'>" . $emparejamientos[$j]["jornada"] . "</td>");
                                        }
                                        if ($j != 0 && $emparejamientos[$j]["jornada"] != $emparejamientos[($j - 1)]["jornada"] && $j != (count($emparejamientos) - 1)) {
                                            print("<td class='pt-3' rowspan='$partidos_jornadas'>" . $emparejamientos[$j]["jornada"] . "</td>");
                                        }

                                        if ($emparejamientos[$j]["nombre_local"] == $emparejamientos[$j]["nombre_visitante"]) {
                                             if($emparejamientos[$i]["nombre_local"] == $equipo_nombre){
                                                 print("<td class=\"text-warning\">" . $emparejamientos[$j]["nombre_local"] . "</td>
                                                        <td>DESCANSA</td>
                                                        ");
                                             }
                                            print("<td>" . $emparejamientos[$j]["nombre_local"] . "</td>
                                                        <td>DESCANSA</td>
                                                        ");
                                        } else {
                                            if($emparejamientos[$i]["nombre_local"] == $equipo_nombre || $emparejamientos[$i]["nombre_visitante"] == $equipo_nombre){
                                            print("<td class=\"text-warning\"><div class=\"row align-items-center text-center\"><div class=\"col-3 text-start\"><img class=\"img-fluid\" width=\"50\" height=\"100%\" src=\"../build/assets/img/equipos/" . $emparejamientos[$i]["equipo_imagen_local"] ."\"></div><div class=\"col-6\">" . $emparejamientos[$j]["nombre_local"] . " - " . $emparejamientos[$j]["nombre_visitante"] . "</div><div class=\"col-3 text-end\"><img class=\"img-fluid\" width=\"50\" height=\"100%\" src=\"../build/assets/img/equipos/" . $emparejamientos[$i]["equipo_imagen_visitante"] ."\"></div></div></td>");
                                            if ($emparejamientos[$j]["goles_local"] == NULL && $emparejamientos[$j]["goles_visitante"] == NULL) {
                                                if ($emparejamientos[$j]["fecha_partido"] == "0000-00-00") {
                                                    print("<td class=\"text-warning\">Sin Determinar</td>");
                                                } else {
                                                    print("<td class=\"text-warning\">" . cambiaf_a_normal($emparejamientos[$j]["fecha_partido"]) . "</td>");
                                                }
                                            } else {
                                                print("<td class=\"text-warning\">" . $emparejamientos[$j]["goles_local"] . " - " . $emparejamientos[$j]["goles_visitante"] . "</td>");
                                            }
                                            }
                                            print("<td><div class=\"row align-items-center text-center\"><div class=\"col-3 text-start\"><img class=\"img-fluid\" width=\"50\" height=\"100%\" src=\"../build/assets/img/equipos/" . $emparejamientos[$i]["equipo_imagen_local"] ."\"></div><div class=\"col-6\">" . $emparejamientos[$j]["nombre_local"] . " - " . $emparejamientos[$j]["nombre_visitante"] . "</div><div class=\"col-3 text-end\"><img class=\"img-fluid\" width=\"50\" height=\"100%\" src=\"../build/assets/img/equipos/" . $emparejamientos[$i]["equipo_imagen_visitante"] ."\"></div></div></td>");
                                            if ($emparejamientos[$j]["goles_local"] == NULL && $emparejamientos[$j]["goles_visitante"] == NULL) {
                                                if ($emparejamientos[$j]["fecha_partido"] == "0000-00-00") {
                                                    print("<td>Sin Determinar</td>");
                                                } else {
                                                    print("<td>" . cambiaf_a_normal($emparejamientos[$j]["fecha_partido"]) . "</td>");
                                                }
                                            } else {
                                                print("<td>" . $emparejamientos[$j]["goles_local"] . " - " . $emparejamientos[$j]["goles_visitante"] . "</td>");
                                            }
                                            print("</tr>");
                                        }
                                    }
                                }
                            }
                        }
                        print("
                                                </tbody>
                                                </table>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                ");
                    }
                    ?>
                <?php else: ?>

                    <!-- Tabla Clasificación -->
                    <div class="col-12 col-lg-6 mb-4">
                        <div class="h-100 d-flex flex-column">
                        <h3 class="text-center">Clasificación</h3>
                        <div class="flex-grow-1" style="max-height: 450px; overflow-y: auto;">
                        <table class="table table-bordered table-striped tabla-clasificacion" id="tabla-clasificacion">
                            <thead>
                                <tr class="text-center">
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
                                        if($equipos_liga[$i]["id"] == $equipo_id){
                                        echo "
                                        <tr class='text-center'>
                                        <td class='text-warning align-middle'>$posicion</td>
                                        <td class='text-warning'><img class=\"img-fluid\" width=\"50\" height=\"100%\" src=\"../build/assets/img/equipos/" . $equipos_liga[$i]["equipo_imagen"] ."\">" . $equipos_liga[$i]["nombre_equipo"] . "</td>
                                        <td class='text-warning'>" . $equipos_liga[$i]["puntos"] . "</td>
                                        <td class='text-warning'>" . $equipos_liga[$i]["partidos_jugados"] . "</td>
                                        <td class='text-warning'>" . $equipos_liga[$i]["goles_a_favor"] . "</td>
                                        <td class='text-warning'>" . $equipos_liga[$i]["goles_en_contra"] . "</td>
                                        </tr>
                                        ";
                                        }else{
                                        echo "
                                        <tr class='text-center'>
                                        <td class=\"align-middle\">$posicion</td>
                                        <td><img class=\"img-fluid\" width=\"50\" height=\"100%\" src=\"../build/assets/img/equipos/" . $equipos_liga[$i]["equipo_imagen"] ."\">" . $equipos_liga[$i]["nombre_equipo"] . "</td>
                                        <td>" . $equipos_liga[$i]["puntos"] . "</td>
                                        <td>" . $equipos_liga[$i]["partidos_jugados"] . "</td>
                                        <td>" . $equipos_liga[$i]["goles_a_favor"] . "</td>
                                        <td>" . $equipos_liga[$i]["goles_en_contra"] . "</td>
                                        </tr>
                                        ";
                                        }
                                        $posicion++;
                                    }
                                } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>

                    <!-- Tabla Jornadas y Resultados -->
                    <div class="col-12 col-lg-6 mb-4 d-flex">
                    <div class="h-100 d-flex flex-column">
                        <h3 class="text-center">Jornadas y Resultados</h3>
                        <div class="flex-grow-1 tabla-jornadas" id="tabla-jornadas" style="max-height: 450px; overflow-y: auto;">
                            <table class="table table-bordered table-striped " id="tablaJornadas">
                                <thead class="sticky-top">
                                    <tr class="text-center">
                                        <th class='column-hide'>Jornada</th>
                                        <th>Partido</th>
                                        <th>Resultado</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                    if (isset($emparejamientos)) {
                                        for ($i = 0; $i < count($emparejamientos); $i++) {
                                            print("<tr>");
                                                if ($i == 0) {
                                                print("<td class='align-middle' rowspan='$partidos_jornadas'>" . $emparejamientos[$i]["jornada"] . "</td>");
                                            }
                                            if ($i != 0 && $emparejamientos[$i]["jornada"] != $emparejamientos[($i - 1)]["jornada"] && $i != (count($emparejamientos) - 1)) {
                                                print("<td class='align-middle' rowspan='$partidos_jornadas'>" . $emparejamientos[$i]["jornada"] . "</td>");
                                            }

                                            if ($emparejamientos[$i]["nombre_local"] == $emparejamientos[$i]["nombre_visitante"]) {
                                                if($emparejamientos[$i]["nombre_local"] == $equipo_nombre){
                                                print("<td class=\"text-warning\">" . $emparejamientos[$i]["nombre_local"] . "</td>
                                                    <td>DESCANSA</td>
                                                    ");
                                                }else{
                                                print("<td>" . $emparejamientos[$i]["nombre_local"] . "</td>
                                                    <td>DESCANSA</td>
                                                    ");
                                                }
                                            } else {
                                                if($emparejamientos[$i]["nombre_local"] == $equipo_nombre || $emparejamientos[$i]["nombre_visitante"] == $equipo_nombre){
                                                    print("<td class=\"text-warning\"><div class=\"row align-items-center text-center\"><div class=\"col-3 text-start\"><img class=\"img-fluid\" width=\"50\" height=\"100%\" src=\"../build/assets/img/equipos/" . $emparejamientos[$i]["equipo_imagen_local"] ."\"></div><div class=\"col-6\">" . $emparejamientos[$i]["nombre_local"] . " - " . $emparejamientos[$i]["nombre_visitante"] . "</div><div class=\"col-3 text-end\"><img class=\"img-fluid\"class=\"img-fluid\" width=\"50\" height=\"100%\" src=\"../build/assets/img/equipos/" . $emparejamientos[$i]["equipo_imagen_visitante"] ."\"></div></div></td>");
                                                if ($emparejamientos[$i]["goles_local"] == NULL && $emparejamientos[$i]["goles_visitante"] == NULL) {
                                                    if ($emparejamientos[$i]["fecha_partido"] == "0000-00-00") {
                                                    print("<td class=\"text-warning\">Sin Determinar</td>");
                                                } else {
                                                    print("<td class=\"text-warning\">" . cambiaf_a_normal($emparejamientos[$i]["fecha_partido"]) . "</td>");
                                                }
                                                } else {
                                                    print("<td class=\"text-warning\">" . $emparejamientos[$i]["goles_local"] . " - " . $emparejamientos[$i]["goles_visitante"] . "</td>");
                                                }
                                                }else{

                                                print("<td><div class=\"row align-items-center text-center\"><div class=\"col-3 text-start\"><img class=\"img-fluid\" width=\"50\" height=\"100%\" src=\"../build/assets/img/equipos/" . $emparejamientos[$i]["equipo_imagen_local"] ."\"></div><div class=\"col-6\">" . $emparejamientos[$i]["nombre_local"] . " - " . $emparejamientos[$i]["nombre_visitante"] . "</div><div class=\"col-3 text-end\"><img class=\"img-fluid\"class=\"img-fluid\"class=\"img-fluid\" width=\"50\" height=\"100%\" src=\"../build/assets/img/equipos/" . $emparejamientos[$i]["equipo_imagen_visitante"] ."\"></div></div></td>");
                                                if ($emparejamientos[$i]["goles_local"] == NULL && $emparejamientos[$i]["goles_visitante"] == NULL) {
                                                    if ($emparejamientos[$i]["fecha_partido"] == "0000-00-00") {
                                                    print("<td>Sin Determinar</td>");
                                                } else {
                                                    print("<td>" . cambiaf_a_normal($emparejamientos[$i]["fecha_partido"]) . "</td>");
                                                }
                                                } else {
                                                    print("<td>" . $emparejamientos[$i]["goles_local"] . " - " . $emparejamientos[$i]["goles_visitante"] . "</td>");
                                                }
                                                }
                                                print("</tr>");
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
            <?php endif;
            } ?>

        </div>
    </section>
    <?php imprime_pie(); ?>
    </div>
    <script src="../build/js/bootstrap.bundle.js"></script>
    <script src="//cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
 <script>
        // window.addEventListener("load", function() {
        //     // Obtenemos las tablas
        //     const tablaClasificacion = document.getElementById("tabla-clasificacion");
        //     const tablaJornadas = document.getElementById("tabla-jornadas");

        //     // Ajustamos la altura de la tabla de Jornadas a la altura de la tabla de Clasificación
        //     if (tablaClasificacion && tablaJornadas) {
        //         const alturaClasificacion = tablaClasificacion.offsetHeight;
        //         tablaJornadas.style.maxHeight = `${alturaClasificacion}px`;
        //     }
        // });
     </script>

 <script>
//   function igualarAlturas() {
//     let tablaClasificacion = document.querySelector('.tabla-clasificacion');
//     let tablaJornadas = document.querySelector('.tabla-jornadas');
//     let anchura = tablaClasificacion.offsetWidth;
//     if (window.innerWidth > 768) {
//       let altura = tablaClasificacion.offsetHeight;
//       tablaJornadas.style.maxHeight = altura + 'px';
//       tablaJornadas.style.width = anchura + 'px';
//     } else {
//       tablaJornadas.style.height = 'auto';
//       tablaJornadas.style.width = anchura + 'px';
//     }
//   }

//   window.addEventListener('load', igualarAlturas);
//   window.addEventListener('resize', igualarAlturas);
//   document.querySelectorAll('a[data-bs-toggle="tab"]').forEach(tab => {
//     tab.addEventListener('shown.bs.tab', igualarAlturas);
//   });
 </script>

 <script>
   function igualarAlturas() {
    let tablasClasificacion = document.querySelectorAll('.tabla-clasificacion');
    let tablasJornadas = document.querySelectorAll('.tabla-jornadas');
    for(let index = 0; index < tablasClasificacion.length; index++){
      
    let anchura = tablasClasificacion[index].offsetWidth;
    if (window.innerWidth > 768) {
      let altura = tablasClasificacion[index].offsetHeight;
      tablasJornadas[index].style.maxHeight = altura + 'px';
      tablasJornadas[index].style.width = anchura + 'px';
    } else {
      tablasJornadas[index].style.height = 'auto';
      tablasJornadas[index].style.width = anchura + 'px';
    }
  }
    }

  window.addEventListener('load', igualarAlturas);
  window.addEventListener('resize', igualarAlturas);
  document.querySelectorAll('a[data-bs-toggle="tab"]').forEach(tab => {
    tab.addEventListener('shown.bs.tab', igualarAlturas);
  });
 </script>

    <script>
        const btnInicioSesion = document.getElementById("IniciarSesion");
        const modalInicioSesion = new bootstrap.Modal(document.getElementById("ModalForm"));
        btnInicioSesion.addEventListener("click", function() {
            modalInicioSesion.show();
        })
    </script>
</body>

</html>