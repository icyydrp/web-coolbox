<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Coolbox</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="js/script.js"></script>
</head>
<body>
    <main>
        <section class="contacto-container">
            <div class="container-contacto">
                <h2>Contacto</h2>
                <p>Ponte en contacto con nosotros para cualquier consulta, comentario o sugerencia. Estamos aquí para ayudarte.</p>
            </div>    
            <div class="container-formulario">
                <form action="procesar_contacto.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Número de Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo_consulta">Tipo de Consulta:</label>
                        <select id="tipo_consulta" name="tipo_consulta" required>
                            <option value="">--Por favor seleccione--</option>
                            <option value="consulta_producto">Consulta de Producto</option>
                            <option value="soporte_tecnico">Soporte Técnico</option>
                            <option value="informacion_servicios">Información sobre Servicios</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                    </div>
                    
                    <button type="submit">Enviar Mensaje</button>
                </form>
                <button onclick="goToHomePage()">Regresar a la página principal</button>
            </div>
        </section>
    </main>
    <?php include('include/footer.php'); ?>
</body>
</html>
