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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
                                        <?php
                                        if($vectorUsuario["rol"] == "AdministradorGeneral"){

                                        print("<div class=\"mb-5 botonera text-right\">
                                            <a href=\"../usuarios/index.php\" class=\"btn btn-lg btn-primary mr-1 btn-pill font-weight-bolder\">
                                                <span class=\"svg-icon svg-icon-default svg-icon-2x\"><i class=\"fa-solid fa-users\"></i></span> Usuarios
                                            </a>
                                        </div>");
                                        }
                                        ?>
                                    </div>
                                    <!--begin::Card-->
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header" style="border: none;">
                                            <div class="card-title">
                                                <h2 class="card-label font-weight-bolder">
                                                    Emparejamiento Liga: <?php echo $liga_nombre; ?>
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
                                                            <span class="svg-icon svg-icon-default"><i class="fa-solid fa-plus"></i></span> Generar Emparejamientos
                                                        </button>
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                        <h6 class="d-inline">Boton para generar los emparejamientos de la liga, solo se podrán generar si no hay emparejamientos generados, esto genera todos los enfrentamientos entre los equipos, aunque la fecha deberas indicarla tu manualmente desde la tabla inferior</h6>
                                                    </li>
                                                    <br>
                                                    <li>
                                                        <a class="btn btn-danger btn-pill btn-sm font-weight-bold" data-toggle="modal" data-target="#ModalEliminarLiga">
                                                            <span class="svg-icon svg-icon-white"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                                        <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
                                                                    </g>
                                                                </svg></span> ELIMINAR EMPAREJAMIENTOS
                                                        </a>
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                        <h6 class="d-inline">Elimina TODOS los emparejamientos de la liga, <strong class="text-danger">No usar una vez empezada la liga, esto es IRREVERSIBLE,</strong>. SOLO elimina los emparejamientos, los resultados y por lo tanto goles y puntos de cada partido se quedan reflejados en la clasificación.</h6>
                                                    </li>
                                                    <br>
                                                    <li>
                                                        <a class="">
                                                            <span class="svg-icon svg-icon-white"><img src="../../../build/assets/img/scoreboard.gif" width="24px" height="24px"></span>
                                                        </a>
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                        <h6 class="d-inline">Este botón solo estará disponible si la fecha del partido ya ha pasado y la fecha del partido ya está indicada (no es "0000-00-00"). Abre una ventana donde podrás indicar el resultado del partido, actualizando automáticamente el marcador de clasificación <strong>Una vez indicado el Resultado, este boton DESAPARECERÁ</strong> y deberas ajustar los goles y los puntos desde el menú de la liga o eliminar el resultado con el otro botón y volver a indicarlo.</h6>
                                                    </li>
                                                    <br>
                                                    <li>
                                                        <a class="btn btn-info btn-pill btn-sm font-weight-bold">
                                                            <span class="svg-icon svg-icon-default"><i class="fa-solid fa-magnifying-glass"></i></span> MODIFICAR
                                                        </a>
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                        <h6 class="d-inline">Sirve para cambiar la fecha del partido, <strong>Recuerda introducir la fecha del partido</strong>.</h6>
                                                    </li>
                                                    <br>
                                                    <li>
                                                        <a class="">
                                                            <span class="svg-icon svg-icon-default"><i class="fa-solid fa-eraser text-danger"></i></span>
                                                        </a>
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                        <h6 class="d-inline">Sirve para resetear el resultado del partido, esto hará como si el partido no se hubiera jugado aún, quitandole tambien los puntos a los equipos que han participado en ese partido y los goles a favor y en contra.</h6>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                <!-- <a href=\"#\" class=\"btn btn-danger btn-pill btn-sm font-weight-bold\" data-toggle=\"modal\" data-target=\"#ModalEliminarEquipo" . $tuplaEquipos["id"] . "\">
                                                                    //         <span class=\"svg-icon svg-icon-white\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                                                    //                 <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                    //                     <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                                                    //                     <circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\" r=\"10\" />
                                                                    //                     <path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\" fill=\"#000000\" />
                                                                    //                 </g>
                                                                    //             </svg></span> ELIMINAR
                                                                    //     </a>
                                                    <div class="text-right"> -->
                                                        <?php
                                                        $sqlComprobacion = "SELECT * FROM emparejamientos where liga_id=$liga_id";
                                                        $resComprobacion = $conexion->BD_Consulta($sqlComprobacion);
                                                        if($conexion->BD_NumeroFilas($resComprobacion) > 1){
                                                        ?>
                                                        <div class="mb-5 botonera text-right d-inline-block">
                                                            <a href="#" class="btn btn-lg btn-danger btn-pill font-weight-bolder" data-toggle="modal" data-target="#ModalEliminarEmparejamientos">
                                                                <span class="svg-icon svg-icon-default svg-icon"><i class="fa-solid fa-trash"></i></span> Eliminar Emparejamientos
                                                            </a>
                                                        </div>
                                                        <div class="modal fade" id="ModalEliminarEmparejamientos" tabindex="-1" role="dialog" aria-labelledby="CancelarModal" aria-hidden="true">
                                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                                             <div class="modal-content">
                                                                 <div class="modal-body">
                                                                     Va los emparejamientos  de <strong>" <?php echo $liga_nombre;?>"</strong><br> ¿Está seguro de que quiere eliminarlo?, NO lo hagas si estas a mitad de la liga;
                                                                 </div>
                                                                 <div class="modal-footer">
                                                                     <button type="button" class="btn btn-light-primary btn-pill font-weight-bold" data-dismiss="modal">CANCELAR</button>
                                                                     <a href="emparejamientos-liga.php?liga_id=<?php echo $liga_id;?>&id_liga_del=<?php echo $liga_id;?>" class="btn btn-primary btn-pill font-weight-bold">CONFIRMAR</a>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                        </div>
                                                        <?php 
                                                        }else{
                                                        ?>
                                                        <div class="mb-5 botonera text-right d-inline-block">
                                                            <a href="emparejamientos-liga.php?liga_id=<?php echo $liga_id;?>&liga_id_emparejamientos=<?php echo $liga_id;?>" class="btn btn-lg btn-primary btn-pill font-weight-bolder">
                                                                <span class="svg-icon svg-icon-default svg-icon"><i class="fa-solid fa-plus"></i></span> Generar Emparejamientos
                                                            </a>
                                                        </div>
                                                        <?php 
                                                        }
                                                        ?>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-active" id="TablaLigas">
                                                            <thead>
                                                                <tr class="">
                                                                    <th class="text-center">JORNADA</th>
                                                                    <th class="text-center">EQUIPO LOCAL</th>
                                                                    <th class="text-center">GOLES LOCAL</th>
                                                                    <th class="text-center">GOLES VISITANTE</th>
                                                                    <th class="text-center">EQUIPO VISITANTE</th>
                                                                    <th class="text-center">FECHA PARTIDO</th>
                                                                    <th class="no-sort"></th>
                                                                    <th class="no-sort"></th>
                                                                    <th class="no-sort"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $sqlEmparejamientos = "SELECT * FROM emparejamientos where liga_id=$liga_id Order by jornada, fecha_partido";
                                                                $resEmparejamientos = $conexion->BD_Consulta($sqlEmparejamientos);
                                                                $tuplaEmparejamiento = $conexion->BD_GetTupla($resEmparejamientos);
                                                                $jornada = 0;
                                                                while ($tuplaEmparejamiento != NULL) {
                                                                    print("<tr>");
                                                                    if ($tuplaEmparejamiento["jornada"] == $jornada) {
                                                                        
                                                                    }else{
                                                                        print("
                                                                        <td class='text-center align-middle' rowspan=". (ceil($totalEquipos/2)) .">" . $tuplaEmparejamiento["jornada"] . "</td>");
                                                                        $jornada = $tuplaEmparejamiento["jornada"];
                                                                    }
                                                                    if ($tuplaEmparejamiento["id_local"] == $tuplaEmparejamiento["id_visitante"]) {
                                                                        $sql = "SELECT * FROM equipos Where id=$tuplaEmparejamiento[id_local]";
                                                                        $resEquipo = $conexion->BD_Consulta($sql);
                                                                        $tuplaEquipo = $conexion->BD_GetTupla($resEquipo);
                                                                        print("<td class='text-center bg-secondary text-light' colspan='4'>" .  $tuplaEquipo["nombre_equipo"] . "</td>
                                                                        <td class='text-center bg-secondary text-light'>DESCANSA</td>
                                                                        <td class='text-center bg-secondary text-light'></td>
                                                                        <td class='text-center bg-secondary text-light'></td>
                                                                        <td class='text-center bg-secondary text-light'></td>
                                                                        ");
                                                                    } else {
                                                                        $sql = "SELECT * FROM equipos where id=$tuplaEmparejamiento[id_local]";
                                                                        $resEquipo = $conexion->BD_Consulta($sql);
                                                                        $tuplaEquipo = $conexion->BD_GetTupla($resEquipo);
                                                                        print("
                                                                        <td class='text-center'>" . $tuplaEquipo["nombre_equipo"] . "</td>
                                                                        <td class='text-center'>" . $tuplaEmparejamiento["goles_local"] . "</td>
                                                                        <td class='text-center'>" . $tuplaEmparejamiento["goles_visitante"] . "</td>");
                                                                        $sql = "SELECT * FROM equipos where id=$tuplaEmparejamiento[id_visitante]";
                                                                        $resEquipo = $conexion->BD_Consulta($sql);
                                                                        $tuplaEquipo2 = $conexion->BD_GetTupla($resEquipo);
                                                                        print("
                                                                        <td class='text-center'>" . $tuplaEquipo2["nombre_equipo"] . "</td>
                                                                        <td class='text-center'>" . $tuplaEmparejamiento["fecha_partido"] . "</td>
                                                                        ");
                                                                        if($tuplaEmparejamiento["fecha_partido"] <= date("Y-m-d") && $tuplaEmparejamiento["fecha_partido"] != "0000-00-00" && $tuplaEmparejamiento['resultado'] != true){

                                                                        print("<td class=\"text-center\"><span class=\"mb-1 d-block mb-1 fs-7\"><a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_mod_resultado_" . $tuplaEmparejamiento['id'] . "\" data-toggle=\"tooltip\" data-bs-original-title=\"Indicar Resultado\"><span class=\"svg-icon svg-icon-white\"><img src=\"../../../build/assets/img/scoreboard.gif\" width=\"24px\" height=\"24px\"></span></a></span></td>");
                                                                        }else{
                                                                            print("<td></td>");
                                                                        }
                                                                        print("<td class=\"text-center\"><span class=\"btn btn-info btn-pill btn-sm font-weight-bold text-white\"><a href=\"#\" class=\"text-white\"data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_mod_fecha_" . $tuplaEmparejamiento['id'] . "\" data-toggle=\"tooltip\" data-bs-original-title=\"Modificar Fecha\">
                                                            <span class=\"svg-icon svg-icon-default text-white\"><i class=\"fa-solid fa-magnifying-glass\"></i></span> MODIFICAR
                                                        </a></span></td>");
                                                        if($tuplaEmparejamiento['resultado'] == true){
                                                        print("
                                                        <td class=\"text-center\"><span class=\"mb-1 d-block mb-1 fs-7\">
                                                                <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_del_emparejamiento_" . $tuplaEmparejamiento['id'] . "\" data-toggle=\"tooltip\" data-bs-original-title=\"Eliminar Resultado\">
                                                                    <span class=\"svg-icon svg-icon-primary svg-icon-2\">
                                                                    <i class=\"fa-solid fa-eraser text-danger\"></i>
                                                                    </span>
                                                                </a>
                                                            </span></td>");
                                                        }else{
                                                            print("<td></td>");
                                                        }
                                                                        print("</tr>");
                                                                        $imprime_modales .= "<div class=\"modal fade\" id=\"kt_modal_mod_fecha_" . $tuplaEmparejamiento['id'] . "\" tabindex=\"-1\" aria-hidden=\"true\">
                                                        <!--begin::Modal dialog-->
                                                        <div class=\"modal-dialog modal-dialog-centered mw-900px\">
                                                            <!--begin::Modal content-->
                                                            <div class=\"modal-content\">
                                                                <!--begin::Modal header-->
                                                                <div class=\"modal-header\">
                                                                    <!--begin::Modal title-->
                                                                    <h2>Modificar Fecha Partido</h2>
                                                                    <!--end::Modal title-->
                                                                    <!--begin::Close-->
                                                                    <div class=\"btn btn-sm btn-icon btn-active-color-primary\" data-bs-dismiss=\"modal\">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                        <span class=\"svg-icon svg-icon-1\">
                                                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                                                                    <rect opacity=\"0.5\" x=\"6\" y=\"17.3137\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-45 6 17.3137)\" fill=\"currentColor\" />
                                                                                    <rect x=\"7.41422\" y=\"6\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(45 7.41422 6)\" fill=\"currentColor\" />
                                                                                </svg>
                                                                            </span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Close-->
                                                                </div>
                                                                <!--end::Modal header-->
                                                                <!--begin::Modal body-->
                                                                <div class=\"modal-body p-1\">
                                                
                                                                    <form autocomplete=\"off\" class=\"mx-auto w-100 p-7\" method=\"POST\" action=\"./emparejamientos-liga.php?liga_id=" . $liga_id . "\" enctype=\"multipart/form-data\">
                                                                        <input type=\"hidden\" name=\"aux_fecha_mod\" value=\"" . $tuplaEmparejamiento['id'] . "\">
                    
                                                                        <div class=\"card\">
                                                
                                                                            <div class=\"card-body px-0\">
                                                
                                                                                <!--begin::Tab Content-->
                                                                                <div class=\"tab-content\">
                                                                                    <!--begin::Tab panel-->
                                                                                    <div id=\"\" class=\"row p-0\">
                                                                                                <div class=\"col-xl-12\">
                                                
                                                                                                    <!--begin::Input group-->
                                                                                                    <div class=\"fv-row mb-5\">
                                                                                                        <!--begin::Label-->
                                                                                                        <label class=\"form-label required\">Fecha Partido</label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--begin::Input-->
                                                                                                        <input type=\"date\" name=\"fecha_mod\" class=\"form-control form-control-lg form-control-color w-100\" value=\"" . $tuplaEmparejamiento['fecha_partido'] ."\" required/>
                                                                                                        <!--end::Input-->
                                                                                                    </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                                <!--end::Tab Content-->
                                                                            </div>
                                                
                                                                            <div class=\"\" style=\"text-align: right;\">
                                                                                <button type=\"reset\" data-toggle=\"dismiss-modal\" data-bs-dismiss=\"modal\" class=\"btn btn-light me-3\">Cancelar</button>
                                                                                <button type=\"submit\" id=\"\" class=\"btn btn-primary\">
                                                                                    <span class=\"indicator-label\">Guardar</span>
                                                                                </button>
                                                                            </div>
                                                
                                                                            <!--end::Card body-->
                                                                        </div>
                                                                    </form>
                                                
                                                                </div>
                                                                <!--end::Modal body-->
                                                            </div>
                                                            <!--end::Modal content-->
                                                        </div>
                                                        <!--end::Modal dialog-->
                                                    </div>";
                                                                        $imprime_modales .= "<div class=\"modal fade\" id=\"kt_modal_mod_resultado_" . $tuplaEmparejamiento['id'] . "\" tabindex=\"-1\" aria-hidden=\"true\">
                                                        <!--begin::Modal dialog-->
                                                        <div class=\"modal-dialog modal-dialog-centered mw-900px\">
                                                            <!--begin::Modal content-->
                                                            <div class=\"modal-content\">
                                                                <!--begin::Modal header-->
                                                                <div class=\"modal-header\">
                                                                    <!--begin::Modal title-->
                                                                    <h2>Dar Resultado del partido</h2>
                                                                    <!--end::Modal title-->
                                                                    <!--begin::Close-->
                                                                    <div class=\"btn btn-sm btn-icon btn-active-color-primary\" data-bs-dismiss=\"modal\">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                        <span class=\"svg-icon svg-icon-1\">
                                                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                                                                    <rect opacity=\"0.5\" x=\"6\" y=\"17.3137\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-45 6 17.3137)\" fill=\"currentColor\" />
                                                                                    <rect x=\"7.41422\" y=\"6\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(45 7.41422 6)\" fill=\"currentColor\" />
                                                                                </svg>
                                                                            </span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Close-->
                                                                </div>
                                                                <!--end::Modal header-->
                                                                <!--begin::Modal body-->
                                                                <div class=\"modal-body p-1\">
                                                
                                                                    <form autocomplete=\"off\" class=\"mx-auto w-100 p-7\" method=\"POST\" action=\"./emparejamientos-liga.php?liga_id=" . $liga_id . "\" enctype=\"multipart/form-data\">
                                                                        <input type=\"hidden\" name=\"aux_resultado_mod\" value=\"" . $tuplaEmparejamiento['id'] . "\">
                                                                        <input type=\"hidden\" name=\"aux_resultado_local_mod\" value=\"" . $tuplaEmparejamiento['id_local'] . "\">
                                                                        <input type=\"hidden\" name=\"aux_resultado_visitante_mod\" value=\"" . $tuplaEmparejamiento['id_visitante'] . "\">
                    
                                                                        <div class=\"card\">
                                                
                                                                            <div class=\"card-body px-0\">
                                                
                                                                                <!--begin::Tab Content-->
                                                                                <div class=\"tab-content\">
                                                                                    <!--begin::Tab panel-->
                                                                                    <div id=\"\" class=\"row p-0\">
                                                                                                <div class=\"col-xl-6\">
                                                
                                                                                                    <!--begin::Input group-->
                                                                                                    <div class=\"fv-row mb-5\">
                                                                                                        <!--begin::Label-->
                                                                                                        <label class=\"form-label required\">Goles " . $tuplaEquipo['nombre_equipo'] ."</label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--begin::Input-->
                                                                                                        <input type=\"number\" min=\"0\" name=\"goles_local_mod\" class=\"form-control form-control-lg form-control-color w-100\" value=\"" . $tuplaEmparejamiento['goles_local'] ."\" required/>
                                                                                                        <!--end::Input-->
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class=\"col-xl-6\">
                                                
                                                                                                    <!--begin::Input group-->
                                                                                                    <div class=\"fv-row mb-5\">
                                                                                                        <!--begin::Label-->
                                                                                                        <label class=\"form-label required\">Goles " . $tuplaEquipo2['nombre_equipo'] ."</label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--begin::Input-->
                                                                                                        <input type=\"number\" min=\"0\" name=\"goles_visitante_mod\" class=\"form-control form-control-lg form-control-color w-100\" value=\"" . $tuplaEmparejamiento['goles_visitante'] ."\" required/>
                                                                                                        <!--end::Input-->
                                                                                                    </div>
                                                                                                </div>
                                                                                                </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Tab Content-->
                                                                            </div>
                                                
                                                                            <div class=\"\" style=\"text-align: right;\">
                                                                                <button type=\"reset\" data-toggle=\"dismiss-modal\" data-bs-dismiss=\"modal\" class=\"btn btn-secondary me-3\">Cancelar</button>
                                                                                <button type=\"submit\" id=\"\" class=\"btn btn-primary\">
                                                                                    <span class=\"indicator-label\">Guardar</span>
                                                                                </button>
                                                                            </div>
                                                
                                                                            <!--end::Card body-->
                                                                        </div>
                                                                    </form>
                                                
                                                                </div>
                                                                <!--end::Modal body-->
                                                            </div>
                                                            <!--end::Modal content-->
                                                        </div>
                                                        <!--end::Modal dialog-->
                                                    </div>";
                                                    $imprime_modales .= "<div class=\"modal fade\" id=\"kt_modal_del_emparejamiento_" . $tuplaEmparejamiento['id'] . "\" tabindex=\"-1\" aria-hidden=\"true\">
                                                        <!--begin::Modal dialog-->
                                                        <div class=\"modal-dialog modal-lg modal-dialog-centered mw-900px\">
                                                            <!--begin::Modal content-->
                                                            <div class=\"modal-content\">
                                                                <!--begin::Modal header-->
                                                                <div class=\"modal-header\">
                                                                    <!--begin::Modal title-->
                                                                    <h2>Modificar Fecha Partido</h2>
                                                                    <!--end::Modal title-->
                                                                    <!--begin::Close-->
                                                                    <div class=\"btn btn-sm btn-icon btn-active-color-primary\" data-bs-dismiss=\"modal\">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                        <span class=\"svg-icon svg-icon-1\">
                                                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                                                                    <rect opacity=\"0.5\" x=\"6\" y=\"17.3137\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-45 6 17.3137)\" fill=\"currentColor\" />
                                                                                    <rect x=\"7.41422\" y=\"6\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(45 7.41422 6)\" fill=\"currentColor\" />
                                                                                </svg>
                                                                            </span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Close-->
                                                                </div>
                                                                <!--end::Modal header-->
                                                                <!--begin::Modal body-->
                                                                <div class=\"modal-body p-1\">
                                                
                                                                    <form autocomplete=\"off\" class=\"mx-auto w-100 p-7\" method=\"POST\" action=\"./emparejamientos-liga.php?liga_id=" . $liga_id . "\" enctype=\"multipart/form-data\">
                                                                        <input type=\"hidden\" name=\"aux_emparejamiento_del\" value=\"" . $tuplaEmparejamiento['id'] . "\">
                                                                        <input type=\"hidden\" name=\"aux_emparejamiento_del_goles_local\" value=\"" . $tuplaEmparejamiento['goles_local'] . "\">
                                                                        <input type=\"hidden\" name=\"aux_emparejamiento_del_goles_visitante\" value=\"" . $tuplaEmparejamiento['goles_visitante'] . "\">
                                                                        <input type=\"hidden\" name=\"aux_emparejamiento_del_id_local\" value=\"" . $tuplaEmparejamiento['id_local'] . "\">
                                                                        <input type=\"hidden\" name=\"aux_emparejamiento_del_id_visitante\" value=\"" . $tuplaEmparejamiento['id_visitante'] . "\">
                    
                                                                        <div class=\"card\">
                                                
                                                                            <div class=\"card-body px-0\">
                                                
                                                                                <!--begin::Tab Content-->
                                                                                <div class=\"tab-content\">
                                                                                <h4>Vas a reiniciar el resultado de este emparejamiento \"" . $tuplaEquipo["nombre_equipo"] ." " . $tuplaEmparejamiento["goles_local"] . " - " . $tuplaEmparejamiento["goles_visitante"] . " " . $tuplaEquipo2["nombre_equipo"] . "\", esto influirá tambien en la clasificación de la liga</h4>
                                                                                    <!--begin::Tab panel-->
                                                                                    
                                                                                </div>
                                                                                </div>
                                                                                <!--end::Tab Content-->
                                                                            </div>
                                                
                                                                            <div class=\"\" style=\"text-align: right;\">
                                                                                <button type=\"reset\" data-toggle=\"dismiss-modal\" data-bs-dismiss=\"modal\" class=\"btn btn-light me-3\">Cancelar</button>
                                                                                <button type=\"submit\" id=\"\" class=\"btn btn-primary\">
                                                                                    <span class=\"indicator-label\">Eliminar</span>
                                                                                </button>
                                                                            </div>
                                                
                                                                            <!--end::Card body-->
                                                                        </div>
                                                                    </form>
                                                
                                                                </div>
                                                                <!--end::Modal body-->
                                                            </div>
                                                            <!--end::Modal content-->
                                                        </div>
                                                        <!--end::Modal dialog-->
                                                    </div>";
                                                                    }
                                                                    $tuplaEmparejamiento = $conexion->BD_GetTupla($resEmparejamientos);
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                        <button type="button" onclick="document.location.href='./detalles-liga.php?liga_id=<?php echo $liga_id ?>'" class="text-white btn btn-secondary btn-pill mr-2" data-dismiss="modal">CANCELAR</button>
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
                <?php print($imprime_modales);?>


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
</body>

</html>