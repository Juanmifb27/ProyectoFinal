<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración Liga</title>
    <script src="https://kit.fontawesome.com/43cf8b4b5b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link rel="stylesheet" href="../../../build/css/styles.css"> -->
    <link href="../../../build/js/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="../../../build/css/style.bundle.css" rel="stylesheet" type="text/css" /> 
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
                                                <h2 class="card-label font-weight-bolder w-100">
                                                    Modificando Equipo: <?php echo $equipo_nombre; ?>
                                                </h2>
                                            </div>
                                                <img style="float:right;" class="m-7" width="75" height="75" src="../../../build/assets/img/equipos/<?php echo $equipo_imagen;?> ">
                                        </div>


                                    <div class="card-body pt-5 pb-5">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active bg-white" id="datosEquipo-tab" data-bs-toggle="tab" data-bs-target="#datosEquipo-tab-pane" type="button" role="tab" aria-controls="datosEquipo-tab-pane" aria-selected="true">Datos Equipo</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link bg-light" id="jugadores-tab" data-bs-toggle="tab" data-bs-target="#jugadores-tab-pane" type="button" role="tab" aria-controls="jugadores-tab-pane" aria-selected="false">Jugadores</button>
                </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="datosEquipo-tab-pane" role="tabpanel" aria-labelledby="datosEquipo-tab" tabindex="0"><div class="row">
                                     <div class="col-lg-12 col-md-12 col-sm-12">
                                         <form class="form" action="mod-equipo.php?equipo_id=<?php echo $equipo_id;?>" method="post" enctype="multipart/form-data">
                                             <input type="hidden" name="aux_DatosEquipo">
                                             <input type="hidden" name="aux_Imagen" value="<?php echo $equipo_imagen;?>">
                                             <div class="modal-body row">
                                                 <div class="form-group col-lg-6 col-sm-6">
                                                     <label for="equipo_nombre">Nombre Equipo</label>
                                                     <input type="text" name="equipo_nombre" id="equipo_nombre" class="form-control h-auto form-control-solid py-4 px-8" value="<?php echo $equipo_nombre; ?>" require>
                                                 </div>
                                                 <div class="form-group col-lg-6 col-sm-6">
                                                     <label for="equipo_correo">Correo Contacto</label>
                                                     <input type="text" name="equipo_correo" id="equipo_correo" class="form-control h-auto form-control-solid py-4 px-8" value="<?php echo $equipo_correo; ?>" require>
                                                 </div>
                                                 <div class="form-group col-lg-6 col-sm-6">
                                                     <label for="equipo_imagen">Escudo Equipo</label>
                                                     <input type="file" name="equipo_imagen" id="equipo_imagen" class="form-control h-auto form-control-solid py-4 px-8" accept="image/*" require>
                                                     <label for="imagen_default">Quitar Imagen</label>
                                                     <input type="checkbox" id="imagen_default" name="imagen_default" value="1">
                                                 </div>
                                                 <div class="form-group col-lg-6 col-sm-6">
                                                     <label for="equipo_puntos">Puntos</label>
                                                     <input type="number" min="0" name="equipo_puntos" id="equipo_puntos" class="form-control h-auto form-control-solid py-4 px-8" value="<?php echo $equipo_puntos; ?>" require>
                                                 </div>
                                                 <div class="form-group col-lg-6 col-sm-6">
                                                     <label for="equipo_partidos_jugados">Partidos Jugados</label>
                                                     <input type="number" min="0" name="equipo_partidos_jugados" id="equipo_partidos_jugados" class="form-control h-auto form-control-solid py-4 px-8" value="<?php echo $equipo_partidos_jugados; ?>" require>
                                                 </div>
                                                 <div class="form-group col-lg-6 col-sm-6">
                                                     <label for="equipo_goles_a_favor">Goles a favor</label>
                                                     <input type="number" min="0" name="equipo_goles_a_favor" id="equipo_goles_a_favor" class="form-control h-auto form-control-solid py-4 px-8" value="<?php echo $equipo_goles_a_favor; ?>" require>
                                                 </div>
                                                 <div class="form-group col-lg-6 col-sm-6">
                                                     <label for="equipo_goles_en_contra">Goles en contra</label>
                                                     <input type="number" min="0" name="equipo_goles_en_contra" id="equipo_goles_en_contra" class="form-control h-auto form-control-solid py-4 px-8" value="<?php echo  $equipo_goles_en_contra; ?>" require>
                                                 </div>
                                                 <div class="form-group col-lg-6 col-sm-6">
                                                     <label for="liga_nombre">Liga del Equipo</label>
                                                     <input type="text" name="liga_nombre" id="liga_nombre" class="form-control h-auto form-control-solid py-4 px-8" value="<?php echo $equipo_liga; ?>" disabled>
                                                 </div>
                                             </div>
                                             <div class="modal-footer">
                                                 <button type="button" onclick="document.location.href='./index.php'" class="text-white btn btn-secondary btn-pill mr-2" data-dismiss="modal">CANCELAR</button>
                                                 <button type="submit" class="btn btn-primary btn-pill text-white">GUARDAR</button>
                                             </div>
                                         </form>
                                     </div>
                                 </div></div>
                                <div class="tab-pane fade" id="jugadores-tab-pane" role="tabpanel" aria-labelledby="jugadores-tab" tabindex="0">

                                <?php
                                    $sqlJugadores = "Select * from jugadores, usuarios, equipos, ligas where jugadores.id_equipo=$equipo_id and jugadores.id=usuarios.id_jugador and jugadores.id_equipo=equipos.id and equipos.id_liga=ligas.id";
                                    $resJugadores = $conexion->BD_Consulta($sqlJugadores);
                                    $tuplaJugadores = $conexion->BD_GetTupla($resJugadores);
                                ?>
                                        <div class="row">
                                        
                                            <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                                    <div class="mb-5 botonera text-right">
                                                        <button class="btn btn-lg btn-primary mr-1 btn-pill font-weight-bolder" data-toggle="modal" data-target="#NuevoJugadorModal">
                                                            <span class="svg-icon svg-icon-default"><i class="fa-solid fa-plus"></i></span> Añadir Jugador
                                                    </div>
                                                </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">

                                                <table id="TablaJugadores" class="table">
                                                    <thead>
                                                    <tr>
                                                         <th class="text-dark">Nombre</th>
                                                         <th class="text-dark">Email</th>
                                                         <th class='no-sort'></th>
                                                         <th class='no-sort'></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    while($tuplaJugadores != NULL){
                                                        print("<tr>
                                                        <td>" . $tuplaJugadores["jugador_nombre"] . "</td>
                                                        <td>" . $tuplaJugadores["email"] . "</td>
                                                        <td><a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#ModJugadorModal_" . $tuplaJugadores["id_jugador"] . "\"><i class=\"fa-solid fa-user-pen\"></i></a> </td>
                                                        <td class=\"text-center pe-3\">
                                                            <span class=\"mb-1 d-block mb-1 fs-7\">
                                                                <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_del_jugador_" . $tuplaJugadores['id_jugador'] . "\" data-toggle=\"tooltip\" data-bs-original-title=\"Eliminar\">
                                                                    <span class=\"svg-icon svg-icon-primary svg-icon-xl-2\">
                                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24\" width=\"24\" viewBox=\"0 0 576 512\">
                                                                    <path fill=\"#e20808\" d=\"M576 128c0-35.3-28.7-64-64-64L205.3 64c-17 0-33.3 6.7-45.3 18.7L9.4 233.4c-6 6-9.4 14.1-9.4 22.6s3.4 16.6 9.4 22.6L160 429.3c12 12 28.3 18.7 45.3 18.7L512 448c35.3 0 64-28.7 64-64l0-256zM271 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z\"/>
                                                                    </svg>
                                                                    </span>
                                                                </a>
                                                            </span>
                                                        </td>
                                                        </tr>");
                                                        $imprime_modal .="            <div class=\"modal fade\" id=\"ModJugadorModal_" . $tuplaJugadores["id_jugador"] ."\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-xl modal-dialog-centered\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modificando Jugador</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <i aria-hidden=\"true\" class=\"ki ki-close\"></i>
                                </button>
                            </div>
                            <form class=\"form\" action=\"mod-equipo.php?equipo_id=" . $tuplaJugadores["id_equipo"] . "\" method=\"POST\">
                                <input type=\"hidden\" name=\"aux_modJugador\" value=\"" . $tuplaJugadores["id_jugador"] . "\">
                                <input type=\"hidden\" name=\"aux_modJugador_liga\" value=\"" . $tuplaJugadores["id_liga"] . "\">
                                <div class=\"modal-body row flex-column flex-md-row justify-content-center align-items-center\">
                                    <div class=\"form-group col-lg-4\">
                                        <label for=\"nombre_jugador\">Nombre <span class=\"text-danger\">*</span></label>
                                        <input type=\"text\" class=\"form-control form-control-xl\" name=\"nombre_jugador\" value=\"" . $tuplaJugadores["jugador_nombre"] . "\" required>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label for=\"email_jugador\">Email <span class=\"text-danger\">*</span></label>
                                        <input type=\"text\" class=\"form-control form-control-xl\" name=\"email_jugador\" value=\"" . $tuplaJugadores["email"] . "\" required>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label for=\"equipo_jugador\">Equipo</label>
                                        <input type=\"text\" class=\"form-control form-control-xl\" name=\"equipo_jugador\" value=\"" . $tuplaJugadores["nombre_equipo"] . "\" readonly >
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label for=\"equipo_jugador\">Curso</label>
                                        <input type=\"text\" class=\"form-control form-control-xl\" name=\"jugador_curso\" value=\"" . $tuplaJugadores["jugador_curso"] . "\" required >
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label for=\"equipo_jugador\">Liga</label>
                                        <input type=\"text\" class=\"form-control form-control-xl\" name=\"jugador_liga\" value=\"" . $tuplaJugadores["nombre_liga"] . "\" readonly >
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary btn-pill mr-2 text-white\" data-dismiss=\"modal\">CANCELAR</button>
                                    <input type=\"submit\" class=\"btn btn-primary btn-pill text-white\" value=\"Modificar\">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"modal fade\" id=\"kt_modal_del_jugador_" . $tuplaJugadores["id_jugador"] . "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"CancelarModal\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-body\">
                                                                    Va a eliminar al Jugador <strong>" . $tuplaJugadores["jugador_nombre"] . "</strong>.<br> ¿Está seguro de que quiere eliminarlo?
                                                                </div>
                                                                <div class=\"modal-footer\" style=\"text-align: right;\">
                                                                                <button type=\"reset\" data-toggle=\"dismiss-modal\" data-bs-dismiss=\"modal\" class=\"btn btn-light me-3\">Cancelar</button>
                                                                                <a href=\"mod-equipo.php?equipo_id=" . $equipo_id . "&id_jugador_del=" . $tuplaJugadores["id_jugador"] . "\" class=\"btn btn-danger btn-pill font-weight-bold\">CONFIRMAR</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                ";
                                                        $tuplaJugadores = $conexion->BD_GetTupla($resJugadores);
                                                    }
                                                    ?>
                                                         </tbody>
                                                     </table>
                                                 </div>
                                             </div>
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
            </div>
            
             <div class="modal fade" id="NuevoJugadorModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Añadir Jugador al equipo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <form class="form" action="./mod-equipo.php?equipo_id=<?php echo $equipo_id ?>" method="POST">
                            <input type="hidden" name="aux_nuevoJugador" value="<?php echo $equipo_id_liga;?>">
                                <div class="modal-body row flex-column flex-md-row justify-content-center align-items-center">
                                    <div class="form-group col-lg-4 col-sm-4">
                                        <label for="nombre_jugador">Nombre</label>
                                        <br>
                                        <input type="text" name="nombre_jugador" class="form-control form-control-lg form-control-color w-100" id="nombre_jugador" required>
                                    </div>
                                    <div class="form-group col-lg-4 col-sm-4">
                                        <label for="correo_jugador">Correo</label>
                                        <br>
                                        <input type="email" name="correo_jugador" id="correo_jugador" class="form-control form-control-lg form-control-color w-100">
                                    </div>
                                    <div class="form-group col-lg-4 col-sm-4">
                                        <label for="curso_jugador">Curso</label>
                                        <br>
                                        <select name="curso_jugador" id="curso_jugador" class="form-select form-select-lg form-select-color w-100">
                                        <option value="" selected disabled>Selecciona un curso</option>
                                        <option value="1 ESO">1º ESO</option>
                                        <option value="2 ESO">2º ESO</option>
                                        <option value="3 ESO">3º ESO</option>
                                        <option value="4 ESO">4º ESO</option>
                                        <option value="1 Bach">1º Bachillerato</option>
                                        <option value="1 Bach">2º Bachillerato</option>
                                        <option value="1 SMR">1º SMR</option>
                                        <option value="2 SMR">2º SMR</option>
                                        <option value="1 DAW">1º DAW</option>
                                        <option value="2 DAW">2º DAW</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <p class="col-12">El usuario del jugador se creará automáticamente</p>
                                    <button type="button" class="btn btn-secondary btn-pill mr-2 text-white" data-dismiss="modal">CANCELAR</button>
                                    <input type="submit" class="btn btn-primary btn-pill text-white" value="Añadir Jugador">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            <?php print($imprime_modal);?>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <script src="../../../build/js/global/plugins.bundle.js"></script>
    <script src="../../../build/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <script src="../../../build/js/bootstrap-datepicker.js"></script>
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
            tabla = $('#TablaJugadores').DataTable({
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

    //         $('.filtro').on('change keyup', function() {
    //         var val = [];
    //         val.push($("#searchInput").val());
    //         if ($('#provinciaInput').val() == "Todas") {
    //             val.push("");
    //         } else {
    //             val.push($('#provinciaInput').val());
    //         }
    //         if ($('#aceptadoInput').val() == "Todos") {
    //             val.push("");
    //         } else {
    //             val.push($('#aceptadoInput').val());
    //         }
    //         if ($('#cobradoInput').val() == "Todos") {
    //             val.push("");
    //         } else {
    //             val.push($('#cobradoInput').val());
    //         }
    //         if ($('#estadoInput').val() == "Todos") {
    //             val.push("");
    //         } else {
    //             val.push($('#estadoInput').val());
    //         }
    //         tabla.columns('.busqueda').data().search(val.join(' '), false, true, true).draw();

    //     })
        });
    </script>
</body>
</html>