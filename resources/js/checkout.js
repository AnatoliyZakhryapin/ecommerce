(function($) {
    let jsonCartItems = localStorage.getItem('cartItems') ?? '[]';
    let cartItems = JSON.parse(jsonCartItems);

    $('.cart-quantity').html(cartItems.length);
    let orderProductClass = '.order-products';
    let orderProduct = $(orderProductClass);
    let cartSummaryClass = '.cart-summary';
    let cartSummary = $(cartSummaryClass);
    if ((orderProduct.length || cartSummary.length) && cartItems.length > 0) {
        let products = [];
        cartItems.reduce(function(product, currentProduct, currentIndex, arr){
            if (!products.hasOwnProperty(currentProduct.id)) {
                products[currentProduct.id] = { product : currentProduct, counter : 1 };
            } else {
                products[currentProduct.id].counter++;
            }
        }, products);
        console.log(products);
        let totalAmount = 0;
        let currency = '';
        products.forEach(item => {
            currency = item.product.pricing.currency;
            totalAmount += (item.product.pricing.amount * item.counter); 
            orderProduct.append(`
                <div class="order-col">
                    <div>${item.counter}x ${item.product.name}</div>
                    <div>${item.product.pricing.currency} ${item.product.pricing.amount * item.counter}</div>
                </div>
            `);
        });
        $('.order-total').html(currency + totalAmount);
        cartSummary.html(`
            <small>${products.length} Item(s) selected!</small>
            <h5>SUBTOTAL: ${currency + totalAmount}</h5>
        `);
    }
})(jQuery);