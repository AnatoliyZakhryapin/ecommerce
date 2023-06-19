(function($) {
    let productSlickClass = '.products-slick';
    let productSlick = $(productSlickClass);
    const loadProducts = function(result) {
        console.log(result);
        result.forEach(function(product){
            productSlick.append(`<div class="product">
            <div class="product-img">
                <img src="${new URL(`../img/${product.image}`, import.meta.url).href}" alt="">
                <div class="product-label">
                    <span class="sale">-30%</span>
                    <span class="new">NEW</span>
                </div>
            </div>
            <div class="product-body">
                <p class="product-category">${product.category}</p>
                <h3 class="product-name"><a href="${import.meta.env.VITE_APP_URL}/products/${product.id}">${product.name}</a></h3>
                <h4 class="product-price">
                ${product.pricing.currency} ${product.pricing.amount - product.pricing.discount}
                <del class="product-old-price">${product.pricing.currency}${product.pricing.amount}</del>
                </h4>
                <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product-btns">
                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                </div>
            </div>
            <div class="add-to-cart">
                <button class="add-to-cart-btn add-to-cart-product" data-product='${JSON.stringify(product)}' >
                    <i class="fa fa-shopping-cart"></i> add to cart
                </button>
            </div>
        </div>`);
        });
            // Products Slick
        productSlick.each(function() {
            var $this = $(this),
            $nav = $this.attr('data-nav');

            $this.slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                infinite: true,
                speed: 300,
                dots: false,
                arrows: true,
                appendArrows: $nav ? $nav : false,
                responsive: [{
                breakpoint: 991,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                }
            },
            ]
            });
        });
        $('.add-to-cart-product').click(function(){
            let product = JSON.parse($(this).attr('data-product'));
            console.log(product);
            let jsonCartItems = localStorage.getItem('cartItems') ?? '[]';
            let cartItems = JSON.parse(jsonCartItems);
            cartItems.push(product);
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            $('.cart-quantity').html(cartItems.length);
            console.log(cartItems);
        });
    };

    if (productSlick.length) {
        $.ajax({
            url: '/api/products',
            success: loadProducts
        });
    }

})(jQuery);
