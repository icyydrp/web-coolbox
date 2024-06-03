<?php include('include/header.php'); ?>
    <main>
        <div class="main-container">
            <div class="cesta-productos">
                <h2>Productos en el Carrito</h2>
                <div id="cart-items-container"></div>
            </div>
            <div class="checkout">
                <h2>Resumen de la Compra</h2>
                <div class="payment-icons">
                    <i class="fa-brands fa-cc-visa"></i>
                    <i class="fa-brands fa-cc-mastercard"></i>
                    <i class="fa-brands fa-cc-paypal"></i>
                </div>
                <p>Total: S/<span id="total-price">0</span></p>
                <a href="pago-producto.html"><button id="checkout-button">Pagar</button></a>
            </div>
        </div>
        
    </main>
    <!--------------------------->
    <!-----------Footer---------->
    <!--------------------------->
    <?php include('include/footer.php'); ?>