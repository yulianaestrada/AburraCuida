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
                    <li class="actual"><a href="casos.php">Casos registrados</a>
                    <li><a class="button1" href="close.php">Salir</a>      
                </ul>
            </nav>
        </div>
    </header>
    </head>
<body>
  <p>
    
    <center><h1>Casos de violencia psicológica</h1></center>
    
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "aburracuida");

    if (!$conexion) {
        die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
    }

    $consulta = "SELECT * FROM casos1 WHERE tipocaso = 'verbal'";

    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        echo '<table border="1" class="table" style="width: 80%;">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Identificación</th>
                        <th>Tipo de violencia</th>
                    </tr>
                </thead>
                <tbody>';
        
        // Recorrer los registros y mostrarlos en la tabla
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<tr>
                    <td>' . $fila['id'] . '</td>
                    <td>' . $fila['fecha'] . '</td>
                    <td>' . $fila['nombre'] . '</td>
                    <td>' . $fila['apellido'] . '</td>
                    <td>' . $fila['identificacion'] . '</td>
                    <td>' . $fila['tipocaso'] . '</td>
                    <td>
                    <form method="post" action="tratarcaso.php" onsubmit="return confirmTratado();">
                    <input type="hidden" name="id" value="' . $fila['id'] . '">
                    <button type="submit" class="btn btn-success" name="delete">Tratado</button>
                    </form>
                    </td>
                    <td>
                    <form method="get" action="verPsicologo.php">
                    <input type="hidden" name="id" value="' . $fila['id'] . '">
                    <button type="submit" class="btn btn-success" name="ver">Ver</button>
                    </form>
                    </td>
                </tr>';
                
        }
        
        echo '</tbody></table>';
    } else {
        echo "No tiene casos asociados";
    }

    mysqli_close($conexion);
    ?>

<script>
function confirmTratado() {
    return confirm("¿Está seguro que el caso está tratado?");
}
</script>

</body>
</html>
