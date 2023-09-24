<?php
session_start();

$usuarios = [
    'Psicologo' => 'Psicologo',
    'Policia' => 'Policia',
    'Bienestar' => 'Bienestar',
    'Geriatrico' => 'Geriatrico'
];

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar si el usuario y la contraseña coinciden
    if (array_key_exists($username, $usuarios) && $usuarios[$username] == $password) {
        // Iniciar sesión y redirigir al usuario a la página correspondiente
        $_SESSION['username'] = $username;

        // Redirigir a la página correspondiente según el tipo de usuario
        if ($username === 'Psicologo') {
            header('Location: casos.php');
        } elseif ($username === 'Policia') {
            header('Location: casosPolicia.php');
        } elseif ($username === 'Bienestar') {
            header('Location: casosBienestar.php');
        } elseif ($username === 'Geriatrico') {
            header('Location: casosGeriatrico.php');
        }        

        exit();
    } else {
        // Mostrar un mensaje de error si las credenciales son incorrectas
        echo "Usuario o contraseña incorrectos. Vuelve a intentarlo.";
    }
}
?>
