<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coolbox</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="js/script.js"></script>
</head>
<body>
    <header>
        <div class="container-header1">
            <div class="container-custom">
                <div class="icon-horario">
                    <i class="fa-regular fa-clock"></i>
                    <span class="text">Lunes a sabados 9am a 6pm - Domingo 10am a 3pm / Av de los maestros 206, Avenida San Martin 727</span>
                </div>
                <div class="icon-number">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span class="number">111-222-333</span>
                </div>
            </div>
        </div>
        <div class="container-header2">
            <div class="container-custom2">
                <a href="index.php"><img class="logo-coolbox" src="img/logo-coolbox.jpg" alt="Coolbox Logo"></a>
            </div>
            <div>
                <nav>
                    <a class="nav-header" href="index.php">Inicio</a>
                    <a class="nav-header" href="productos.php">Productos</a>
                    <a class="nav-header" href="nosotros.php">Nosotros</a>
                    <a class="nav-header" href="contacto.php">Contacto</a>
                    <input class="bar-search" type="search" placeholder="Buscar Productos">
                    <span class="icon-search">search</span>
                    <div class="cart-container">
                        <a href="carrito.php"><i class="fa-solid fa-cart-shopping" id="cart-icon"></i></a>
                        <span id="cart-count" class="cart-count">0</span> 
                    </div>
                </nav>
            </div>
        </div>    
    </header>
    
