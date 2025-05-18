<?php
function imprime_cabecera($section, $vector_return)
{
  $conexion = new conexion();
  // Para sacar la ruta absoluta de la raiz del proyecto:
  $ruta = $_SERVER['PHP_SELF'];
  $ruta = explode("/", $ruta);
  for ($i = 0; $i < count($ruta) - 2; $i++) {
    $root[] = $ruta[$i];
  }
  $root = implode("/", $root);
  // En caso de que la pestaña activa sea el inicio
  $active_home = "";
  $active_color = "bg-secondary";
  if (strcmp($section, "HOME") == 0)
    $active_home = "active";

  // Recogemos todas las ligas (sin contar grupos secundarios)
  $sql = "SELECT l.* FROM ligas l JOIN emparejamientos e ON l.id = e.liga_id WHERE l.nombre_liga NOT LIKE '%Grupo%' GROUP BY l.id HAVING COUNT(e.id) > 0";
  $listaLigas = $conexion->BD_Consulta($sql);
  while ($countLigas = $conexion->BD_GetTupla($listaLigas)) {
    $arrayLigas[] = $countLigas;
  }
  print("  <script src=\"../build/js/global/plugins.bundle.js\"></script>
  <script src=\"../build/js/scripts.bundle.js\"></script>");

  print("<header class=\"container-fluid header bg-primary\">
          <div class=\"container text-center text-light align-items-center header__encabezado d-flex flex-sm-row flex-column\">
            <h1 class=\"col header__titulo d-inline-block\">LIGA IES RUIZ GIJON</h1>");
  if ($vector_return == NULL) {
    print("<span class=\"input-group-addon\"><i class=\"fa fa-user\"></i> <a href=\"#ModalForm\" id=\"IniciarSesion\" class=\"trigger-btn text-decoration-none text-white\" data-toggle=\"modal\">Iniciar Sesión</a></span>");
  } else {

    if ($vector_return["rol"] == "AdministradorGeneral") {
      print("<ul class=\"nav\">
      <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <span class=\"svg-icon svg-icon-white text-white\"><i class=\"fa fa-user\"></i></span> <span class='text-white'>$vector_return[email]</span>
      </a>
      <div class=\"dropdown-menu\">
        <a class=\"dropdown-item\" href=\"desconectar.php\">
          <span class=\"svg-icon svg-icon-primary\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" viewBox=\"0 0 512 512\">
            <path fill=\"#2B4E84\" d=\"M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 224c0 17.7 14.3 32 32 32s32-14.3 32-32l0-224zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z\" />
            </svg>
        </span> Cerrar Sesión
        </a>
        <a class=\"dropdown-item\" href=\"admin/index.php\">
          <span class=\"svg-icon svg-icon-primary\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\"   viewBox=\"0 0 512 512\">
          <path fill=\"#3E65A0\" opacity=\"1\" d=\"M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z\"/></svg>
          </span> Administrar Liga
        </a>
      </div>
      </li>
      </ul>");
    }

    if ($vector_return["rol"] == "AdministradorLigas") {
      print("<ul class=\"nav\">
      <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <span class=\"svg-icon svg-icon-white text-white\"><i class=\"fa fa-user\"></i></span> <span class='text-white'>$vector_return[email]</span>
      </a>
      <div class=\"dropdown-menu\">
        <a class=\"dropdown-item\" href=\"desconectar.php\">
          <span class=\"svg-icon svg-icon-primary\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\" viewBox=\"0 0 512 512\">
            <path fill=\"#2B4E84\" d=\"M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 224c0 17.7 14.3 32 32 32s32-14.3 32-32l0-224zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z\" />
            </svg>
        </span> Cerrar Sesión
        </a>
        <a class=\"dropdown-item\" href=\"admin/index.php\">
          <span class=\"svg-icon svg-icon-primary\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"22\" height=\"22\"   viewBox=\"0 0 512 512\">
          <path fill=\"#3E65A0\" opacity=\"1\" d=\"M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z\"/></svg>
          </span> Administrar Liga
        </a>
      </div>
      </li>
      </ul>");
    }

    if ($vector_return["rol"] == "Usuario") {

      print("<ul class=\"nav\">
      <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <span class=\"svg-icon svg-icon-white text-white\"><i class=\"fa fa-user\"></i></span> <span class='text-white'>$vector_return[email]</span>
      </a>
      <div class=\"dropdown-menu\">
        <a class=\"dropdown-item\" href=\"desconectar.php\">
          <span class=\"svg-icon svg-icon-primary\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\">
          <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
            <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
            <path d=\"M7.62302337,5.30262097 C8.08508802,5.000107 8.70490146,5.12944838 9.00741543,5.59151303 C9.3099294,6.05357769 9.18058801,6.67339112 8.71852336,6.97590509 C7.03468892,8.07831239 6,9.95030239 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,9.99549229 17.0108275,8.15969002 15.3875704,7.04698597 C14.9320347,6.73472706 14.8158858,6.11230651 15.1281448,5.65677076 C15.4404037,5.20123501 16.0628242,5.08508618 16.51836,5.39734508 C18.6800181,6.87911023 20,9.32886071 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,9.26852332 5.38056879,6.77075716 7.62302337,5.30262097 Z\" fill=\"#3E65A0\" opacity=\"1\" fill-rule=\"nonzero\" />
            <rect fill=\"#2B4E84\" opacity=\"0.5\" x=\"11\" y=\"3\" width=\"2\" height=\"10\" rx=\"1\" />
          </g>
          </svg></span> Cerrar Sesión
        </a>
      </div>
      </li>
      </ul>");
    }
  }
  print("
            </div>
          <nav class=\"navbar navbar-expand-xl container bg-body-tertiary\">
            <div class=\"container-fluid d-flex justify-content-center navbar__container\">
              <!-- Logo -->
              <a class=\"navbar-brand\" href=\"$root/index.php\">
                <img src=\"$root/build/assets/img/logo_RG_180_mono_new_nohalo.png\" alt=\"Logo\" class=\"img-fluid navbar__logo\">              
              </a>
              <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" 
                aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>
              <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav d-flex justify-content-center w-100\">
                  <li class=\"nav-item " . ($active_home != '' ? $active_color : '') . " \">
                    <a class=\"nav-link $active_home\" aria-current=\"page\" href=\"$root/index.php\" >Home</a>
                  </li>");
  // recorremos las ligas existentes para generar sus pestañas
  foreach ($arrayLigas as $liga) {
    if (strcmp($section, $liga['nombre_liga']) == 0) {
      $active_liga = "active";
      print("<li class=\"nav-item $active_color \">
              <a class=\"nav-link $active_liga\" href=\"$root/Controller/liga.php?liga=$liga[nombre_liga]\">$liga[nombre_liga]</a>
            </li>");
    } else {
      print("<li class=\"nav-item\">
              <a class=\"nav-link\" href=\"$root/Controller/liga.php?liga=$liga[nombre_liga]\">$liga[nombre_liga]</a>
            </li>");
    }
  }
  print("</ul>
              </div>
            </div>
          </nav>
        </header>");

  imprime_inicioSesion();
}

function imprime_pie()
{
  // Para sacar la ruta absoluta de la raiz del proyecto:
  $ruta = $_SERVER['PHP_SELF'];
  $ruta = explode("/", $ruta);
  for ($i = 0; $i < count($ruta) - 1; $i++) {
    $root[] = $ruta[$i];
  }
  $root = implode("/", $root);


  print("    <footer class=\"bg-primary text-white py-4 mt-auto bottom\">
        <div class=\" row container-md text-center flex-row\">
            <p class=\"col-md-9 mb-2\">&copy; 2025 Instituto Ruiz Gijón - Todos los derechos reservados. Juan Manuel Ferrera Berlanga</p>
            <a href=\"$root/formulario.php\" class=\"col-md-3 btn btn-secondary\">Inscribirse</a>
        </div>
    </footer>");
}

function imprime_inicioSesion()
{
  $ruta = $_SERVER['PHP_SELF'];
  $ruta = explode("/", $ruta);
  for ($i = 0; $i < count($ruta) - 1; $i++) {
    $root[] = $ruta[$i];
  }
  $root = implode("/", $root);

  print("<div class=\"modal fade\" id=\"ModalForm\" tabindex=\"-1\" aria-labelledby=\"ModalFormLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-body\">
        <div class=\"myform bg-primary\">
        <h1 class=\"text-center\">Iniciar Sesión</h1>
                <form method=\"Post\" action=\"$root/login.php\">
                    <div class=\"mb-3 mt-4\">
                        <label for=\"email\" class=\"form-label\">Correo Corporativo</label>
                        <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" aria-describedby=\"emailHelp\">
                    </div>
                    <div class=\"mb-3\" id=\"campo_password\">
                        <label for=\"password\" class=\"form-label\">Contraseña</label>
                        <input type=\"password\" class=\"form-control d-inline\" name=\"password\" id=\"password\"><span><i class=\"fa-solid fa-lock d-inline\"></i></span>
                        </div>
                        <button type=\"submit\" class=\"btn btn-light mt-3\">LOGIN</button>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>");
}

function imprime_modal($estado)
{
  // Para sacar la ruta absoluta de la raiz del proyecto:
  $ruta = $_SERVER['PHP_SELF'];
  $ruta = explode("/", $ruta);
  for ($i = 0; $i < count($ruta) - 1; $i++) {
    $root[] = $ruta[$i];
  }
  $root = implode("/", $root);

  $estado = ($estado == "true") ? $estado = true : false;

  if ($estado) {
    $modal_header = "Inscripcion Enviada";
    $modal_body1 = "Tu inscripción se ha enviado correctamente";
    $modal_body2 = "Por favor, Espere la confirmacion al correo de contacto";
    $modal_footer = "<a href=\"$root/index.php\" class=\"btn btn-primary\">Volver al Inicio</a>";
  } elseif (!$estado) {
    $modal_header = "Error al enviar la Inscripcion";
    $modal_body1 = "Hubo un error al procesar la inscripción";
    $modal_body2 = "Compruebe los datos e intentelo de nuevo mas tarde";
    $modal_footer = "";
  }

  print("    <div class=\"modal fade\" id=\"modalConfirmacion\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">$modal_header</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p>$modal_body1</p>
                    <p>$modal_body2</p>
                </div>
                <div class=\"modal-footer\">
                    $modal_footer
                </div>
            </div>
        </div>
    </div>"
  );
}
