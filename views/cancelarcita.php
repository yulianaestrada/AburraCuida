<?php
$conexion = mysqli_connect("localhost", "root", "", "aburracuida");

if (!$conexion) {
    die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
}

if (isset($_POST['delete'])) {
    $idToDelete = $_POST['id'];

    $deleteQuery = "DELETE FROM agenda WHERE id = $idToDelete";

    if (mysqli_query($conexion, $deleteQuery)) {
        echo "La entrevista ha sido cancelada";
    } else {
        echo "Error al archivar el caso: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>
