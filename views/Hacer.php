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
                <li><a href="Index2.php">Tipos de violencia</a></li>
                <li class="actual"><a href="Hacer.php">¿Qué Hago?</a></li>
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
              <span>Asistencia telefónica</span>
            </h2>
            <div class="mc-content">
              <div class="img-container">
                <img class="img-responsive" src="../img/telef.png" width="300">
              </div>
              <div class="mc-description">
              Se tiene a disposición el teléfono gratuito 016, este está operativo los 365 días 
              del año durante las 24 horas y no deja rastro en la factura, por lo que nadie sabrá 
              que han llamado al revisarla. En caso de que la llamada se produzca en una situación 
              de peligro inmediato, el equipo de profesionales que operan allí derivan la llamada al 
              teléfono de emergencias 112.
              También puede dar "clic" en el télefono que aparece en la parte inferior derecha de la pantalla,
              en dónde mostrará más líneas de atención disponibles.
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
              <span>Acudir a un hospital</span>
            </h2>
            <div class="mc-content">
              <div class="img-container">
                <img class="img-responsive" src="../img/hospital.png" width="300">
              </div>
              <div class="mc-description">
              El siguiente paso es acudir a un hospital o centro de salud con el propósito 
              de que el equipo de médicos que corresponda, haga un reconocimiento completo y 
              determine los daños sufridos. En este sentido, en caso de haber sufrido una violación, 
              solo hay que solicitar al personal que hagan una revisión específica. En cualquier caso, 
              ellos serán los encargados, sin intervención de la víctima, de trasladar el parte médico 
              a las entidades pertinentes.
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
              <span>Abandonar domicilio</span>
            </h2>
            <div class="mc-content">
              <div class="img-container">
                <img class="img-responsive" src="../img/casa.png" width="300">
              </div>
              <div class="mc-description">
              Las víctimas deben saber que no tienen por qué 
              tener miedo a salir de su domicilio. De hecho, pueden hacerlo libremente 
              sin renunciar a ninguno de sus derechos tras interponer la denuncia. 
              Sin embargo, también pueden hacerlo en las mismas condiciones siempre y cuando la 
              interpongan en los 30 días siguientes. Por su parte, en caso de que se posea algún temor a regresar 
              para recoger los objetos personales, la Guardia Civil y la Policía acompañarán a la víctima
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