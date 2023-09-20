<?php
session_start();

$usuarios = [
    'Psicologo' => 'Psicologo',
    'Policia' => 'Policia'
];

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar si el usuario y la contraseña coinciden
    if (array_key_exists($username, $usuarios) && $usuarios[$username] == $password) {
        // Iniciar sesión y redirigir al usuario a la página de inicio
        $_SESSION['username'] = $username;
        header('Location: casos.php');
        exit();
    } else {
        // Mostrar un mensaje de error si las credenciales son incorrectas
        echo "Usuario o contraseña incorrectos. Vuelve a intentarlo.";
    }
}
?>
