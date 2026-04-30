<x-guest-layout>
    <!--===== Breadcrumb  Section   S T A R T =====-->
    <div class="breadcrumb background-image fix" data-bg-src="assets/images/breadcumbBg1_1.jpg">
        <div class="container">
            <div class="breadcrumb-wrapper">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-content__title wow fadeInUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Cart Page</div>
                    <ul class="breadcrumb-content__items wow fadeInUp" data-wow-delay=".5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <li>
                            <a href="{{ route('welcome') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            Shop
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!--===== Special Product  Section    S T A R T =====-->
    <div class="cart2 section-padding fix">
        <div class="container">
            <div class="cart2-wrapper">
                <div class="col-lg-10 col-md-12">
                    <div class="cart2__table">
                        <div class="cart2__table-col-image">Product Details</div>
                        <div class="cart2__table-col-quantity">Quantity</div>
                        <div class="cart__table-col-shipping">Shipping</div>
                        <div class="cart2__table-col-price">Price</div>
                        <div class="cart2__table-col-remove">Action</div>
                    </div>
                    <div class="cart2-items">
                        <div class="cart2-items__info">
                            <div class="cart2-items__info-product">
                                <div class="cart2-items__info-product-image">
                                    <img src="assets/images/cart/cart-thumb1_1.jpg" alt="image">
                                </div>
                                <div class="cart2-items__info-product-content">
                                    <div class="cart2-items__info-product-content-title">Blue Flower Print Crop Top
                                    </div>
                                    <p class="cart2-items__info-product-content-subtitle">Color : Yellow</p>
                                    <p class="cart2-items__info-product-content-subtitle2">Size : M</p>
                                </div>
                            </div>
                            <div class="cart2-items__info-quantity">
                                <button class="quantity-minus qty-btn"><i class="far fa-minus"></i></button>
                                <input type="number" class="qty-input" value="1" min="1" max="99">
                                <button class="quantity-plus qty-btn"><i class="far fa-plus"></i></button>
                            </div>

                            <div class="cart2-items__info-subtitle">
                                <span>FREE</span>
                            </div>
                            <div class="cart2-items__info-price">
                                <span class="amount"><bdi><span>$</span>29.00</bdi></span>
                            </div>
                            <div class="cart2-items__info-delete">
                                <img src="assets/images/cart/delete-icon.png" alt="delete">
                            </div>
                        </div>
                        <div class="cart2-items__info">
                            <div class="cart2-items__info-product">
                                <div class="cart2-items__info-product-image">
                                    <img src="assets/images/cart/cart-thumb1_2.jpg" alt="image">
                                </div>
                                <div class="cart2-items__info-product-content">
                                    <div class="cart2-items__info-product-content-title">Levender Hoodie</div>
                                    <p class="cart2-items__info-product-content-subtitle">Color : Levender</p>
                                    <p class="cart2-items__info-product-content-subtitle2">Size : XXL</p>
                                </div>
                            </div>
                            <div class="cart2-items__info-quantity">
                                <button class="quantity-minus qty-btn"><i class="far fa-minus"></i></button>
                                <input type="number" class="qty-input" value="1" min="1" max="99">
                                <button class="quantity-plus qty-btn"><i class="far fa-plus"></i></button>
                            </div>

                            <div class="cart2-items__info-subtitle">
                                <span>FREE</span>
                            </div>
                            <div class="cart2-items__info-price">
                                <span class="amount"><bdi><span>$</span>119.00</bdi></span>
                            </div>
                            <div class="cart2-items__info-delete">
                                <img src="assets/images/cart/delete-icon.png" alt="delete">
                            </div>
                        </div>
                        <div class="cart2-items__info">
                            <div class="cart2-items__info-product">
                                <div class="cart2-items__info-product-image">
                                    <img src="assets/images/cart/cart-thumb1_3.jpg" alt="image">
                                </div>
                                <div class="cart2-items__info-product-content">
                                    <div class="cart2-items__info-product-content-title">Black Sweatshirt</div>
                                    <p class="cart2-items__info-product-content-subtitle">Color : Black</p>
                                    <p class="cart2-items__info-product-content-subtitle2">Size : XXL</p>
                                </div>
                            </div>

                            <div class="cart2-items__info-quantity">
                                <button class="quantity-minus qty-btn"><i class="far fa-minus"></i></button>
                                <input type="number" class="qty-input" value="1" min="1" max="99">
                                <button class="quantity-plus qty-btn"><i class="far fa-plus"></i></button>
                            </div>


                            <div class="cart2-items__info-subtitle">
                                <span>$5.00</span>
                            </div>

                            <div class="cart2-items__info-price">
                                <span class="amount"><bdi><span>$</span>123.00</bdi></span>
                            </div>
                            <div class="cart2-items__info-delete">
                                <img src="assets/images/cart/delete-icon.png" alt="delete">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="cart2-items-count">
                        <div class="cart2__discount-codes">
                            <div class="cart2__discount-codes-title">Discount Codes</div>
                            <p class="cart2__discount-codes-subtitle">Enter your coupon code if you have one</p>
                            <form action="#" class="cart2__discount-codes-box wow fadeInUp" data-wow-delay=".3s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <input type="email" name="email" id="email2" placeholder="Email address">
                                <button>Apply Coupon</button>
                            </form>
                            <div class="cart2__discount-codes-button">
                                <a class='theme-btn style5' href="{{ route('shop') }}">
                                    <span>Continue Shopping</span>
                                </a>
                            </div>
                        </div>
                        <div class="cart2-subtotal">
                            <div class="cart2-subtotal__totals">
                                <p class="cart2-subtotal__totals-subtitle">Sub Total</p>
                                <span class="cart2-subtotal__totals-amount"><bdi><span>$</span>513.00</bdi></span>
                            </div>
                            <div class="cart2-subtotal__totals">
                                <p class="cart2-subtotal__totals-subtitle">Shipping</p>
                                <span class="cart2-subtotal__totals-amount"><bdi><span>$</span>5.00</bdi></span>
                            </div>
                            <div class="cart2-subtotal__totals mt-5 border-bottom">
                                <p class="cart2-subtotal__totals-subtitle">Grand Total</p>
                                <span class="cart2-subtotal__totals-amount"><bdi><span>$</span>518.00</bdi></span>
                            </div>

                            <div class="cart2-subtotal__checkout mt-3">
                                <a class='theme-btn style5' href="{{ route('checkout') }}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
