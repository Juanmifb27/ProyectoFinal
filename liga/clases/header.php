<?php
function imprime_cabecera($section)
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
  $sql = "SELECT *  FROM ligas WHERE nombre_liga NOT LIKE '%Grupo%'";
  $listaLigas = $conexion->BD_Consulta($sql);
  while ($countLigas = $conexion->BD_GetTupla($listaLigas)) {
    $arrayLigas[] = $countLigas;
  }

  print("<header class=\"container-fluid header bg-primary\">
          <div class=\"container text-center text-light align-items-center header__encabezado d-flex flex-row\">
            <h1 class=\"col header__titulo d-inline-block\">LIGA IES RUIZ GIJON</h1>
          </div>
          <nav class=\"navbar navbar-expand-lg container bg-body-tertiary\">
            <div class=\"container-fluid d-flex justify-content-center navbar__container\">
              <!-- Logo -->
              <a class=\"navbar-brand\" href=\"$root\">
                <img src=\"$root/build/assets/img/logo_RG_180_mono_new_nohalo.png\" alt=\"Logo\" class=\"img-fluid navbar__logo\">              
              </a>
              <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" 
                aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>
              <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav d-flex justify-content-center w-100\">
                  <li class=\"nav-item " . ($active_home != '' ? $active_color : '') . " \">
                    <a class=\"nav-link $active_home\" aria-current=\"page\" href=\"$root\">Home</a>
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

function imprime_jugador()
{
  print("<div class=\"d-flex justify-content-between my-3 jugador\">
          <input type=\"text\" name=\"nombre_jugadores[]\" class=\"form-control w-25 me-3\" placeholder=\"Nombre\">
          <input type=\"text\" name=\"apellidos_jugadores[]\" class=\"form-control w-25 me-3\" placeholder=\"Apellidos\">
          <input type=\"email\" name=\"correos_jugadores[]\" class=\"form-control w-25 me-3\" placeholder=\"Correo Corporativo\">
          <select class=\"form-select w-25\" id=\"curso\" nombre=\"curso[]\" required>
            <option value=\"\">Seleccione el curso...</option>
            <option value=\"1 ESO\">1º ESO</option>
            <option value=\"2 ESO\">2º ESO</option>
            <option value=\"3 ESO\">3º ESO</option>
            <option value=\"4 ESO\">4º ESO</option>
            <option value=\"1 Bach\">1º Bachillerato</option>
            <option value=\"2 Bach\">2º Bachillerato</option>
            <option value=\"1 SMR\">1º SMR</option>
            <option value=\"2 SMR\">2º SMR</option>
            <option value=\"1 DAW\">2º DAW</option>
            <option value=\"2 DAW\">2º DAW</option>
          </select>
        </div>");
}
