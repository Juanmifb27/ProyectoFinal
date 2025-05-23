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
    <link href="../../../build/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="../../../build/css/styles.css"> -->
    <link href="../../../build/js/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="//cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed">

    <div id="header" class="header-mobile align-items-center header-mobile-fixed">
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
            <div class="d-flex flex-column flex-row-fluid wrapper" id="wrapper">
                <!--begin::Header-->
                <div id="header" class="header header-fixed header-light">
                    <!--begin::Container-->
                    <div class="container d-flex align-items-stretch justify-content-between">
                        <!--begin::Header Menu Wrapper-->
                        <div class="header-menu-wrapper header-menu-wrapper-left" id="header_menu_wrapper">
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
                <div class="content d-flex flex-column flex-column-fluid" id="content">
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
                                                    Usuarios
                                                </h2>
                                                <div>
                                                    <button class="bg-white border-0 text-center" onclick="mostrarAyuda();"><i class="fa-solid fa-question text-primary"></i></button>
                                                </div>
                                            </div>
                                            <div id="ayudaUsuario" class="col-12" hidden>
                                                <h3>Explicación Botones</h3>
                                                <ol>
                                                    <li>
                                                        <button class="btn btn-lg btn-primary mr-1 btn-pill font-weight-bolder" data-toggle="modal">
                                                            <span class="svg-icon svg-icon-default"><i class="fa-solid fa-plus"></i></span> Añadir Usuario
                                                        </button>
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                        <h6 class="d-inline">Boton para añadir un Usuario, puedes añadir tanto usuarios normales(jugadores) como usuarios administradores</h6>
                                                    </li>
                                                    <br>
                                                    <li>
                                                        <a class="btn btn-primary btn-pill btn-sm font-weight-bold">
                                                            <span class="svg-icon svg-icon-white"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1" />
                                                                    </g>
                                                                </svg></span> EDITAR
                                                        </a>
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                        <h6 class="d-inline">Sirve para editar informacion sobre el usuario.</h6>
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
                                                                </svg></span> ELIMINAR
                                                        </a>
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                        <h6 class="d-inline">Elimina COMPLETAMENTE el usuario, en caso de ser un usuario jugador, se eliminará tambien al jugador del equipo asociado</h6>
                                                    </li>
                                                    <br>
                                                    <li>
                                                        <a class=">
                                                            <span class="svg-icon svg-icon-default"><i class="fa-solid fa-paper-plane text-dark"></i></span>
                                                        </a>
                                                        <i class="fa-solid fa-arrow-right text-dark"></i>
                                                        <h6 class="d-inline">Puedes enviar un mensaje al correo asociado a ese usuario, con asunto, cuerpo y archivo.</h6>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="mb-5 botonera text-right">
                                                        <a class="btn btn-lg btn-primary mr-1 btn-pill font-weight-bolder" href="#" data-bs-toggle="modal" data-bs-target="#ModalAddUsuario">
                                                            <span class="svg-icon svg-icon-default"><i class="fa-solid fa-plus"></i></span> Añadir Usuario
                                                        </a>
                                                    </div>
                                                </div>

                                        <div class="modal fade" id="ModalAddUsuario" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Añadir Usuario</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <form class="form" action="index.php" method="POST">
                                <input type="hidden" name="aux_Usuario">
                                <div class="modal-body row flex-column flex-md-row justify-content-center align-items-center">
                                    <div class="form-group col-lg-4">
                                        <label for="usuario_email">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control form-control-xl" name="usuario_email" required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="usuario_password">Password <span class="text-danger">*</span> <span ><i onclick="togglePassword(0, this)" class="fa-solid fa-lock text-primary"></i></span></label>
                                        <input type="password" class="form-control form-control-xl" id="password-0" name="usuario_password" required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="usuario_rol">Permisos <span class="text-danger">*</span></label>
                                        <select name="usuario_rol" id="usuario_rol" class="form-select form-select-xl w-100">
                                        <option value="Usuario">Usuario</option>
                                        <option value="AdministradorGeneral">Administrador General</option>
                                        <option value="AdministradorLigas">Administrador Ligas</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-4" id="divNombre" style="display: block;">
                                        <label for="usuario_nombre">Nombre<span class="text-danger">*</span></label>
                                        <input type="text" id="usuario_nombre" name="usuario_nombre" class="form-control form-control-xl" required>
                                    </div>
                                    <div class="form-group col-lg-4" id="divCurso" style="display: block;">
                                        <label for="usuario_curso">Curso <span class="text-danger">*</span></label>
                                        <select name="usuario_curso" id="usuario_curso" class="form-select form-select-xl w-100" required>
                                        <option value="" disabled selected>Selecciona un curso</option>
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
                                    <div class="form-group col-lg-4" id="divEquipo" style="display: block;">
                                        <label for="usuario_equipo">Equipo <span class="text-danger">*</span></label>
                                        <select name="usuario_equipo" id="usuario_equipo" class="form-select form-select-xl w-100" required>
                                        <option value="" disabled selected>Selecciona un curso</option>
                                        <?php 
                                        $sqlEquipo = "SELECT * FROM equipos";
                                        $resEquipo = $conexion->BD_Consulta($sqlEquipo);
                                        $tuplaEquipo = $conexion->BD_GetTupla($resEquipo);
                                        while($tuplaEquipo != NULL){
                                            print("<option value=\"" . $tuplaEquipo["id"] . "\">" . $tuplaEquipo["nombre_equipo"] . "</option>");
                                            $tuplaEquipo = $conexion->BD_GetTupla($resEquipo);
                                        }
                                        
                                        ?>
                                        </select>
                                    </div>


                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-pill mr-2 text-white" data-bs-dismiss="modal">CANCELAR</button>
                                    <input type="submit" class="btn btn-primary btn-pill text-white" value="Añadir">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-active align-middle gs-0 gy-4" id="TablaUsuarios">
                                                            <thead>
                                                                <tr class="">
                                                                    <th data-type="string">CORREO</th>
                                                                    <th data-type="string">ROL</th>
                                                                    <th data-type="string">CURSO</th>
                                                                    <th data-type="string">LIGA</th>
                                                                    <th data-type="string">EQUIPO</th>
                                                                    <th class="no-sort"></th>
                                                                    <th class="no-sort"></th>
                                                                    <th class="no-sort"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $sqlUsuario = "SELECT * from usuarios";
                                                                $resUsuario = $conexion->BD_Consulta($sqlUsuario);
                                                                $tuplaUsuario = $conexion->BD_GetTupla($resUsuario);
                                                                while ($tuplaUsuario != NULL) {
                                                                    print("<tr class=\"text-center\">
                                                                    <td class=\"align-middle\">" . $tuplaUsuario["email"] . "</td>
                                                                    <td class=\"align-middle\">" . $tuplaUsuario["rol"] . "</td>");
                                                                    if($tuplaUsuario["id_jugador"] != NULL){
                                                                        $sqlJugador = "SELECT * FROM jugadores, equipos, ligas where jugadores.id=$tuplaUsuario[id_jugador] and equipos.id=$tuplaUsuario[id_equipo] and ligas.id=$tuplaUsuario[id_liga]";
                                                                        $resJugador = $conexion->BD_Consulta($sqlJugador);
                                                                        $tuplaJugador = $conexion->BD_GetTupla($resJugador);
                                                                        print("<td class=\"align-middle\">" . $tuplaJugador["jugador_curso"] . "</td>
                                                                        <td class=\"align-middle\">" . $tuplaJugador["nombre_liga"] . "</td>
                                                                        <td class=\"align-middle\">" . $tuplaJugador["nombre_equipo"] . "</td>");
                                                                    }else{
                                                                        print("<td></td>
                                                                            <td></td>
                                                                            <td></td>");
                                                                    }
                                                                    print("<td class=\"text-right align-middle\">
                                                                        <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#ModalModUsuario" . $tuplaUsuario["id"] ."\" class=\"btn btn-primary btn-pill btn-sm font-weight-bold\">
                                                                            <span class=\"svg-icon svg-icon-white\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                                                                        <path d=\"M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) \" />
                                                                                        <rect fill=\"#000000\" opacity=\"0.3\" x=\"5\" y=\"20\" width=\"15\" height=\"2\" rx=\"1\" />
                                                                                    </g>
                                                                                </svg></span> EDITAR
                                                                        </a></td>");
                                                                        if($tuplaUsuario["id"] != $vectorUsuario["id"]){
                                                                        print("<td class=\"text-right align-middle\">
                                                                        <a href=\"#\" class=\"btn btn-danger btn-pill btn-sm font-weight-bold\" data-toggle=\"modal\" data-target=\"#ModalEliminarUsuario" . $tuplaUsuario["id"] . "\">
                                                                            <span class=\"svg-icon svg-icon-white\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
                                                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                                                                        <circle fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\" r=\"10\" />
                                                                                        <path d=\"M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z\" fill=\"#000000\" />
                                                                                    </g>
                                                                                </svg></span> ELIMINAR
                                                                        </a>
                                                                        </td>");
                                                                        }else{
                                                                            print("<td></td>");
                                                                        }
                                                                         if($tuplaUsuario["id"] != $vectorUsuario["id"]){
                                    print("<td class=\"text-right align-middle\">
                                        <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#ModalEnviarCorreo" . $tuplaUsuario["id"] ."\">
                                        <span class=\"svg-icon svg-icon-default\"><i class=\"fa-solid fa-paper-plane text-dark\"></i></span>
                                        </a>
                                          </td>");
                                                                        }else{
                                                                            print("<td></td>");
                                                                        }

                                                                        print("<div class=\"modal fade\" id=\"ModalEliminarUsuario" . $tuplaUsuario["id"] . "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"CancelarModal\" aria-hidden=\"true\">
                                                                            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                                                <div class=\"modal-content\">
                                                                                    <div class=\"modal-body\">
                                                                                        Va a eliminar el usuario <strong>" . $tuplaUsuario["email"] . "</strong>.<br> ¿Está seguro de que quiere eliminarlo?
                                                                                    </div>
                                                                                    <div class=\"modal-footer\">
                                                                                        <button type=\"button\" class=\"btn btn-light-primary btn-pill font-weight-bold\" data-dismiss=\"modal\">CANCELAR</button>
                                                                                        <a href=\"index.php?id_usuario_del=" . $tuplaUsuario["id"] . "\" class=\"btn btn-primary btn-pill font-weight-bold\">CONFIRMAR</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </tr>");

                                                                    print("<div class=\"modal fade\" id=\"ModalModUsuario" . $tuplaUsuario["id"] ."\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-xl modal-dialog-centered\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modificando Jugador</h5>
                                <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                    <i aria-hidden=\"true\" class=\"ki ki-close\"></i>
                                </button>
                            </div>
                            <form class=\"form\" action=\"index.php\" method=\"POST\">
                                <input type=\"hidden\" name=\"aux_modUsuario\" value=\"" . $tuplaUsuario["id"] . "\">
                                <input type=\"hidden\" name=\"aux_modUsuario_jugador\" value=\"" . $tuplaUsuario["id_jugador"] . "\">
                                <input type=\"hidden\" name=\"aux_modUsuario_equipo\" value=\"" . $tuplaUsuario["id_equipo"] . "\">
                                <input type=\"hidden\" name=\"aux_modUsuario_liga\" value=\"" . $tuplaUsuario["id_liga"] . "\">
                                <input type=\"hidden\" name=\"aux_modUsuario_rol\" value=\"" . $tuplaUsuario["rol"] . "\">
                                <div class=\"modal-body row flex-column flex-md-row justify-content-center align-items-center\">
                                    <div class=\"form-group col-lg-6\">
                                        <label for=\"email_mod\">Email <span class=\"text-danger\">*</span></label>
                                        <input type=\"email\" class=\"form-control form-control-xl\" name=\"email_mod\" value=\"" . $tuplaUsuario["email"] . "\" required>
                                    </div>
                                    <div class=\"form-group col-lg-6\">
                                        <label for=\"pass_mod\">Contraseña <span class=\"text-danger\">*</span> <span ><i onclick=\"togglePassword(" . $tuplaUsuario["id"] .", this)\" class=\"fa-solid fa-lock text-primary\"></i></span></label>
                                        <input type=\"password\" id=\"password-" . $tuplaUsuario["id"] ."\" class=\"form-control form-control-xl\" name=\"pass_mod\" value=\"" . $tuplaUsuario["password"] . "\" required>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary btn-pill mr-2 text-white\" data-bs-dismiss=\"modal\">CANCELAR</button>
                                    <input type=\"submit\" class=\"btn btn-primary btn-pill text-white\" value=\"Modificar\">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>");

    print("<div class=\"modal fade\" id=\"ModalEnviarCorreo" . $tuplaUsuario["id"] . "\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Enviar Correo a <strong>" . $tuplaUsuario["email"] ."</strong></h5>
                                <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                    <i aria-hidden=\"true\" class=\"ki ki-close\"></i>
                                </button>
                            </div>
                            <form class=\"form\" action=\"./index.php\" method=\"POST\" enctype='multipart/form-data'>
                            <input type=\"hidden\" name=\"aux_correo\" value=\"" . $tuplaUsuario["email"] . "\">
                                <div class=\"modal-body row flex-column flex-md-row justify-content-center align-items-center\">
                                    <div class=\"form-group col-lg-12\">
                                        <label for=\"asunto_correo\">Asunto</label>
                                        <br>
                                        <input type=\"text\" name=\"asunto_correo\" id=\"asunto_correo\" class=\"form-control w-100\" required>
                                    </div>
                                    <div class=\"form-group col-lg-12\">
                                        <label for=\"cuerpo_correo\">Cuerpo</label>
                                        <br>
                                        <textarea name=\"cuerpo_correo\" id=\"cuerpo_correo\" class=\"form-control w-100\"></textarea>
                                    </div>
                                    <div class=\"col-lg-12\">
                                    <label for=\"fichero_correo\">Archivos</label>
                                    <br>
                                    <input type=\"file\" id=\"fichero_correo\" name=\"fichero_correo\">
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary btn-pill mr-2 text-white\" data-bs-dismiss=\"modal\">CANCELAR</button>
                                    <input type=\"submit\" class=\"btn btn-primary btn-pill text-white\" value=\"Enviar Correo\">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>");

                                                                    $tuplaUsuario = $conexion->BD_GetTupla($resUsuario);
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
                
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>



    <!--end::Global Theme Bundle-->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="../../../build/js/global/plugins.bundle.js"></script>
    <script src="../../../build/js/scripts.bundle.js"></script>
    <script src="../../../build/js/bootstrap-datepicker.js"></script>
    <script src="//cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.5.1/js/dataTables.rowGroup.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.5.1/js/rowGroup.dataTables.js"></script>
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
            tabla = $('#TablaUsuarios').DataTable({
                pageLength: 10,
                order: [],
                lengthMenu: [5, 10, 15, 20],
                orderFixed: [1, 'asc'],
                rowGroup: {
                    dataSrc: 1,
                    startRender: function(rows, group) {
                        return $('<tr class="bg-light group"><td style="font-weight: bold; font-size: 1.25rem;" colspan="8"><span>' + group + '</span></td></tr>');
                    }
                },
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

        <!-- Mostrar Contraseña -->
    <script>
            // Boton que ativa el mostrar
        function togglePassword(userId, btn) {
            // variable donde se guarda el input de la contraseña
            const password = document.getElementById(`password-${userId}`);
            if (password.type == "password") {
                password.type = 'text';
                btn.classList.remove("fa-lock");
                btn.classList.add("fa-unlock");
            } else {
                password.type = 'password';
                btn.classList.add("fa-lock");
                btn.classList.remove("fa-unlock");
            }
        };
    </script>

<script>
    // Script para que aparezca los campos respectivos al rol de usuario al seleccionarlo
  document.getElementById('usuario_rol').addEventListener('change', function () {
    const seleccion = this.value;
    const divCurso = document.getElementById('divCurso');
    const divEquipo = document.getElementById('divEquipo');
    const divNombre = document.getElementById('divNombre');
    const curso = document.getElementById('usuario_curso');
    const equipo = document.getElementById('usuario_equipo');
    const nombre = document.getElementById('usuario_nombre');

    if (seleccion === 'Usuario') {
      divCurso.style.display = 'block';
      divEquipo.style.display = 'block';
      divNombre.style.display = 'block';
      curso.setAttribute('required', 'required');
      equipo.setAttribute('required', 'required');
      nombre.setAttribute('required', 'required');
    } else {
      divCurso.style.display = 'none';
      divEquipo.style.display = 'none';
      divNombre.style.display = 'none';
      curso.removeAttribute('required');
      equipo.removeAttribute('required');
      nombre.removeAttribute('required');
    }
  });
</script>
</body>

</html>