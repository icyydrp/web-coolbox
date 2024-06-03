<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto Recibido - Coolbox</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <main>
        <section class="contacto-container">
            <div class="container-contacto">
                <h2>Datos del Formulario de Contacto</h2>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombre = htmlspecialchars($_POST['nombre']);
                    $apellido = htmlspecialchars($_POST['apellido']);
                    $email = htmlspecialchars($_POST['email']);
                    $telefono = htmlspecialchars($_POST['telefono']);
                    $tipo_consulta = htmlspecialchars($_POST['tipo_consulta']);
                    $mensaje = htmlspecialchars($_POST['mensaje']);

                    echo "<p><strong>Nombre:</strong> $nombre</p>";
                    echo "<p><strong>Apellido:</strong> $apellido</p>";
                    echo "<p><strong>Correo Electrónico:</strong> $email</p>";
                    echo "<p><strong>Número de Teléfono:</strong> $telefono</p>";
                    echo "<p><strong>Tipo de Consulta:</strong> $tipo_consulta</p>";
                    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
                // Botón para regresar a la página principal
    echo "<button onclick=\"window.location.href='index.php'\">Regresar a la página principal</button>";
} else {
    echo "<p>No se ha enviado ningún formulario.</p>";
}
?>
                
            </div>
        </section>
    </main>
</body>
</html>
