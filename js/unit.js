let cart = {
    'tortik' : 2,
    'pmp123' : 2
}; 


document.onclick = event => {
    if (event.target.classList.contains('add-to-cart')) {
        plusFunction(event.target.dataset.id);
    }
}

const plusFunction = id => {
    cart[id]++;
    renderCart();
}

const renderCart = () => {
    console.log(cart);
}

renderCart();