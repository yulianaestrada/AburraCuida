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
                    <li><a href="">Noticias</a></li>
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
<body>
  <p>
    
    <center><h1>Lista de Casos</h1></center>
    
    <?php
    // Establecer la conexión a la base de datos (ajusta los valores según tu configuración)
    $conexion = mysqli_connect("localhost", "root", "", "aburracuida");

    // Verificar la conexión
    if (!$conexion) {
        die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
    }

    // Consulta SQL para obtener los registros de la tabla "casos"
    $consulta = "SELECT * FROM casos";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $consulta);

    // Verificar si se encontraron registros
    if (mysqli_num_rows($resultado) > 0) {
        echo '<table border="1" class="table">
                <thead class="table-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Tipo</th>
                        <th>Identificación</th>
                        <th>Sexo</th>
                        <th>Edad</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Municipio</th>
                        <th>Residencia</th>
                        <th>Tipo de Caso</th>
                        <th>Detalle</th>
                    </tr>
                </thead>
                <tbody>';
        
        // Recorrer los registros y mostrarlos en la tabla
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<tr>
                    <td>' . $fila['nombre'] . '</td>
                    <td>' . $fila['apellido'] . '</td>
                    <td>' . $fila['tipo'] . '</td>
                    <td>' . $fila['identificacion'] . '</td>
                    <td>' . $fila['sexo'] . '</td>
                    <td>' . $fila['edad'] . '</td>
                    <td>' . $fila['celular'] . '</td>
                    <td>' . $fila['email'] . '</td>
                    <td>' . $fila['municipio'] . '</td>
                    <td>' . $fila['residencia'] . '</td>
                    <td>' . $fila['tipocaso'] . '</td>
                    <td>' . $fila['detalle'] . '</td>
                </tr>';
                
        }
        
        echo '</tbody></table>';
        echo '<tr>
        <a href="Index3.php" class="btn btn-success">Nuevo</a>
      </tr>';
    } else {
        echo "No se encontraron registros en la base de datos.";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
    ?>
</body>
</html>
