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
                    <li><a href="casosGeriatrico.php">Casos registrados</a>
                    <li class="actual"><a href="verGeriatrico.php">Detalles del caso</a></li>
                    <li><a class="button1" href="close.php">Salir</a>      
                </ul>
            </nav>
        </div>
    </header>
    </head>
<body>
  <p>
    <title>Detalles del Caso</title>
    <style>
        /* Estilos para el contenedor principal */
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 10px;
            border: 0px solid #ccc;
            background-color: #f9f9f9;
        }

        /* Estilos para los títulos */
        h2 {
            font-size: 24px;
            color: #333;
        }

        /* Estilos para los detalles */
        .detail-label {
            font-weight: bold;
        }

        /* Estilos para los valores */
        .detail-value {
            color: #555;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <?php

        $conexion = mysqli_connect("localhost", "root", "", "aburracuida");

        // Verificar la conexión
        if (!$conexion) {
            die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $consulta = "SELECT * FROM casos1 WHERE id = $id";
            $resultado = mysqli_query($conexion, $consulta);

            if ($resultado) {
                $fila = mysqli_fetch_assoc($resultado);

                echo "<h2>Detalles del Caso</h2>";
                echo "<p class='detail-label'>Número de caso:</p> <p class='detail-value'>" . $fila['id'] . "</p>";
                echo "<p class='detail-label'>Fecha de caso:</p> <p class='detail-value'>" . $fila['fecha'] . "</p>";
                echo "<p class='detail-label'>Nombre víctima:</p> <p class='detail-value'>" . $fila['nombre'] . "</p>";
                echo "<p class='detail-label'>Apellidos:</p> <p class='detail-value'>" . $fila['apellido'] . "</p>";
                echo "<p class='detail-label'>Tipo de identificación:</p> <p class='detail-value'>" . $fila['tipo'] . "</p>";
                echo "<p class='detail-label'>Identificación:</p> <p class='detail-value'>" . $fila['identificacion'] . "</p>";
                echo "<p class='detail-label'>Sexo:</p> <p class='detail-value'>" . $fila['sexo'] . "</p>";
                echo "<p class='detail-label'>Edad:</p> <p class='detail-value'>" . $fila['edad'] . "</p>";
                echo "<p class='detail-label'>Celular:</p> <p class='detail-value'>" . $fila['celular'] . "</p>";
                echo "<p class='detail-label'>Correo electrónico:</p> <p class='detail-value'>" . $fila['email'] . "</p>";
                echo "<p class='detail-label'>Municipio:</p> <p class='detail-value'>" . $fila['municipio'] . "</p>";
                echo "<p class='detail-label'>Residencia:</p> <p class='detail-value'>" . $fila['residencia'] . "</p>";
                echo "<p class='detail-label'>Violencia presentada:</p> <p class='detail-value'>" . $fila['tipocaso'] . "</p>";
                echo "<p class='detail-label'>Detalles:</p> <p class='detail-value'>" . $fila['detalle'] . "</p>";
                echo "<p class='detail-label'>Factor:</p> <p class='detail-value'>" . $fila['Factor'] . "</p>";
                echo "<p class='detail-label'>Nombre agresor::</p> <p class='detail-value'>" . $fila['nombreagresor'] . "</p>";
                echo "<p class='detail-label'>Dirección agresor:</p> <p class='detail-value'>" . $fila['direagresor'] . "</p>";
                echo "<p class='detail-label'>Parentesco:</p> <p class='detail-value'>" . $fila['Parentesco'] . "</p>";

            } else {
                echo "Error al obtener los datos del registro.";
            }
        } else {
            echo "ID de registro no proporcionado.";
        }
        mysqli_close($conexion);
        ?>
    </div> 
</body>
</html>
