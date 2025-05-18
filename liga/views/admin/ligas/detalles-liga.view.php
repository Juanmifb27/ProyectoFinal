<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración Liga</title>
    <script src="https://kit.fontawesome.com/43cf8b4b5b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="../../../build/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="../../../build/css/styles.css"> -->
    <link href="../../../build/js/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="//cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed">

    <div id="kt_header" class="header-mobile align-items-center header-mobile-fixed">
        <div class="container d-flex align-items-stretch justify-content-between">
            <!--begin::Logo-->
            <div class="d-flex flex-column align-items-center">
                <!--begin::Logo-->
                <h1 class="">
                    <a class="text-decoration-none" href="../../../Controller/admin/index.php">Panel de Administración Liga IES Ruiz Gijón</a>
                </h1>
                <!--end::Logo-->
            </div>
            <!-- begin::Toolbar -->
            <div class="d-flex align-items-center">
                <!--end::Header Menu Mobile Toggle-->
                <ul class="nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon"><i class="fa fa-user text-secondary"></i> </span> <?php echo $vectorUsuario["rol"] ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../../../Controller/desconectar.php">
                                <span class="svg-icon svg-icon-primary"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 512 512">
                                        <path fill="#2B4E84" d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 224c0 17.7 14.3 32 32 32s32-14.3 32-32l0-224zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z" />
                                    </svg>
                                </span>
                                Cerrar Sesión
                            </a>
                            <a class="dropdown-item" href="../../index.php">
                                <span class="svg-icon svg-icon-primary"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 576 512">
                                        <path fill="#2B4E84" opacity="1" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                    </svg>
                                </span>
                                Ver Vista Usuario
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end::Toolbar -->
        </div>
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed header-light">
                    <!--begin::Container-->
                    <div class="container d-flex align-items-stretch justify-content-between">
                        <!--begin::Header Menu Wrapper-->
                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                            <!--begin::Header Menu-->
                            <!--begin::Brand-->
                            <div class="brand pl-0">
                                <!--begin::Logo-->
                                <h1 class="">
                                    <a class="text-decoration-none" href="../../../Controller/admin/index.php">Panel de Administracion Liga IES Ruiz Gijón</a>
                                </h1>
                                <!--end::Logo-->
                            </div>
                            <!--end::Brand-->
                            <!--end::Header Menu-->
                        </div>
                        <!--end::Header Menu Wrapper-->
                        <!--begin::Topbar-->
                        <div class="topbar">
                            <div class="topbar-item">
                                <ul class="nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                            <span class="svg-icon"><i class="fa fa-user text-secondary"></i> </span> <?php echo $vectorUsuario["rol"] ?>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="../../../Controller/desconectar.php">
                                                <span class="svg-icon svg-icon-primary"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 512 512">
                                                        <path fill="#2B4E84" d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 224c0 17.7 14.3 32 32 32s32-14.3 32-32l0-224zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z" />
                                                    </svg>
                                                </span>
                                                Cerrar Sesión
                                            </a>
                                            <a class="dropdown-item" href="../../index.php">
                                                <span class="svg-icon svg-icon-primary"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 576 512">
                                                        <path fill="#2B4E84" opacity="1" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                    </svg>
                                                </span>
                                                Ver Vista Usuario
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end::User -->
                        </div>
                        <!-- end::Topbar -->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Dashboard-->
                            <?php
                            if (isset($_GET['correcto'])) {
                                print("<div class=\"alert alert-success\"> 
                                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                <strong><i class=\"bi bi-hand-thumbs-up-fill text-white\"></i> Correcto!</strong> " . $_GET['correcto'] . " 
                            </div>");
                            }
                            if (isset($_GET["error"])) {
                                print("<div class=\"alert alert-danger\"> 
                                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                <strong><i class=\"bi bi-hand-thumbs-down-fill text-white\"></i> Error!</strong> " . $_GET["error"] . " 
                            </div>");
                            }
                            
                            if($necesitaEmparejamientos == true){
                                print("<div class=\"alert alert-warning\">
                                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                <strong><i class=\"fa-solid fa-triangle-exclamation text-white\"></i> Atencion!</strong>  Esta Liga no aún no tiene generado los Emparejamientos
                                </div>");
                            }
                            ?>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row justify-content-center gap-3 mt-3 align-items-center flex-column flex-md-row">
                                        <div class="mb-5 botonera text-right">
                                            <a href="index.php" class="btn btn-lg btn-primary mr-1 btn-pill font-weight-bolder">
                                                <span class="svg-icon svg-icon-default svg-icon-2x"><i class="fa-solid fa-trophy"></i></span> Ligas
                                            </a>
                                        </div>
                                        <div class="mb-5 botonera text-right">
                                            <a href="../equipos/index.php" class="btn btn-lg btn-primary mr-1 btn-pill font-weight-bolder">
                                                <span class="svg-icon svg-icon-default svg-icon-2x"><i class="fa-solid fa-futbol"></i></span> Equipos
                                            </a>
                                        </div>
                                        <div class="mb-5 botonera text-right">
                                            <a href="../jugadores/index.php" class="btn btn-lg btn-primary mr-1 btn-pill font-weight-bolder">
                                                <span class="svg-icon svg-icon-default svg-icon-2x"><i class="fa-solid fa-person-running"></i></span> Jugadores
                                            </a>
                                        </div>
                                        <div class="mb-5 botonera text-right">
                                            <a href="../usuarios/index.php" class="btn btn-lg btn-primary mr-1 btn-pill font-weight-bolder">
                                                <span class="svg-icon svg-icon-default svg-icon-2x"><i class="fa-solid fa-users"></i></span> Usuarios
                                            </a>
                                        </div>
                                    </div>
                                    <!--begin::Card-->
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header" style="border: none;">
                                            <div class="card-title">
                                                <h2 class="card-label font-weight-bolder">
                                                    Liga: <?php echo $liga_nombre; ?>
                                                </h2>
                                                <div>
                                                    <button class="bg-white border-0 text-center" onclick="mostrarAyuda();"><i class="fa-solid fa-question text-primary"></i></button>
                                                </div>
                                            </div>
                                            <div id="ayudaUsuario" hidden>
                                                <h3>Explicación Botones</h3>
                                                <ol>
                                                    <li>
                                                        <button class="btn btn-lg btn-primary mr-1 btn-pill font-weight-bolder" data-toggle="modal">
                                                            <span class="svg-icon svg-icon-default"><i class="fa-solid fa-plus"></i></span> Inscribir Equipo
                                                        </button>
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                        <h6 class="d-inline">Boton para inscribir a un equipo en esta liga, le podrás insertar el nombre, correo de contacto y jugadores que estén inscritos</h6>
                                                    </li>
                                                    <li>
                                                        <button class="btn btn-lg btn-secondary mr-1 btn-pill font-weight-bolder" data-toggle="modal">
                                                            <span class="svg-icon svg-icon-default"><i class="fa-regular fa-futbol"></i></span> Emparejamientos
                                                        </button>
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                        <h6 class="d-inline">Boton para ver los emparejamientos de la liga, tambien te permite generar automáticamente las jornadas, generarlas SOLO cuado ya esten todos los equipos listos.</h6>
                                                    </li>
                                                    <br>
                                                    <br>
                                                    <li>
                                                        <a class="btn btn-danger btn-pill btn-sm font-weight-bold" data-toggle="modal" data-target="#ModalEliminarLiga">
                                                            <span class="svg-icon svg-icon-white"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                                        <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
                                                                    </g>
                                                                </svg></span> ELIMINAR
                                                        </a>
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                        <h6 class="d-inline">Elimina COMPLETAMENTE el equipo, junto con sus jugadores, además de los usuarios de esos jugadores, tambien borra los partidos en los que participa ese equipo, <span class="text-danger">NO usar si ya se han generado los emparejamientos</span></h6>
                                                    </li>
                                                    <br>
                                                    <li>
                                                        <a class="btn btn-info btn-pill btn-sm font-weight-bold">
                                                            <span class="svg-icon svg-icon-default"><i class="fa-solid fa-magnifying-glass"></i></span> INSPECCIONAR
                                                        </a>
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                        <h6 class="d-inline">Muestra los datos del Equipo y los jugadores que tiene, desde aquí le puedes modificar los datos del equipo además de agregar jugadores y eliminarlos, pero no podras eliminar un jugador si eso hace que no cumpla el numero minimo de jugadores</h6>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="text-right">

                                                        <div class="mb-5 botonera text-right d-inline-block">
                                                            <a href="add-equipo.php?liga_id=<?php echo $liga_id?>" class="btn btn-lg btn-primary btn-pill font-weight-bolder">
                                                                <span class="svg-icon svg-icon-default svg-icon"><i class="fa-solid fa-plus"></i></span> Inscribir Equipo
                                                            </a>
                                                        </div>
                                                        <div class="mb-5 botonera text-right d-inline-block">
                                                            <a href="emparejamientos-liga.php?liga_id=<?php echo $liga_id?>" class="btn btn-lg btn-secondary btn-pill font-weight-bolder">
                                                                <span class="svg-icon svg-icon-default svg-icon"><i class="fa-regular fa-futbol"></i></span> Emparejamientos
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-active" id="TablaEquipos">
                                                            <thead>
                                                                <tr class="">
                                                                    <th data-type="string">NOMBRE EQUIPO</th>
                                                                    <th>CORREO CONTACTO</th>
                                                                    <th data-type="number">PUNTOS</th>
                                                                    <th data-type="number">PJ</th>
                                                                    <th data-type="number">GA</th>
                                                                    <th data-type="number">GC</th>
                                                                    <th data-type="number">JUGADORES INSCRITOS</th>
                                                                    <th class="no-sort"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $sqlEquipos = "SELECT * FROM equipos where id_liga=$liga_id Order by puntos DESC";
                                                                $resEquipos = $conexion->BD_Consulta($sqlEquipos);
                                                                $tuplaEquipos = $conexion->BD_GetTupla($resEquipos);
                                                                while ($tuplaEquipos != NULL) {
                                                                    print("<tr>
                                                                    <td>" . $tuplaEquipos["nombre_equipo"] . "</td>
                                                                    <td>" . $tuplaEquipos["equipo_correo"] . "</td>
                                                                    <td class=\"text-center\">" . $tuplaEquipos["puntos"] . "</td>
                                                                    <td class=\"text-center\">" . $tuplaEquipos["partidos_jugados"] . "</td>
                                                                    <td class=\"text-center\">" . $tuplaEquipos["goles_a_favor"] . "</td>
                                                                    <td class=\"text-center\">" . $tuplaEquipos["goles_en_contra"] . "</td>
                                                                ");
                                                                    $sqlJugadores = "SELECT * from jugadores where id_equipo=" . $tuplaEquipos["id"] . "";
                                                                    $resJugadores = $conexion->BD_Consulta($sqlJugadores);
                                                                    if ($resJugadores == NULL) {
                                                                        $numJugadores = 0;
                                                                    } else {
                                                                        $numJugadores = $conexion->BD_NumeroFilas($resJugadores);
                                                                    }
                                                                    print("<td class=\"text-center\">" . $numJugadores . "</td>");
                                                                    print("<td class=\"text-right\">
                                                                        <a href=\"#\" class=\"btn btn-danger btn-pill btn-sm font-weight-bold\" data-toggle=\"modal\" data-target=\"#ModalEliminarEquipo" . $tuplaEquipos["id"] . "\">
                                                                            <span class=\"svg-icon svg-icon-white\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                                                                        <circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\" r=\"10\" />
                                                                                        <path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\" fill=\"#000000\" />
                                                                                    </g>
                                                                                </svg></span> ELIMINAR
                                                                        </a>
                                                                        <a href=\"mod-equipo.php?equipo_id=" . $tuplaEquipos["id"] . "\" class=\"btn btn-info btn-pill btn-sm font-weight-bold\">
                                                                                <span class=\"svg-icon svg-icon-default\"><i class=\"fa-solid fa-magnifying-glass\"></i></span> INSPECCIONAR
                                                                        </a>
                                                                    </td>
                                                                        <div class=\"modal fade\" id=\"ModalEliminarEquipo" . $tuplaEquipos["id"] . "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"CancelarModal\" aria-hidden=\"true\">
                                                                            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                                                <div class=\"modal-content\">
                                                                                    <div class=\"modal-body\">
                                                                                        Va a eliminar el equipo <strong>" . $tuplaEquipos["nombre_equipo"] . "</strong> y todos los jugadores inscritos en él.<br> ¿Está seguro de que quiere eliminarlo?
                                                                                    </div>
                                                                                    <div class=\"modal-footer\">
                                                                                        <button type=\"button\" class=\"btn btn-light-primary btn-pill font-weight-bold\" data-dismiss=\"modal\">CANCELAR</button>
                                                                                        <a href=\"detalles-liga.php?liga_id=$liga_id&id_equipo_del=" . $tuplaEquipos["id"] . "\" class=\"btn btn-primary btn-pill font-weight-bold\">CONFIRMAR</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </tr>");
                                                                    $tuplaEquipos = $conexion->BD_GetTupla($resEquipos);
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                            </div>
                            <!--end::Dashboard-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                <div class="modal fade" id="NuevaLigaModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Indique el Nombre de la Liga, en caso de ya existir, ingrese una letra correspondiente al grupo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <form class="form" action="./index.php" method="POST">
                                <div class="modal-body row flex-column flex-md-row justify-content-center align-items-center">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label for="nombre_liga">Nombre Liga</label>
                                        <br>
                                        <input type="text" name="nombre_liga" id="nombre_liga" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label for="grupo_liga">Grupo Liga</label>
                                        <br>
                                        <input type="text" maxlength="1" name="grupo_liga" id="grupo_liga">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <p>Ejemplo: Si ya existe "Liga Inventada" inserte "Liga Inventada" y en grupo "B"</p>
                                    <button type="button" class="btn btn-secondary btn-pill mr-2 text-white" data-dismiss="modal">CANCELAR</button>
                                    <input type="submit" class="btn btn-primary btn-pill text-white" value="Añadir Liga">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <script src="../../../build/js/global/plugins.bundle.js"></script>
    <script src="../../../build/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!-- <script src="../../../build/js/bootstrap-datepicker.js"></script> -->
    <script src="//cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
    <script>
        function mostrarAyuda() {
            var ayuda = document.getElementById("ayudaUsuario");

            if (ayuda.hidden) {
                ayuda.hidden = false;
            } else {
                ayuda.hidden = true;
            }
        }
    </script>

    <script>
    $(document).ready(function() {
            tabla = $('#TablaEquipos').DataTable({
                pageLength: 5,
                order: [],
                lengthMenu: [5, 10, 15, 20],
                columnDefs: [{
                    targets: 'no-sort',
                    orderable: false,
                    searchable: false
                },
                {
                    targets: 'column-hid',
                    orderable: false,
                    searchable: true,
                    visible: false
                }],
                language: {
                    url: '../../../build/js/datatables/es-ES.json',
                },
            });
        });
    </script>
</body>

</html>