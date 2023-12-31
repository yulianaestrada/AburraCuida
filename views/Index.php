<!DOCTYPE html>
<html>

<head>

  <title>AburráCuida</title>
  <meta charset="uft-8">
  <meta name="viewport" content="width-device-width">
  <meta name="descripcion" content="Diseño y Desarrollo Web">
  <meta name="Keywords" content="Diseño Web, desarrollo, po,posicionamiento">
  <meta name="author" content="Render2Web">

  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


  </style>
</head>

<body>
  <header>
    <div class="contenedor">
      <div id="marca">
        <h1><span class="resaltado"> Aburrá </span> Cuida</h1>
      </div>

      <nav>
        <ul>
          <li class="actual"><a href="Index.php">Inicio</a></li>
          <li><a href="Index2.php">Tipos de violencia</a></li>
          <li><a href="Hacer.php">¿Qué Hago?</a></li>
          <li><a href="Index3.php">Reportar</a>
          <li><a class="button1" data-bs-toggle="modal" data-bs-target="#exampleModal">Ingresar</a>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <h1 class="modal-title fs-5 texto-centrado" id="exampleModalLabel">¡Bienvenido de nuevo!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Volver"></button>
                  </div>
                  <div class="modal-body">
                    <center><img src="../img/cliente.png" width="70" height="70"></center>
                    <form action="logeo.php" method="POST">
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Usuario:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                      </div>
                      <div class="modal-footer justify-content-center">
                      <button type="submit" class="btn btn-success">Iniciar sesión</button>
                  </div>
                    </form>
                  </div>
                 
                </div>
              </div>
            </div>
        </ul>
      </nav>
    </div>
  </header>

  <div class="container-slider">

    <div class="slider" id="slider">
      <div class="slider__section">
        <img src="../img/img2.jpg" alt="" class="slider__img">
      </div>
      <div class="slider__section">
        <img src="../img/img3.png" alt="" class="slider__img">
      </div>
      <div class="slider__section">
        <img src="../img/img4.webp" alt="" class="slider__img">
      </div>
      <div class="slider__section">
        <img src="../img/img2.jpg" alt="" class="slider__img">
      </div>
    </div>
    <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
    <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
  </div>

  <section id="boletin">
    <div class="contenedor">
      <h1>Nosotros</h1>

    </div>
  </section>
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  <main class="container">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Aburrá Cuida</strong>
            <h3 class="mb-0">Descripción</h3>
            <p align="justify" class="card-text mb-auto">
              Aburrá Cuida es una plataforma web, diseñada como un medio para gestionar y tratar casos
              de violencia intrafamiliar en el Valle de Aburrá, de la mano de profesionales y expertos
              en el tema, que brindarán consejos y guías para solucionar cada uno de los casos; Todo aquello
              con fines netamente académicos.
            </p>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="300" xmlns="http://www.w3.org/2000/svg" role="img"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#16A085" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            </svg>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Aburrá Cuida</strong>
            <h3 class="mb-0">Beneficios</h3>
            <p align="justify" class="mb-auto">
              Mediante Aburrá Cuida, el usuario podrá registrar casos de violencia que esté presentando o
              aquellos del cual sea testigo, en dónde serán atendidos por un profesional en el tema, que se pondrá
              en contacto con el usuario para brindarle la asesoría correspondiente, si el caso es "Extremo", se
              escalonará
              a un departamento policial.
            </p>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="300" xmlns="http://www.w3.org/2000/svg" role="img"
              aria-label="Placeholder:" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            </svg>

          </div>
        </div>
      </div>
    </div>

    <script src="../js/slider.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
      crossorigin="anonymous"></script>
    <div class="social">
      <img src="../img/Telefono.png" alt="facebook" class="phone-image" onmouseover="showPhoneNumbers()"
        onmouseout="hidePhoneNumbers()"></a>
      <div id="phone-dialog">
        <h3>Líneas de Atención</h3>
        <ul>
          <li>Línea púrpura: 01 8000 112 137</li>
          <li>Comisaría de familia: 380 8400</li>
        </ul>
      </div>
      <script>
        // Función para mostrar el cuadro de diálogo de números telefónicos
        function showPhoneNumbers() {
          const phoneDialog = document.getElementById("phone-dialog");
          phoneDialog.style.display = "block";
        }

        // Función para ocultar el cuadro de diálogo de números telefónicos
        function hidePhoneNumbers() {
          const phoneDialog = document.getElementById("phone-dialog");
          phoneDialog.style.display = "none";
        }
      </script>
    </div>
</body>

</html>