document.addEventListener('DOMContentLoaded', () => {
    const btnCart = document.querySelector('#cart-icon');
    const cart = document.querySelector('.cart');
    const btnClose = document.querySelector('#cart-close');

    btnCart.addEventListener('click', () => {
        cart.classList.add('cart-active');
    });

    btnClose.addEventListener('click', () => {
        cart.classList.remove('cart-active');
    });

    loadContent();
});

function loadContent() {
    loadCartItems();
    updateTotal();
}

function loadCartItems() {
    const cartContent = document.querySelector('.cart-content');

    // Clear existing items in the cart
    cartContent.innerHTML = '';

    // Iterate through each item in the cart
    itemList.forEach(item => {
        const cartItemHTML = createCartItemHTML(item.name, item.price);
        cartContent.insertAdjacentHTML('beforeend', cartItemHTML);
    });

    // Add event listeners for removing items and changing quantity
    const btnRemove = document.querySelectorAll('.cart-remove');
    btnRemove.forEach(btn => {
        btn.addEventListener('click', removeItem);
    });

    const qtyElements = document.querySelectorAll('.cart-quantity');
    qtyElements.forEach(input => {
        input.addEventListener('change', changeQty);
    });
}

function removeItem() {
    if (confirm('Are you sure you want to remove this item?')) {
        const title = this.parentElement.querySelector('.cart-food-title').innerText;
        itemList = itemList.filter(item => item.name !== title);
        loadContent();
    }
}

function changeQty() {
    if (isNaN(this.value) || this.value < 1) {
        this.value = 1;
    }
    updateTotal();
}

function updateTotal() {
    let total = 0;
    const cartItems = document.querySelectorAll('.cart-box');

    cartItems.forEach(product => {
        const priceElement = product.querySelector('.cart-price');
        const price = parseFloat(priceElement.innerText.replace("Rs. ", ""));
        const qty = parseInt(product.querySelector('.cart-quantity').value);
        total += price * qty;
        product.querySelector('.cart-amt').innerText = "Rs. " + (price * qty).toFixed(2);
    });

    const totalValue = document.querySelector('.total-price');
    totalValue.innerText = 'Rs. ' + total.toFixed(2);

    const cartCount = document.querySelector('.cart-count');
    cartCount.innerText = itemList.length;
    cartCount.style.display = itemList.length ? 'block' : 'none';
}

function createCartItemHTML(name, price) {
    return `
        <div class="cart-box">
            <div class="detail-box">
                <div class="cart-food-title">${name}</div>
                <div class="price-box">
                    <div class="cart-price">Rs. ${price}</div>
                    <div class="cart-amt">Rs. ${price}</div>
                </div>
                <input type="number" value="1" class="cart-quantity">
            </div>
            <ion-icon name="trash" class="cart-remove"></ion-icon>
        </div>
    `;
}
