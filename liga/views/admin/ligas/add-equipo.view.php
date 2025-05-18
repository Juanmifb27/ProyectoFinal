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
                                                    Inscribiendo Equipo en: <?php echo $liga_nombre; ?>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <form class="form" id="formInscripcion" action="add-equipo.php?liga_id=<?php echo $liga_id; ?>" method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="equipo">
                                                        <div class="modal-body row">
                                                            <div class="form-group col-lg-12 col-sm-12">
                                                                <label for="equipo_nombre">Nombre Equipo</label>
                                                                <input type="text" name="equipo_nombre" id="equipo_nombre" class="form-control h-auto form-control-solid py-4 px-8" value="<?php echo $nombre_equipo;?>" require>
                                                            </div>
                                                            <div class="form-group col-lg-12 col-sm-12">
                                                                <label for="equipo_correo">Correo Contacto</label>
                                                                <input type="text" name="equipo_correo" id="equipo_correo" class="form-control h-auto form-control-solid py-4 px-8 correo" value="<?php echo $correo_equipo ?>" require>
                                                            </div>
                                                            <div class="form-group col-lg-12 col-sm-12">
                                                                <label for="equipo_imagen">Escudo Equipo</label>
                                                                <input type="file" name="equipo_imagen" id="equipo_imagen" class="form-control h-auto form-control-solid py-4 px-8" accept="image/*">
                                                            </div>
                                                            <div class="mb-3 col-lg-12 col-sm-12">
                                                                <div id="jugadores" class=" jugadores container d-flex flex-column border-4 border-primary">
                                                                    <label class="form-label">Introduzca los datos de los jugadores del Equipo (Minimo 5)</label>
                                                                    <div id="dataJugadores" class="dataJugadores">
                                                                    <?php if(isset($jugadores)){
                                                                        for($i = 0; $i < count($jugadores); $i++){
                                                                            print("<div id=\"jugador". $i ."\" class=\"d-flex justify-content-between my-3 jugador flex-column flex-md-row\">
                <div class=\"d-flex flex-column w-100 w-md-25 mx-3\">
                <input type=\"text\" name=\"nombre_jugadores[]\" class=\"form-control h-auto form-control-solid py-4 mx-3 border-1 border-primary\" placeholder=\"Nombre\" value=\"" . $jugadores[$i]["nombre_jugador"] . "\" required >
                <div class=\"invalid-feedback\">Introduce el Nombre del Jugador.</div>
                </div>
                <div class=\"d-flex flex-column w-100 mx-3\">
                <input type=\"text\" name=\"apellidos_jugadores[]\" class=\"form-control h-auto form-control-solid py-4 mx-3 border-1 border-primary\" placeholder=\"Apellidos\" value=\"" . $jugadores[$i]["apellido_jugador"] . "\" required >
                <div class=\"invalid-feedback\">Introduce el Apellido del Jugador.</div>
                </div>
                <div class=\"d-flex flex-column w-100 mx-3\">
                <input type=\"email\" name=\"correos_jugadores[]\" class=\"form-control h-auto form-control-solid py-4 mx-3 correo border-1 border-primary\" placeholder=\"Correo Corporativo\" value=\"" . $jugadores[$i]["correo_jugador"] . "\" required >
                <div class=\"invalid-feedback\">Introduce un email válido.</div>
                </div>
                <div class=\"d-flex flex-column w-100 mx-3\">
                <select class=\"form-select h-auto form-control-solid py-4 mx-3\" id=\"curso\" name=\"curso[]\">
                <option value=\"\">Seleccione el curso...</option>");
                if($jugadores[$i]["curso_jugador"] == "1 ESO"){
                print("<option value=\"1 ESO\" selected>1º ESO</option>");
                }else{
                print("<option value=\"1 ESO\">1º ESO</option>");
                }
                if($jugadores[$i]["curso_jugador"] == "2 ESO"){
                print("<option value=\"2 ESO\" selected>2º ESO</option>");
                }else{
                print("<option value=\"2 ESO\">2º ESO</option>");
                }
                if($jugadores[$i]["curso_jugador"] == "3 ESO"){
                print("<option value=\"3 ESO\" selected>3º ESO</option>");
                }else{
                print("<option value=\"3 ESO\">3º ESO</option>");
                }
                if($jugadores[$i]["curso_jugador"] == "4 ESO"){
                print("<option value=\"4 ESO\" selected>4º ESO</option>");
                }else{
                print("<option value=\"4 ESO\">4º ESO</option>");
                }
                if($jugadores[$i]["curso_jugador"] == "1 Bach"){
                print("<option value=\"1 Bach\" selected>1º Bachillerato</option>");
                }else{
                print("<option value=\"1 Bach\">1º Bachillerato</option>");
                }
                if($jugadores[$i]["curso_jugador"] == "2 Bach"){
                print("<option value=\"2 Bach\" selected>2º Bachillerato</option>");
                }else{
                print("<option value=\"2 Bach\">2º Bachillerato</option>");
                }
                if($jugadores[$i]["curso_jugador"] == "1 SMR"){
                print("<option value=\"1 SMR\" selected>1º SMR</option>");
                }else{
                print("<option value=\"1 SMR\">1º SMR</option>");
                }
                if($jugadores[$i]["curso_jugador"] == "2 SMR"){
                print("<option value=\"2 SMR\" selected>2º SMR</option>");
                }else{
                print("<option value=\"2 SMR\">2º SMR</option>");
                }
                if($jugadores[$i]["curso_jugador"] == "1 DAW"){
                print("<option value=\"1 DAW\" selected>1º DAW</option>");
                }else{
                print("<option value=\"1 DAW\">1º DAW</option>");
                }
                if($jugadores[$i]["curso_jugador"] == "2 DAW"){
                print("<option value=\"2 DAW\" selected>2º DAW</option>");
                }else{
                print("<option value=\"2 DAW\">2º DAW</option>");
                }
                print("</select>
                <div class=\"invalid-feedback\">Introduce el curso del Jugador</div>
                </div>
                </div>");
                                                                        }
                                                                    } ?> 
                                                                    </div>
                                                                    <button id="btnAdd" class="btn btn-secondary float-end mb-3">Añadir Jugador</button>
                                                                    <button id="btnDel" class="btn btn-secondary float-end mb-3">Eliminar último Jugador</button>
                                                                    <div id="errores" hidden>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" onclick="document.location.href='./index.php'" class="text-white btn btn-secondary btn-pill mr-2" data-dismiss="modal">CANCELAR</button>
                                                            <button type="submit" class="btn btn-primary btn-pill text-white">INSCRIBIR EQUIPO</button>
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
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("InputBuscar");
            filter = input.value.toUpperCase();
            table = document.getElementById("TablaLigas");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function mostrarAyuda() {
            var ayuda = document.getElementById("ayudaUsuario");

            if (ayuda.hidden) {
                ayuda.hidden = false;
            } else {
                ayuda.hidden = true;
            }
        }
    </script>
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
                persistenciaJugadores();

                let cantidadJugadores = document.getElementsByClassName("jugador").length;
                let jugador = `
                <div id="jugador` + cantidadJugadores + `" class="d-flex justify-content-between my-3 jugador flex-column flex-md-row">
                <div class="d-flex flex-column w-100 w-md-25 mx-3">
                <input type="text" name="nombre_jugadores[]" class="form-control h-auto form-control-solid py-4 mx-3 border-1 border-primary" placeholder="Nombre" value="" required >
                <div class="invalid-feedback">Introduce el Nombre del Jugador.</div>
                </div>
                <div class="d-flex flex-column w-100 mx-3">
                <input type="text" name="apellidos_jugadores[]" class="form-control h-auto form-control-solid py-4 mx-3 border-1 border-primary" placeholder="Apellidos" required >
                <div class="invalid-feedback">Introduce el Apellido del Jugador.</div>
                </div>
                <div class="d-flex flex-column w-100 mx-3">
                <input type="email" name="correos_jugadores[]" class="form-control h-auto form-control-solid py-4 mx-3 correo border-1 border-primary" placeholder="Correo Corporativo" required >
                <div class="invalid-feedback">Introduce un email válido.</div>
                </div>
                <div class="d-flex flex-column w-100 mx-3">
                <select class="form-select h-auto form-control-solid py-4 mx-3" id="curso" name="curso[]">
                <option value="">Seleccione el curso...</option>
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
                <div class="invalid-feedback">Introduce el curso del Jugador</div>
                </div>
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
                        datosJugadores[index][index2] = datosJugador[index2].children[0].value;
                    }
                }


                <?php if (isset($datosFormularioJugadores) && $datosFormularioJugadores != ""): ?>

                    <?php for ($i = 0; $i < count($datosFormularioJugadores); $i++): ?>
                        datosJugadores[<?php echo $i; ?>] = new Array(<?php //echo count($datosFormularioJugadores[$i]);
                                                                        ?>);
                        <?php $j = 0; ?>
                        <?php foreach ($datosFormularioJugadores[$i] as $valor) : ?>
                            datosJugadores[<?php echo $i; ?>][<?php echo $j++ ?>] = "<?php echo $valor ?>";
                        <?php endforeach; ?>
                    <?php endfor; ?>
                <?php endif; ?>
                <?php $datosFormularioJugadores = "" ?>
                document.getElementById("dataJugadores").innerHTML = ""
                let j = 0;
                for (let index = 0; index < datosJugadores.length; index++) {
                    j++;
                    let jugador = `
                    <div id="jugador` + index + `" class="d-flex justify-content-between my-3 jugador flex-column flex-md-row">
                    <div class="d-flex flex-column w-100 mx-3">
                    <input type="text" name="nombre_jugadores[]" class="form-control h-auto form-control-solid py-4 mx-3 border-1 border-primary" placeholder="Nombre" value="` + datosJugadores[index][0] + `" required >
                    <div class="invalid-feedback">Introduce el Nombre del Jugador.</div>
                    </div>
                    <div class="d-flex flex-column w-100 mx-3">
                    <input type="text" name="apellidos_jugadores[]" class="form-control h-auto form-control-solid py-4 mx-3 border-1 border-primary" placeholder="Apellidos" value="` + datosJugadores[index][1] + `" required >
                    <div class="invalid-feedback">Introduce el Apellido del Jugador.</div>
                    </div>
                    <div class="d-flex flex-column w-100 mx-3">
                    <input type="email" name="correos_jugadores[]" class="form-control h-auto form-control-solid py-4 mx-3 border-1 border-primary correo" placeholder="Correo Corporativo" value="` + datosJugadores[index][2] + `" required >
                    <div class="invalid-feedback">Introduce un email válido.</div>
                    </div>
                    <div class="d-flex flex-column w-100 mx-3">
                    <select class="form-select h-auto form-control-solid py-4 mx-3 text-black" id="curso` + index + `" name="curso[]">
                    <option value="">Seleccione el curso...</option>
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
                    <div class="invalid-feedback">Introduce el curso del Jugador</div>
                    </div>
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
                        if (jugador[index2].value == "") {
                            valido = false;
                        }
                    }
                    if (valido) {
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
                return verificado;
            }

            form.addEventListener("submit", function(event) {
                const totalJugadores = contarJugadores();
                const correo = verificarCorreo();
                // Si el formulario no es válido o hay menos de 5 jugadores, evita el envío
                if (!form.checkValidity() || totalJugadores < 5 || !correo) {
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