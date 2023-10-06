document.getElementById("enviarCorreo").addEventListener("click", function () {
    // Dirección de correo electrónico a la que se enviará el mensaje
    var destinatario = "correo@example.com";

    // Asunto del correo
    var asunto = "Caso de violencia (Física|Sexual) | AburráCuida";

    // Cuerpo del correo
    var cuerpo = "Cordial saludo, la policia nacional a partir de este momento empezará a tratar el caso reportado mediante la plataforma de AburráCuida";

    // Construye el enlace mailto
    var enlaceMailto = "mailto:" + destinatario + "?subject=" + encodeURIComponent(asunto) + "&body=" + encodeURIComponent(cuerpo);

    // Abre el cliente de correo predeterminado con el enlace mailto
    window.location.href = enlaceMailto;
});
