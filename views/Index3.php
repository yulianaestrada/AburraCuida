<?php
// Crea un array con números del 1000 al 9999
$numeros = range(1000, 9999);

// Baraja (shuffle) el array
shuffle($numeros);

// Toma el primer número del array barajado
$numeroAleatorio = array_shift($numeros);
?>

<!DOCTYPE html>
<html>

<head>

    <title>AburráCuida</title>
    <meta charset="uft-8">
    <meta name="viewport" content="width-device-width">
    <meta name="descripcion" content="Diseño y Desarrollo Web">
    <meta name="Keywords" content="Diseño Web, desarrollo, po,posicionamiento">
    <meta name="author" content="Render2Web">
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="msapplication-tap-highlight" content="no">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/material-cards.css">
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
                    <li><a href="Index.php">Inicio</a></li>
                    <li><a href="Index2.php">Tipos de violencia</a></li>
                    <li><a href="Hacer.php">¿Qué Hago?</a></li>
                    <li class="actual"><a href="Index3.php">Reportar</a>
                    <li><a class="button1" data-bs-toggle="modal" data-bs-target="#exampleModal">Ingresar</a>

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
                                                <label for="recipient-name" class="col-form-label">Usuario:</label>
                                                <input type="text" class="form-control" id="usuario">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Contraseña:</label>
                                                <input type="password" class="form-control" id="clave">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Volver</button>
                                        <button type="button" class="btn btn-primary">Iniciar sesión</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </ul>
            </nav>
        </div>

        </ul>
        </nav>
        </div>
    </header>
    </head>

    <body id="page-top">
    <form action="../includes/validar.php" method="POST">
    <div id="form">
        <div class="form mx-auto input-center">
        <center><h1>Reportar caso</h1></center>   
        <div class="nombre-apellido">
        <input type="integer"  class="form-control" id="id" name="id" value="<?php echo $numeroAleatorio; ?>" readonly> 
        <input type="text"  class="form-control" id="fecha" name="fecha" value=" Fecha <?php echo $numeroAleatorio; ?>" readonly> 
    </div>
&nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
    <h3>Datos víctima</h3>
        <div class="nombre-apellido">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                </div>
            </div>
            <div class="nombre-apellido">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tipo de identificación</label>
                    <select class="form-select" aria-label="Default select example" id="tipo" name="tipo" required>
                        <option value="cc">Cédula Ciudadanía</option>
                        <option value="ce">Cédula Extranjera</option>
                        <option value="pp">Pasaporte</option>
                        <option value="ti">TI</option>
                        <option value="rc">RC</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Identificación</label>
                    <input type="text" class="form-control" id="identificación" name="identificacion" required>
                </div>
            </div>
            <div class="nombre-apellido">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Sexo</label>
                    <select class="form-select" aria-label="Default select example" id="sexo" name="sexo" required>
                        <option value="femenino">Femenino</option>
                        <option value="masculino">Masculino</option>
                        <option value="nodecir">Prefiero no decirlo</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Edad</label>
                    <select class="form-select" aria-label="Default select example" id="edad" name="edad" required>
                        <option value="infancia">0-11 Años</option>
                        <option value="adolecencia">12-18 Años</option>
                        <option value="juventud">19-26 Años</option>
                        <option value="adultez">27-59 Años</option>
                        <option value="vejez">60 ó más Años</option>
                    </select>
                </div>
            </div>
            <div class="nombre-apellido">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Celular</label>
                    <input type="text" class="form-control" id="celular" name="celular" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" name="email" required>
                </div>
            </div>
            <div class="nombre-apellido">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Municipio</label>
                    <select class="form-select" aria-label="Default select example" id="municipio" name="municipio" required>
                        <option value="Medellin">Medellín</option>
                        <option value="Envigado">Envigado</option>
                        <option value="Bello">Bello</option>
                        <option value="Itagui">Itagüí</option>
                        <option value="Sabaneta">Sabaneta</option>
                        <option value="La Estrella">La Estrella</option>
                        <option value="Caldas">Caldas</option>
                        <option value="Copacabana">Copacabana</option>
                        <option value="Girardota">Girardota</option>
                        <option value="Barbosa">Barbosa</option>
                        <option value="San Jeronimo">San Jerónimo</option>
                        <option value="Santa Fe de Antioquia">Santa Fe de Antioquia</option>
                        <option value="San Pedro">San Pedro de los Milagros</option>
                        <option value="San Antonio">San Antonio de Prado</option>
                        <option value="Carmen de Viboral">El Carmen de Viboral</option>
                        <option value="Rionegro">Rionegro</option>
                        <option value="La Ceja">La Ceja</option>
                        <option value="La Unión">La Unión</option>
                        <option value="Guarne">Guarne</option>
                        <option value="El Retiro">El Retiro</option>
                        <option value="Abejorral">Abejorral</option>
                        <option value="El Santuario">El Santuario</option>
                        <option value="El Peñol">El Peñol</option>
                        <option value="Granada">Granada</option>
                        <option value="Sonsón">Sonsón</option>
                        <option value="Nariño">Nariño</option>
                        <option value="Argelia">Argelia</option>
                        <option value="Urrao">Urrao</option>
                        <option value="Dabeiba">Dabeiba</option>
                        <option value="Apartado">Apartadó</option>
                        <option value="Turbo">Turbo</option>
                        <option value="Carepa">Carepa</option>
                        <option value="Chigorodó">Chigorodó</option>
                        <option value="Necoclí">Necoclí</option>
                        <option value="San Pedro de Uraba">San Pedro de Urabá</option>
                        <option value="Arboletes">Arboletes</option>
                        <option value="San Juan de Uraba">San Juan de Urabá</option>
                        <option value="San Juan de Urabá">San Juan de Urabá</option>
                        <option value="San Juan de Urabá">San Juan de Urabá</option>
                        <option value="Vigía del Fuerte">Vigía del Fuerte</option>
                        <option value="Murindó">Murindó</option>
                        <option value="Frontino">Frontino</option>
                        <option value="Dabeiba">Dabeiba</option>
                        <option value="Mutatá">Mutatá</option>
                        <option value="Turbo">Turbo</option>
                        <option value="Apartadó">Apartadó</option>
                        <option value="San Pedro de Urabá">San Pedro de Urabá</option>
                        <option value="Chigorodó">Chigorodó</option>
                        <option value="Riosucio">Riosucio</option>
                        <option value="Cáceres">Cáceres</option>
                        <option value="Tarazá">Tarazá</option>
                        <option value="Cañasgordas">Cañasgordas</option>
                        <option value="Frontino">Frontino</option>
                        <option value="Heliconia">Heliconia</option>
                        <option value="Liborina">Liborina</option>
                        <option value="Buritica">Buriticá</option>
                        <option value="Toledo">Toledo</option>
                        <option value="Santa Fe de Antioquia">Santa Fe de Antioquia</option>
                        <option value="Giraldo">Giraldo</option>
                        <option value="Peque">Peque</option>
                        <option value="Anorí">Anorí</option>
                        <option value="Yarumal">Yarumal</option>
                        <option value="Valdivia">Valdivia</option>
                        <option value="Caucasia">Caucasia</option>
                        <option value="Zaragoza">Zaragoza</option>
                        <option value="Caracolí">Caracolí</option>
                        <option value="El Bagre">El Bagre</option>
                        <option value="Nechí">Nechí</option>
                        <option value="San José de la Montaña">San José de la Montaña</option>
                        <option value="San Carlos">San Carlos</option>
                        <option value="San Rafael">San Rafael</option>
                        <option value="Guatapé">Guatapé</option>
                        <option value="San Luis">San Luis</option>
                        <option value="San Francisco">San Francisco</option>
                        <option value="Cocorná">Cocorná</option>
                        <option value="San Vicente">San Vicente Ferrer</option>
                        <option value="Puerto Triunfo">Puerto Triunfo</option>
                        <option value="Amagá">Amagá</option>
                        <option value="Titiribí">Titiribí</option>
                        <option value="Heliconia">Heliconia</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Montebello">Montebello</option>
                        <option value="Fredonia">Fredonia</option>
                        <option value="Jericó">Jericó</option>
                        <option value="Támesis">Támesis</option>
                        <option value="Tarso">Tarso</option>
                        <option value="Venecia">Venecia</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Dirección de residencia</label>
                    <input type="text" class="form-control" id="residencia" name="residencia" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tipo de violencia</label>
                    <select class="form-select" aria-label="Default select example" id="tipocaso" name="tipocaso" required>
                        <option value="fisica">Física</option>
                        <option value="verbal">Verbal</option>
                        <option value="sexual">Sexual</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="detalle" name="detalle" required>
                </div>
                <div class="mb-3">
                <h3>Datos agresor</h3>
                </div>
</div>
                <div class="nombre-apellido">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Factor</label>
                    <select class="form-select" aria-label="Default select example" id="Factor" name="Factor" required>
                        <option value="Agresor interno">Agresor interno</option>
                        <option value="Agresor externo">Agresor Externo</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" id="nombreagresor" name="nombreagresor" required>
                </div>
            </div>
            <div class="nombre-apellido">
            <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Dirección de residencia</label>
                    <input type="text" class="form-control" id="direagresor" name="direagresor" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Parentesco</label>
                    <select class="form-select" aria-label="Default select example" id="Parentesco" name="Parentesco" required>
                        <option value="Padres">Padre/Madre</option>
                        <option value="Pareja">Pareja</option>
                        <option value="Hijos">Hijos</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <button type="submit" value="Guardar" class="btn btn-success" name="registrar">Enviar</button>
            </div>
            </div>
        </div>
</div>
<script>
        // Obtiene la fecha actual
        var fechaActual = new Date();

        // Formatea la fecha como "yyyy-mm-dd" (puedes cambiar el formato si lo deseas)
        var fechaFormateada = fechaActual.getFullYear() + "-" + (fechaActual.getMonth() + 1).toString().padStart(2, '0') + "-" + fechaActual.getDate().toString().padStart(2, '0');

        // Asigna la fecha formateada al campo de entrada
        document.getElementById("fecha").value = fechaFormateada;
    </script>
    
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