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
                            if ($error != "") {
                                print("<div class=\"alert alert-danger\"> 
                                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                <strong><i class=\"bi bi-hand-thumbs-down-fill text-white\"></i> Error!</strong> " . $error . " 
                            </div>");
                            }
                            ?>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row justify-content-center gap-3 mt-3 align-items-center flex-column flex-md-row">
                                        <div class="mb-5 botonera text-right">
                                            <a href="../ligas/index.php" class="btn btn-lg btn-primary mr-1 btn-pill font-weight-bolder">
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
                                                    Inscribiendo Jugador Nuevo
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <form class="form" id="formInscripcion" action="add-jugador.php" method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="jugador">
                                                        <div class="modal-body row">
                                                            <div class="form-group col-lg-12 col-sm-12">
                                                                <label for="jugador_nombre">Nombre Jugador</label>
                                                                <input type="text" name="jugador_nombre" id="jugador_nombre" class="form-control h-auto form-control-solid py-4 px-8" require>
                                                            </div>
                                                            <div class="form-group col-lg-12 col-sm-12">
                                                                <label for="jugador_correo">Correo Contacto</label>
                                                                <input type="text" name="jugador_correo" id="jugador_correo" class="form-control h-auto form-control-solid py-4 px-8 correo" require>
                                                            </div>
                                                            <div class="form-group col-lg-12 col-sm-12">
                                                                <label for="jugador_curso">Curso</label>
                                                                <select name="jugador_curso" id="jugador_curso" class="form-select h-auto form-control-solid py-4 mx-3" require>
                                                                <option value="" selected disabled>Selecciona un curso</option>
                                                                <option value="1 ESO">1º ESO</option>
                                                                <option value="2 ESO">2º ESO</option>
                                                                <option value="3 ESO">3º ESO</option>
                                                                <option value="4 ESO">4º ESO</option>
                                                                <option value="1 Bach">1º Bachillerato</option>
                                                                <option value="2 Bach">2º Bachillerato</option>
                                                                <option value="1 SMR">1º SMR</option>
                                                                <option value="2 SMR">2º SMR</option>
                                                                <option value="1 DAW">1º DAW</option>
                                                                <option value="2 DAW">2º DAW</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-lg-12 col-sm-12">
                                                            <label for="jugador_equipo">Equipo</label>
                                                            <select class="form-select h-auto form-control-solid py-4 mx-3" name="jugador_equipo">
                                                            <?php
                                                            $sqlEquipos = "SELECT * FROM equipos";
                                                            $resEquipos = $conexion->BD_Consulta($sqlEquipos);
                                                            $tuplaEquipo = $conexion->BD_GetTupla($resEquipos);
                                                            if($liga_id == 0){
                                                                print("<option value=\"\" selected disabled> Selecciona un Equipo</option>");
                                                            }else{
                                                                print("<option value=\"\" disabled> Selecciona un Equipo</option>");
                                                            }
                                                            while($tuplaEquipo != NULL){
                                                                if($tuplaEquipo["id"] == $liga_id){
                                                                    print("<option value=\"" . $tuplaEquipo["id"] ."\" selected>" . $tuplaEquipo["nombre_equipo"] . "</option>");
                                                                }else{
                                                                    print("<option value=\"" . $tuplaEquipo["id"] ."\">" . $tuplaEquipo["nombre_equipo"] . "</option>");
                                                                }
                                                                $tuplaEquipo = $conexion->BD_GetTupla($resEquipos);
                                                            }
                                                            ?>
                                                            </select>
                                                            </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" onclick="document.location.href='./index.php'" class="text-white btn btn-secondary btn-pill mr-2" data-dismiss="modal">CANCELAR</button>
                                                            <button type="submit" class="btn btn-primary btn-pill text-white">INSCRIBIR JUGADOR</button>
                                                        </div>
                                                    </form>
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