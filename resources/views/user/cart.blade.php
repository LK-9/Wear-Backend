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
                            Cart
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!--===== Cart Section =====-->
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

                    @if($cart->items->isEmpty())
                        <div class="cart2-items text-center py-8">
                            <p class="fs-4">Your cart is currently empty.</p>
                            <a class="theme-btn style5" href="{{ route('shop') }}">Continue Shopping</a>
                        </div>
                    @else
                        <div class="cart2-items">
                            @foreach($cart->items as $item)
                                @php
                                    $product = $item->product;
                                    $image = $product->images->first()?->path;
                                @endphp
                                <div class="cart2-items__info">
                                    <div class="cart2-items__info-product">
                                        <div class="cart2-items__info-product-image">
                                            <img src="{{ $image ? asset($image) : asset('assets/images/cart/cart-thumb1_1.jpg') }}" alt="{{ $product->name }}">
                                        </div>
                                        <div class="cart2-items__info-product-content">
                                            <div class="cart2-items__info-product-content-title">{{ $product->name }}</div>
                                            <p class="cart2-items__info-product-content-subtitle">Price: ${{ number_format($product->price, 2) }}</p>
                                            <p class="cart2-items__info-product-content-subtitle2">SKU: {{ $product->id }}</p>
                                        </div>
                                    </div>

                                    <div class="cart2-items__info-quantity">
                                        <form method="POST" action="{{ route('cart.update', $item) }}">
                                            @csrf
                                            @method('PATCH')
                                            <div class="d-flex align-items-center gap-2">
                                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" max="99" class="qty-input" />
                                                <button type="submit" class="theme-btn style5">Update</button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="cart2-items__info-subtitle">
                                        <span>FREE</span>
                                    </div>
                                    <div class="cart2-items__info-price">
                                        <span class="amount"><bdi><span>$</span>{{ number_format($item->total, 2) }}</bdi></span>
                                    </div>
                                    <div class="cart2-items__info-delete">
                                        <form method="POST" action="{{ route('cart.remove', $item) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent p-0">
                                                <img src="{{ asset('assets/images/cart/delete-icon.png') }}" alt="delete">
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
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
                                <span class="cart2-subtotal__totals-amount"><bdi><span>$</span>{{ number_format($cart->total, 2) }}</bdi></span>
                            </div>
                            <div class="cart2-subtotal__totals">
                                <p class="cart2-subtotal__totals-subtitle">Shipping</p>
                                <span class="cart2-subtotal__totals-amount"><bdi><span>$</span>0.00</bdi></span>
                            </div>
                            <div class="cart2-subtotal__totals mt-5 border-bottom">
                                <p class="cart2-subtotal__totals-subtitle">Grand Total</p>
                                <span class="cart2-subtotal__totals-amount"><bdi><span>$</span>{{ number_format($cart->total, 2) }}</bdi></span>
                            </div>

                            <div class="cart2-subtotal__checkout mt-3">
                                <a class='theme-btn style5' href="{{ route('checkout') }}">Proceed to checkout</a>
                            </div>
                            @if(!$cart->items->isEmpty())
                                <div class="mt-3">
                                    <form method="POST" action="{{ route('cart.clear') }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="theme-btn style5">Clear Cart</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
