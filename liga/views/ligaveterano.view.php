<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liga Novato</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="build/css/styles.css" />
  </head>
  <body class="d-flex flex-column" style="height: 100vh">
    <header class="container-fluid header bg-primary">
      <div
        class="container text-center text-light align-items-center header__encabezado d-flex flex-row"
      >
        <h1 class="col header__titulo d-inline-block">LIGA IES RUIZ GIJON</h1>
      </div>
      <nav class="navbar navbar-expand-lg container bg-body-tertiary">
        <div
          class="container-fluid d-flex justify-content-center navbar__container"
        >
          <a class="navbar-brand" href="index.html">
            <img
              src="img/logo_RG_180_mono_new_nohalo.png"
              alt="Logo"
              class="img-fluid navbar__logo"
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-center w-100">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="liganovato.html">Liga Novato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ligajuvenil.html"
                  >Liga Juvenil</a
                >
              </li>
              <li class="nav-item bg-secondary">
                <a class="nav-link active" href="ligaveterano.html">Liga Veterano</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Sección Tabs para Grupo A y Grupo B -->
    <section
      class="container mt-5 mb-5 d-flex flex-column flex-grow-1 justify-content-center"
    >
      <div
        class="row w-100 h-100 d-flex justify-content-center align-items-center"
      >
        <!-- Pestañas para Grupo A y B -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a
              class="nav-link active"
              id="grupoA-tab"
              data-bs-toggle="tab"
              href="#grupoA"
              role="tab"
              aria-controls="grupoA"
              aria-selected="true"
              >Grupo A</a
            >
          </li>
          <li class="nav-item" role="presentation">
            <a
              class="nav-link"
              id="grupoB-tab"
              data-bs-toggle="tab"
              href="#grupoB"
              role="tab"
              aria-controls="grupoB"
              aria-selected="false"
              >Grupo B</a
            >
          </li>
        </ul>
        <div class="tab-content w-100 mt-4" id="myTabContent">
          <!-- Grupo A -->
          <div
            class="tab-pane fade show active"
            id="grupoA"
            role="tabpanel"
            aria-labelledby="grupoA-tab"
          >
            <div class="row">
              <!-- Tabla Clasificación Grupo A -->
              <div class="col-12 col-lg-6 mb-4 tabla">
                <h3 class="text-center">Clasificación Grupo A</h3>
                <table
                  class="table table-bordered table-striped"
                  id="tabla-clasificacionA"
                >
                  <thead>
                    <tr>
                      <th>Posición</th>
                      <th>Equipo</th>
                      <th>Puntos</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Notthingam Miedo</td>
                      <td>9</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>FC Barceló</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Rayo Vaticano</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Biofrutas</td>
                      <td>0</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Tabla Jornadas Grupo A -->
              <div class="col-12 col-lg-6 mb-4 tabla">
                <h3 class="text-center">Jornadas y Resultados Grupo A</h3>
                <div class="table-responsive" id="tabla-jornadasA">
                  <table class="table table-bordered table-striped">
                    <thead class="sticky-top">
                      <tr>
                        <th>Jornada</th>
                        <th>Partido</th>
                        <th>Resultado</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <!-- Jornada 1 -->
                      <tr>
                        <td rowspan="2">Jornada 1</td>
                        <td>Rayo Vaticano vs Notthingam Miedo</td>
                        <td>1 - 3</td>
                      </tr>
                      <tr>
                        <td>Biofrutas vs FC Barceló</td>
                        <td>0 - 8</td>
                      </tr>
                      <!-- Jornada 2 -->
                      <tr>
                        <td rowspan="2">Jornada 2</td>
                        <td>FC Barceló vs Rayo Vaticano</td>
                        <td>7 - 3</td>
                      </tr>
                      <tr>
                        <td>Notthingam Miedo vs Biofrutas</td>
                        <td>7 - 0</td>
                      </tr>

                      <!-- Jornada 3 -->
                      <tr>
                        <td rowspan="2">Jornada 3</td>
                        <td>Rayo Vaticano vs Biofrutas</td>
                        <td>1 - 0</td>
                      </tr>
                      <tr>
                        <td>FC Barceló vs Notthingam Miedo</td>
                        <td>1 - 3</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- Grupo B -->
          <div
            class="tab-pane fade"
            id="grupoB"
            role="tabpanel"
            aria-labelledby="grupoB-tab"
          >
            <div class="row">
              <!-- Tabla Clasificación Grupo B -->
              <div class="col-12 col-lg-6 mb-4 tabla">
                <h3 class="text-center">Clasificación Grupo B</h3>
                <table
                  class="table table-bordered table-striped"
                  id="tabla-clasificacionB"
                >
                  <thead>
                    <tr>
                      <th>Posición</th>
                      <th>Equipo</th>
                      <th>Puntos</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>FR1</td>
                      <td>9</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>San Marino</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Los parguelas</td>
                      <td>3</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>UD Los kukos</td>
                      <td>0</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Tabla Jornadas Grupo B -->
              <div class="col-12 col-lg-6 mb-4 tabla">
                <h3 class="text-center">Jornadas y Resultados Grupo B</h3>
                <div class="table-responsive" id="tabla-jornadasB">
                  <table class="table table-bordered table-striped">
                    <thead class="sticky-top">
                      <tr>
                        <th>Jornada</th>
                        <th>Partido</th>
                        <th>Resultado</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <!-- Jornada 1 -->
                      <tr>
                        <td rowspan="2">Jornada 1</td>
                        <td>FR1 vs UD Los Kukos</td>
                        <td>7 - 0</td>
                      </tr>
                      <tr>
                        <td>San Marino vs Los parguelas</td>
                        <td>5 - 3</td>
                      </tr>
                      <!-- Jornada 2 -->
                      <tr>
                        <td rowspan="2">Jornada 2</td>
                        <td>UD Los Kukos vs San Marino</td>
                        <td>1 - 5</td>
                      </tr>
                      <tr>
                        <td>FR1  vs Los parguelas</td>
                        <td>3 - 1</td>
                      </tr>

                      <!-- Jornada 3 -->
                      <tr>
                        <td rowspan="2">Jornada 3</td>
                        <td>San Marino vs FR1</td>
                        <td>1 - 3</td>
                      </tr>
                      <tr>
                        <td>UD Los Kukos vs Los parguelas</td>
                        <td>0 - 1</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="bg-primary text-white py-4 mt-auto bottom">
      <div class="row container-md text-center flex-row">
        <p class="col-md-9 mb-2">
          &copy; 2025 Instituto Ruiz Gijón - Todos los derechos reservados.
        </p>
        <a href="inscripcion.html" class="col-md-3 btn btn-secondary"
          >Inscribirse</a
        >
      </div>
    </footer>

    <script src="build/js/bootstrap.bundle.js"></script>
    <script>
window.addEventListener("load", function () {
  const tablaClasificacionA = document.getElementById("tabla-clasificacionA");
  const tablaJornadasA = document.getElementById("tabla-jornadasA");
  const tablaClasificacionB = document.getElementById("tabla-clasificacionB");
  const tablaJornadasB = document.getElementById("tabla-jornadasB");

  // Función para ajustar la altura de las tablas de jornadas
  function ajustarAlturaTablas() {
    if (tablaClasificacionA && tablaJornadasA) {
      const alturaClasificacionA = tablaClasificacionA.offsetHeight;
      tablaJornadasA.style.maxHeight = `${alturaClasificacionA}px`;
    }

    if (tablaClasificacionB && tablaJornadasB) {
      const alturaClasificacionB = tablaClasificacionB.offsetHeight;
      tablaJornadasB.style.maxHeight = `${alturaClasificacionB}px`;
    }
  }

  // Ajustar altura de las tablas al cargar la página
  ajustarAlturaTablas();

  // Usamos el evento `shown.bs.tab` de Bootstrap para actualizar las alturas cuando cambiamos de pestaña
  const tabLinks = document.querySelectorAll('#myTab a');

  tabLinks.forEach(function (tabLink) {
    tabLink.addEventListener('shown.bs.tab', function () {
      ajustarAlturaTablas();
    });
  });
});
    </script>
  </body>
</html>
