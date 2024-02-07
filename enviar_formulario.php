<?php
// Correo electrónico al que se enviará el formulario
$destinatario = 'mifran@nini.com.ar';

// Sujeto del correo electrónico
$asunto = 'Nuevo formulario de mantenimiento';

// Mensaje que se enviará por correo electrónico
$mensaje = 'Sector: ' . $_GET['sector'] . "\r\n";
$mensaje .= 'Nombre: ' . $_GET['nombre'] . "\r\n";
$mensaje .= 'Status de la máquina: ' . $_GET['status'] . "\r\n";
$mensaje .= 'Observaciones: ' . $_GET['observaciones'];

// Cabeceras del correo electrónico
$cabeceras = 'From: mifran@nini.com.ar' . "\r\n" .
    'Reply-To: mifran@nini.com.ar' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Envío del correo electrónico
if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
    // Redirección a una página de confirmación si el correo se envió correctamente
    header('Location: confirmacion.html');
} else {
    // Si hubo un error al enviar el correo, redirigir a una página de error
    header('Location: error.html');
}
?>