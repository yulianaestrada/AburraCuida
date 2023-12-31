<!DOCTYPE html>
<html>

<head>

  <title>AburráCuida</title>
  <meta charset="uft-8">
  <meta name="viewport" content="width-device-width">
  <meta name="descripcion" content="Diseño y Desarrollo Web">
  <meta name="Keywords" content="Diseño Web, desarrollo, po,posicionamiento">
  <meta name="author" content="Render2Web">

  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/material-cards.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </style>
</head>

<body>
<header>
    <div class="contenedor">
        <div id="marca">
            <h1><span class="resaltado">Aburrá</span> Cuida</h1>
        </div>

        <nav>
            <ul>
                <li><a href="Index.php">Inicio</a></li>
                <li class="actual"><a href="Index2.php">Tipos de violencia</a></li>
                <li><a href="Hacer.php">¿Qué Hago?</a></li>
                <li><a href="Index3.php">Reportar</a></li>
                <li><a class="button1" data-bs-toggle="modal" data-bs-target="#exampleModal">Ingresar</a>
                </li> 
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">¡Bienvenido de nuevo!</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Volver"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="usuario" class="col-form-label">Usuario:</label>
                                        <input type="text" class="form-control" id="usuario">
                                    </div>
                                    <div class="mb-3">
                                        <label for="clave" class="col-form-label">Contraseña:</label>
                                        <input type="password" class="form-control" id="clave">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
                                <button type="button" class="btn btn-primary">Iniciar sesión</button>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </nav>
    </div>
</header>
  <style type="text/css">
    html {
      position: relative;
      min-height: 100%;
    }

    body {
      background-color: #ECEFF1;
      color: black;
      font-family: 'Raleway', sans-serif;
      font-weight: 300;
      font-size: 16px;
    }

    h1,
    h2,
    h3 {
      font-weight: 200;
    }
  </style>
  </head>

  <body>
    <section class="container">
      <div class="page-header">
      </div>
      <div class="row active-with-click">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <article class="material-card Red">
            <h2>
              <span>Violencia Física</span>
            </h2>
            <div class="mc-content">
              <div class="img-container">
                <img class="img-responsive" src="../img/V1.png" width="300">
              </div>
              <div class="mc-description">
                La violencia física se refiere a la utilización de la fuerza
                física con la intención de causar daño o lesiones a otra persona.
                Puede manifestarse de diversas formas, desde agresiones físicas directas como golpes,
                patadas, puñetazos, estrangulamiento o el uso de armas, hasta formas más sutiles como
                empujones, mordiscos o arañazos.
              </div>
            </div>
            <a class="mc-btn-action">
              <i class="fa fa-eye"></i>
            </a>
          </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <article class="material-card Pink">
            <h2>
              <span>Violencia Verbal</span>
            </h2>
            <div class="mc-content">
              <div class="img-container">
                <img class="img-responsive" src="../img/V2.png" width="300">
              </div>
              <div class="mc-description">
                La violencia verbal se refiere a la utilización de palabras,
                expresiones ofensivas o amenazantes con la
                intención de causar daño emocional, psicológico o moral a otra persona.
                Este tipo de violencia puede manifestarse de diversas maneras, incluyendo insultos,
                humillaciones, desprecios, amenazas verbales, gritos, burlas y cualquier
                forma de comunicación verbal que sea abusiva o agresiva.
              </div>
            </div>
            <a class="mc-btn-action">
              <i class="fa fa-eye"></i>
            </a>
          </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <article class="material-card Purple">
            <h2>
              <span>Violencia Sexual</span>
            </h2>
            <div class="mc-content">
              <div class="img-container">
                <img class="img-responsive" src="../img/V3.png" width="300">
              </div>
              <div class="mc-description">
                La violencia sexual es un tipo de agresión sexual que involucra el uso de la fuerza,
                coerción, manipulación o cualquier forma de presión para obligar a una persona a
                participar en actos sexuales no deseados o no consensuados. Este tipo de violencia
                puede ocurrir en diversas situaciones, incluyendo relaciones
                íntimas, situaciones de desconocidos o incluso en entornos familiares o laborales.
              </div>
            </div>
            <a class="mc-btn-action">
              <i class="fa fa-eye"></i>
            </a>
          </article>
        </div>

    </section>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script>
      $(function () {
        $('.material-card > .mc-btn-action').click(function () {
          var card = $(this).parent('.material-card');
          var icon = $(this).children('i');
          icon.addClass('fa-spin-fast');

          if (card.hasClass('mc-active')) {
            card.removeClass('mc-active');

            window.setTimeout(function () {
              icon
                .removeClass('fa-arrow-left')
                .removeClass('fa-spin-fast')
                .addClass('fa-eye');

            }, 800);
          } else {
            card.addClass('mc-active');

            window.setTimeout(function () {
              icon
                .removeClass('fa-eye')
                .removeClass('fa-spin-fast')
                .addClass('fa-arrow-left');

            }, 800);
          }
        });
      });
    </script>
  </body>
</html>