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

  <section class="carrusel container pt-5 bg-light">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/ImagenCarrusel1.jpg" class="d-block w-100 custom-img" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/ImagenCarrusel1.jpg" class="d-block w-100 custom-img" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/ImagenCarrusel1.jpg" class="d-block w-100 custom-img" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section class="container-md py-4 bg-light">
    <div class=" text-center">
      <p class="fs-4 fw-bold">LIGA DE FÚTOL SALA DEL INSTITUTO RUIZ GIJÓN DE UTRERA EN LA QUE PARTICIPAN ALUMN@S DE TODO EL CENTRO REPARTIDOS EN LIGAS SEGÚN SU CURSO.</p>
      <p class="fs-4 fw-bold">FOMENTAMOS EL DEPORTE, EL COMPAÑERISMO, EL RESPETO Y GARANTIZAMOS MUCHA DIVERSIÓN</p>
    </div>
  </section>

  <!-- MODAL -->
  <?php imprime_pie(); ?>

  <script src="../build/js/bootstrap.bundle.js"></script>
  <script src="../build/js/mostrarPasword.js"></script>
  <script>
document.addEventListener("DOMContentLoaded", function () {
  const btnInicioSesion = document.getElementById("IniciarSesion");
  const modalInicioSesion = new bootstrap.Modal(document.getElementById("ModalForm"));

  if (btnInicioSesion) {
    btnInicioSesion.addEventListener("click", function () {
      modalInicioSesion.show();
    });
  }
});
  </script>
</body>

</html>