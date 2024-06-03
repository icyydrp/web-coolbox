//formulario de contacto//
function showAlert(event) {
    alert('Tu mensaje ha sido enviado correctamente. Gracias por contactarnos.');
}

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', showAlert);
    }
});

function goToHomePage() {
    window.location.href = "index.php";
}



//////IMAGEN SLIDE /////
var index = 0;
var slides = document.getElementsByClassName("img-slide");

function showSlide() {
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    index++;
    if (index >= slides.length) {
        index = 0;
    }
    slides[index].style.display = "block";
}

setInterval(showSlide, 3000);

//////Carrito Compras////////

let cart = [];

function addToCart(productName, productPrice, productImage) {
    cart.push({ name: productName, price: parseFloat(productPrice.replace(/[^0-9.-]+/g, "")), image: productImage });
    updateCartCount();
    saveCartToLocalStorage();
    renderCartItems();
}

function updateCartCount() {
    const cartCount = document.getElementById('cart-count');
    cartCount.textContent = cart.length;
}

function saveCartToLocalStorage() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

function loadCartFromLocalStorage() {
    const storedCart = localStorage.getItem('cart');
    if (storedCart) {
        cart = JSON.parse(storedCart);
        updateCartCount();
    }
}

function removeFromCart(index) {
    cart.splice(index, 1);
    updateCartCount();
    saveCartToLocalStorage();
    renderCartItems();
}

function calculateTotal() {
    const total = cart.reduce((sum, item) => sum + item.price, 0);
    document.getElementById('total-price').textContent = total.toFixed(2);
}

function renderCartItems() {
    const cartItemsContainer = document.getElementById('cart-items-container');
    if (cartItemsContainer) {
        cartItemsContainer.innerHTML = '';
        cart.forEach((item, index) => {
            const productDiv = document.createElement('div');
            productDiv.classList.add('cart-item');
            productDiv.innerHTML = `
                <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                <div>
                    <h3>${item.name}</h3>
                    <p>Precio: S/${item.price.toFixed(2)}</p>
                    <button class="remove-item" data-index="${index}">Eliminar</button>
                </div>
            `;
            cartItemsContainer.appendChild(productDiv);
        });
        document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', (event) => {
                const index = event.target.getAttribute('data-index');
                removeFromCart(index);
            });
        });
        calculateTotal();
    }
}

document.addEventListener('DOMContentLoaded', function() {
    loadCartFromLocalStorage();
    document.querySelectorAll('.Agregar_carrito').forEach(button => {
        button.addEventListener('click', () => {
            const productCard = button.closest('.card-product, .card-computadoras, .card-tarjetasgraficas, .card-audifonos, .card-celular');
            const productName = productCard.querySelector('h3').textContent;
            const productPrice = productCard.querySelector('h4').textContent;
            const productImage = productCard.querySelector('img').src;
            addToCart(productName, productPrice, productImage);
        });
    });
    renderCartItems();
});
