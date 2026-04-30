<x-app-layout>
    <!--===== Breadcrumb  Section   S T A R T =====-->
    <div class="breadcrumb background-image fix" data-bg-src="assets/images/breadcumbBg1_1.jpg">
        <div class="container">
            <div class="breadcrumb-wrapper">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-content__title wow fadeInUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Checkout Page</div>
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

    <!--===== Checkout-Page  Section   S T A R T =====-->

    <section class="checkout section-padding fix">
        <div class="container">
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="checkout-items">
                        <!-- Billing Details -->
                        <div class="billing-details">
                            <h2 class="billing-details__title">Billing Details</h2>
                            <form action="https://wear-html.netlify.app/contact.php" id="billing-form" method="POST"
                                class="billing-form">
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>First Name*</label>
                                            <input type="text" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Last Name*</label>
                                            <input type="text" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Country / Region*</label>
                                            <input type="text" placeholder="Country / Region">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="Company (optional)">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group full">
                                            <label>Street Address*</label>
                                            <input type="text" placeholder="House number and street name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Apt, suite, unit</label>
                                            <input type="text" placeholder="Apartment, suite, unit, etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>City*</label>
                                            <input type="text" placeholder="Town / City">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>State*</label>
                                            <select>
                                                <option value="">State</option>
                                                <option>California</option>
                                                <option>Texas</option>
                                                <option>New York</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Postal Code*</label>
                                            <input type="text" placeholder="Postal Code">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phone*</label>
                                            <input type="text" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="billing-button">
                                        <button class="theme-btn style5"><span>Continue To Delivery</span></button>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="checkbox">
                                            <input type="checkbox" id="save-info">
                                            <label for="save-info">Save my information for a faster checkout</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Payment Method -->
                        <div class="payment-method">
                            <h2 class="title">Payment Method</h2>
                            <p class="subtitle">All transactions are secure and encrypted.</p>
                            <div class="payment-option-items">
                                <div class="payment-option">
                                    <label>
                                        <input type="radio" name="payment" checked>
                                        <span>Credit Card</span>
                                    </label>
                                    <p>We accept all major credit cards.</p>
                                    <div class="credit-card-form border-bottom2">
                                        <div class="row g-2">
                                            <div class="col-lg-7 col-md-7">
                                                <div class="card-icons">
                                                    <img src="assets/images/checkout/pay1.png" alt="GPay">
                                                    <img src="assets/images/checkout/pay2.png" alt="Visa">
                                                    <img src="assets/images/checkout/pay3.png" alt="PayPal">
                                                    <img src="assets/images/checkout/pay4.png" alt="MasterCard">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form">
                                                    <input type="text" placeholder="Card number">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form">
                                                    <input type="text" placeholder="Name of card">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form">
                                                    <input type="text" placeholder="Expiration date (MM/YY)">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form">
                                                    <input type="text" placeholder="Security Code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-option border-bottom2">
                                    <label>
                                        <input type="radio" name="payment">
                                        <span>Cash on delivery</span>
                                    </label>
                                    <p class="hint">Pay with cash upon delivery.</p>
                                </div>
                                <div class="payment-option mt-3">
                                    <label>
                                        <input type="radio" name="payment">
                                        <span>Paypal</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5">
                    <div class="order-summary">
                        <div class="title">Order Summary</div>

                        <div class="item border-bottom">
                            <img src="assets/images/checkout/01.png" alt="Blue Flower Print Crop Top">
                            <div class="details">
                                <p class="name">Blue Flower Print Crop Top × 1</p>
                                <p class="color">Color : Yellow</p>
                            </div>
                            <span class="price">$29.00</span>
                        </div>

                        <div class="item border-bottom">
                            <img src="assets/images/checkout/02.png" alt="Lavender Hoodie">
                            <div class="details">
                                <p class="name">Lavender Hoodie × 2</p>
                                <p class="color">Color : Lavender</p>
                            </div>
                            <span class="price">$119.00</span>
                        </div>

                        <div class="item">
                            <img src="assets/images/checkout/03.png" alt="Black Sweatshirt">
                            <div class="details">
                                <p class="name">Black Sweatshirt × 2</p>
                                <p class="color">Color : Black</p>
                            </div>
                            <span class="price">$123.00</span>
                        </div>

                        <div class="summary">
                            <div class="summary-items border-bottom">
                                <span class="title2">Subtotal ( 3 items )</span>
                                <span class="subtitle">$513.00</span>
                            </div>
                            <div class="summary-items savings border-bottom">
                                <span class="title2">Savings</span>
                                <span class="subtitle">- $30.00</span>
                            </div>
                            <div class="summary-items shipping border-bottom">
                                <span class="title2">Shipping</span>
                                <span class="subtitle">- $5.00</span>
                            </div>
                            <div class="summary-items total">
                                <span class="title2">Total</span>
                                <span class="subtitle">$478.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>


