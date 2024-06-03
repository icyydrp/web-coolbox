<?php include('include/header.php'); ?>
    <!--------------------------->
    <!------Main - Producto------>
    <!--------------------------->
    <main>
        <section class="Venta-Productos">
                <div class="Categoria-text">
                    <h2>Productos</h2>
                </div>
                <div class="Container-categoria">
                    <div class="card-categoria">
                        <a href="computadoras.php"><img src="img/COMPUTADORAS.png" alt="Computadora"></a>
                    </div>
                    <div class="card-categoria">
                        <a href="celulares.php"><img src="img/Celulares.png" alt="Celulares"></a>
                    </div>
                    <div class="card-categoria">
                        <a href="audifonos.php"><img src="img/Audifonos.png" alt="Audifonos"></a>
                    </div>
                    <div class="card-categoria">
                        <a href="tarjetasgraficas.php"><img src="img/tarjetasgraficas.png" alt="Tarjetas Graficas"></a>
                    </div>
                </div>    
        </section>


        <!--------------------------->
        <!------Main - Ubicacion----->
        <!--------------------------->
        <section class="ubicacion-container">
                <div class="ubicacion-info">
                    <h2 class="ubicacion-map"><i class="fa-solid fa-map-location-dot"></i> Ubicacion</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.053839368723!2d-75.7423132241153!3d-14.073998082953874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9110e2ece391ac01%3A0x6a58d6a521352bc0!2sCoolbox!5e0!3m2!1ses-419!2spe!4v1715486057336!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="container-ubicacion">
                    <h2>Tienda Principal</h2>
                    <p><i class="fa-solid fa-location-dot"></i> Av. los Maestros 206 - <span class="resaltado"> Mega Plaza </span></p>
                    <p><i class="fa-solid fa-location-dot"></i> Av. San Martin 727 - <span class="resaltado"> Plaza del Sol </span></p>
                    <span class="decor"></span>
                    <h4>Atencion al cliente de Lunes a sabados 9am a 6pm - Domingo 10am a 3pm</h4>
                    <h4>ICA PERU</h4>
                </div>
        </section>

        <!--------------------------->
        <!------Main - Nosotros------>
        <!--------------------------->
        <section class="Coolbox-info-conteiner">
            <div class="info-coolbox">
                <h2>Coolbox</h2>
                <h3>¡Conoce mas sobre Nosotros!</h3>
                <a href="https://www.facebook.com/CoolboxPe/?locale=es_LA"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.youtube.com/@CoolboxPeru"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="coolbox-yt">
                <iframe width="886" height="498" src="https://www.youtube.com/embed/kldyKolNZWo?si=vc4A-8Ys8a4-v10-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>

        <!--------------------------->
        <!------Main - Servicios----->
        <!--------------------------->
        <section class="servicios-container">
            <div class="container-servicios">
                <div class="Envios">
                    <i class="fa-solid fa-truck-fast"></i>
                    <h2>Envios Todo el Peru</h2>
                    <h3>Delivery a lima & envios provincia</h3>
                </div>
                <div class="Soporte">
                    <i class="fa-solid fa-headset"></i>
                    <h2>Soporte Tecnico</h2>
                    <h3>Atencion al cliente</h3>
                </div>
                <div class="Pagos">
                    <i class="fa-brands fa-cc-visa"></i>
                    <h2>100% Pagos Seguro</h2>
                    <h3>Aceptamos todas tus tarjetas</h3>
                </div>

                <div class="Recojo">
                    <i class="fa-solid fa-shop"></i>
                    <h2>Retiro en Tienda</h2>
                    <h3>Recojo en tienda Oficial</h3>
                </div>
            </div>
        </section>
    </main>
    
        <!--------------------------->
        <!-----------Footer---------->
        <!--------------------------->
<?php include('include/footer.php'); ?>