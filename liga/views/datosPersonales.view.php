<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liga IES Ruiz Gijon</title>
  <script src="https://kit.fontawesome.com/43cf8b4b5b.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../build/css/styles.css">
  <script src="../build/js/bootstrap.bundle.js"></script>
</head>

<body class="d-flex flex-column" style="height: 100vh;">
  <?php imprime_cabecera("HOME", $vectorUsuario); ?>
  <div class="col-lg-12 mt-3 container">
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
  <h1>Datos de <?php echo $usuario_nombre; ?></h1>
  <img style="float:right;" class="m-7" width="75" height="75" src="../build/assets/img/equipos/<?php echo $equipo_imagen;?>">
  </div>

  <div class="col-lg-12 col-md-12 col-sm-12 mt-5 container">
                                         <form class="form" action="datosPersonales.php" method="post" enctype="multipart/form-data">
                                             <input type="hidden" name="aux_DatosPersonales">
                                             <div class="modal-body row">
                                                 <div class="form-group col-lg-6 col-sm-6">
                                                     <label for="usuario_nombre">Nombre</label>
                                                     <input type="text" name="usuario_nombre" id="usuario_nombre" class="form-control h-auto form-control-solid py-2 px-4" value="<?php echo $usuario_nombre; ?>" readonly required>
                                                 </div>
                                                 <div class="form-group col-lg-6 col-sm-6">
                                                     <label for="usuario_correo">Correo</label>
                                                     <input type="text" name="usuario_correo" id="usuario_correo" class="form-control h-auto form-control-solid py-2 px-4" value="<?php echo $usuario_correo; ?>" readonly required>
                                                 </div>
                                                 <div class="form-group col-lg-6 col-sm-6">
                                                     <label for="password-0">Contraseña<span class="text-danger">*</span> <span ><i onclick="togglePassword(0, this)" class="fa-solid fa-lock text-primary"></i></span></label>
                                                     <input type="password" name="usuario_pass" id="password-0" class="form-control h-auto form-control-solid py-2 px-4" value="<?php echo $usuario_pass; ?>" require>
                                                 </div>
                                                 <div class="form-group col-lg-6 col-sm-6">
                                                     <label for="usuario_equipo">Equipo</label>
                                                     <input type="text" name="usuario_equipo" id="usuario_equipo" class="form-control h-auto form-control-solid py-2 px-4" value="<?php echo $usuario_equipo; ?>" readonly require>
                                                 </div>
                                                 <div class="form-group col-lg-6 col-sm-6">
                                                     <label for="usuario_liga">Liga</label>
                                                     <input type="text"  name="usuario_liga" id="usuario_liga" class="form-control h-auto form-control-solid py-2 px-4" value="<?php echo $usuario_liga; ?>" readonly require>
                                                 </div>
                                             </div>
                                             <div class="modal-footer">
                                                 <button type="button" onclick="document.location.href='./index.php'" class="text-white btn btn-secondary btn-pill mr-2" data-dismiss="modal">CANCELAR</button>
                                                 <button type="submit" class="btn btn-primary btn-pill text-white m-2">GUARDAR</button>
                                             </div>
                                         </form>
                                     </div>

  <!-- MODAL -->
  <?php imprime_pie(); ?>

  <script src="../build/js/bootstrap.bundle.js"></script>
  <script src="../build/js/mostrarPasword.js"></script>

        <!-- Mostrar Contraseña -->
    <script>
            // Boton del ojo que ativa el mostrar
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

//   <script>
// document.addEventListener("DOMContentLoaded", function () {
//   const btnInicioSesion = document.getElementById("IniciarSesion");
//   const modalInicioSesion = new bootstrap.Modal(document.getElementById("ModalForm"));

//   if (btnInicioSesion) {
//     btnInicioSesion.addEventListener("click", function () {
//       modalInicioSesion.show();
//     });
//   }
// });
//   </script>
</body>

</html>