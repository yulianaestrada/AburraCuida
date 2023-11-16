<?php
        $conexion = mysqli_connect("localhost", "root", "", "aburracuida");
        // Verificar la conexión
        if (!$conexion) {
            die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
        }
        $option_del_select="";
        $consulta = "SELECT * FROM casos1 where tipocaso='verbal'";
        if($result = mysqli_query($conexion, $consulta)){
            $count_reports = mysqli_num_rows($result);
            if ($count_reports>0){
                while ($lstdatos = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    $idi=$lstdatos['identificacion'];
                    $identificacion = $lstdatos['identificacion'];
                    $nombre = $lstdatos['nombre'];
                    $option_del_select .= "<option value=\"$idi\"> $identificacion | $nombre</option>";
                }

            }else{
                $option_del_select .= "<option value=\"0\">No hay</option>";
            }
        }

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
                    <li><a href="casos.php">Casos registrados</a></li>
                    <li class="actual"><a href="agendaPsicologo.php">Agenda</a></li>
                    <li><a class="button1" href="close.php">Salir</a>      
                </ul>
            </nav>
        </div>
    </header>
    </head>
<body>
  <p>
    
    <center><h1>Próximas Entrevistas</h1></center>
    <?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    // Aquí puedes realizar acciones adicionales, como almacenar los datos en una base de datos

    // Mostrar un mensaje de éxito
    echo "<p>Formulario enviado con éxito. Nombre: $nombre, Email: $email</p>";
}
?>
<body>
  <p>
    
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "aburracuida");

    if (!$conexion) {
        die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
    }

    $consulta = "SELECT * FROM agenda";

    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        echo '<table border="1" class="table" style="width: 80%;">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Datos víctima</th>
                        <th>Fecha Entrevista</th>
                        <th>Hora Entrevista</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>';
        
        // Recorrer los registros y mostrarlos en la tabla
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<tr>
                    <td>' . $fila['id'] . '</td>
                    <td>' . $fila['datos'] . '</td>
                    <td>' . $fila['entrevista'] . '</td>
                    <td>' . $fila['hora'] . '</td>
                    <td>' . $fila['Observaciones'] . '</td>
                    </td>
                    <td>
                    <form method="post" action="cancelarcita.php" onsubmit="return confirmTratado();">
                    <input type="hidden" name="id" value="' . $fila['id'] . '">
                    <button type="submit" class="btn btn-danger" name="delete">Cancelar</button>
                    </td>
                    </form>
                </tr>';

                
        }
        
        echo '</tbody></table>';
    } else {
        echo "No tiene casos asociados";
    }

    mysqli_close($conexion);
    ?>

<!-- Botón para mostrar el formulario -->
<button id="mostrarFormularioBtn" class="btn btn-success" onclick="mostrarFormulario()">Agendar Entrevista</button>

<!-- Formulario oculto -->
<div id="formulario" style="display: none;">
    <h2>Agendar Entrevista</h2>
    <form action="../includes/validare.php" method="POST">
        <!-- Agrega tus campos del formulario aquí -->
        <label for="id">ID entrevista:</label>
        <input type="integer"  class="form-control" id="id" name="id" value="<?php echo $numeroAleatorio; ?>" readonly> 
        <label for="datos" class="form-label">Datos víctima</label>
                    <select class="form-select" aria-label="Default select example" id="datos" name="datos" required>
                        <?php echo $option_del_select;?>
                    </select>
        <br>
        <label for="entrevista">Fecha entrevista:</label>
        <input type="date" id="entrevista" name="entrevista" required>
        <br>
        <label for="hora">Hora entrevista:</label>
        <input type="time" id="hora" name="hora" required>
        <br>
        <label for="Observaciones" class="form-label">Observaciones</label>
        <input type="text" class="form-control" id="Observaciones" name="Observaciones" required>
        <!-- Otros campos del formulario -->

        <br>
        <button type="submit" value="Guardar" class="btn btn-success" name="registrar">Enviar</button>
    </form>
</div>

<script>
    function mostrarFormulario() {
        // Muestra el formulario al hacer clic en el botón
        document.getElementById("formulario").style.display = "block";
    }
</script>
<script>
function confirmTratado() {
    return confirm("¿Está seguro que desea cancelar la entrevista?");
}
</script>
</body>
</html>
