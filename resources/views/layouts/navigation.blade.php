<!--===== Mobilemenu    S T A R T =====-->
<div class="global-menu-wrapper onepage-nav">
    <div class="global-menu-area text-center">
        <button class="global-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href='{{ route('welcome') }}'>
                <img src="assets/images/logo/logo-mobile-menu.png" alt="logo">
            </a>
        </div>
        <nav class="global-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a class='active' href='{{ route('welcome') }}'>Home
                    </a>

                </li>
                <li class="menu-item-has-children">
                    <a href='#'> Shop
                    </a>
                    <ul class="sub-menu">
                        <li><a href='shop-page.html'>Shop Page</a></li>
                        <li><a href='shop-details.html'>Shop Details</a></li>
                        <li><a href='cart.html'>Cart Page</a></li>
                        <li><a href='checkout-page.html'>Checkout Page</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a href='#'> Pages
                    </a>
                    <ul class="sub-menu">
                        <li><a href='{{ route('login') }}'>Sign In</a></li>
                        <li><a href='{{ route('register') }}'>Sign Up</a></li>
                        <li><a href='{{ route('faq') }}'>Faqs</a></li>
                        <li><a href='{{ route('404') }}'>Error</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href='#'>Blog</a>
                    <ul class="sub-menu">
                        <li><a href='{{ route('blog') }}'>Blog Standard</a></li>
                        <li><a href='{{ route('blog-details') }}'>Blog Details</a></li>
                    </ul>
                </li>
                <li><a href='{{ route('contact') }}'>Contact</a></li>
            </ul>
        </nav>
    </div>
</div>

<!--===== Header Section    S T A R T =====-->
<header class="global-header header-layout1">
    <div class="header-top-section style1 fix">
        <div class="container-1690">
            <div class="header-top-wrapper">
                <div class="header-top-button">
                    <a class="theme-btn style6" href="#!">
                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2242_5175)">
                                <path
                                    d="M9.35885 1.19489C9.51689 0.827921 9.39903 0.399349 9.07492 0.163635C8.75082 -0.0720791 8.30885 -0.0506505 8.00617 0.211849L1.14903 6.21185C0.881175 6.44756 0.784746 6.82524 0.910639 7.15738C1.03653 7.48953 1.35796 7.71453 1.71421 7.71453H4.70082L2.641 12.5199C2.48296 12.8868 2.60082 13.3154 2.92492 13.5511C3.24903 13.7868 3.691 13.7654 3.99367 13.5029L10.8508 7.50292C11.1187 7.26721 11.2151 6.88953 11.0892 6.55738C10.9633 6.22524 10.6446 6.00292 10.2856 6.00292H7.29903L9.35885 1.19489Z"
                                    fill="#111111" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2242_5175">
                                    <rect width="12" height="13.7143" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span>Top Fashion</span></a>
                </div>
                <p>Summer Sale For All Fashion Clothes - Off 50%! Shop Now</p>
            </div>
        </div>
    </div>
    <div class="header-middle-section fix">
        <div class="container-1690">
            <div class="header-middle-wrapper">
                <div class="header-button-items">
                    <div class="heade_button">
                        <a href="#!" class="theme-btn style1">Subscribe</a>
                    </div>
                    <div class="header-user2">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="user-icon"
                                    style="background:none;border:0;padding:0;cursor:pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="23"
                                        viewBox="0 0 20 23" fill="none">
                                        <g clip-path="url(#clip0_2242_4479)">
                                            <path
                                                d="M13.5714 5.71429C13.5714 4.76708 13.1952 3.85868 12.5254 3.1889C11.8556 2.51913 10.9472 2.14286 10 2.14286C9.0528 2.14286 8.14439 2.51913 7.47462 3.1889C6.80485 3.85868 6.42857 4.76708 6.42857 5.71429C6.42857 6.66149 6.80485 7.56989 7.47462 8.23967C8.14439 8.90944 9.0528 9.28571 10 9.28571C10.9472 9.28571 11.8556 8.90944 12.5254 8.23967C13.1952 7.56989 13.5714 6.66149 13.5714 5.71429ZM4.28571 5.71429C4.28571 4.19876 4.88775 2.74531 5.95939 1.67368C7.03103 0.602039 8.48448 0 10 0C11.5155 0 12.969 0.602039 14.0406 1.67368C15.1122 2.74531 15.7143 4.19876 15.7143 5.71429C15.7143 7.22981 15.1122 8.68326 14.0406 9.7549C12.969 10.8265 11.5155 11.4286 10 11.4286C8.48448 11.4286 7.03103 10.8265 5.95939 9.7549C4.88775 8.68326 4.28571 7.22981 4.28571 5.71429ZM2.20089 20.7143H17.8036C17.4062 17.8884 14.9777 15.7143 12.0446 15.7143H7.96429C5.03125 15.7143 2.60268 17.8884 2.20536 20.7143H2.20089ZM0 21.5312C0 17.1339 3.5625 13.5714 7.95982 13.5714H12.0402C16.4375 13.5714 20 17.1339 20 21.5312C20 22.2634 19.4062 22.8571 18.6741 22.8571H1.32589C0.59375 22.8571 0 22.2634 0 21.5312Z"
                                                fill="#111111" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2242_4479">
                                                <rect width="20" height="22.8571" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </form>
                        @else
                            <a class='user-icon' href='{{ route('login') }}'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 20 23"
                                    fill="none">
                                    <g clip-path="url(#clip0_2242_4479)">
                                        <path
                                            d="M13.5714 5.71429C13.5714 4.76708 13.1952 3.85868 12.5254 3.1889C11.8556 2.51913 10.9472 2.14286 10 2.14286C9.0528 2.14286 8.14439 2.51913 7.47462 3.1889C6.80485 3.85868 6.42857 4.76708 6.42857 5.71429C6.42857 6.66149 6.80485 7.56989 7.47462 8.23967C8.14439 8.90944 9.0528 9.28571 10 9.28571C10.9472 9.28571 11.8556 8.90944 12.5254 8.23967C13.1952 7.56989 13.5714 6.66149 13.5714 5.71429ZM4.28571 5.71429C4.28571 4.19876 4.88775 2.74531 5.95939 1.67368C7.03103 0.602039 8.48448 0 10 0C11.5155 0 12.969 0.602039 14.0406 1.67368C15.1122 2.74531 15.7143 4.19876 15.7143 5.71429C15.7143 7.22981 15.1122 8.68326 14.0406 9.7549C12.969 10.8265 11.5155 11.4286 10 11.4286C8.48448 11.4286 7.03103 10.8265 5.95939 9.7549C4.88775 8.68326 4.28571 7.22981 4.28571 5.71429ZM2.20089 20.7143H17.8036C17.4062 17.8884 14.9777 15.7143 12.0446 15.7143H7.96429C5.03125 15.7143 2.60268 17.8884 2.20536 20.7143H2.20089ZM0 21.5312C0 17.1339 3.5625 13.5714 7.95982 13.5714H12.0402C16.4375 13.5714 20 17.1339 20 21.5312C20 22.2634 19.4062 22.8571 18.6741 22.8571H1.32589C0.59375 22.8571 0 22.2634 0 21.5312Z"
                                            fill="#111111" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2242_4479">
                                            <rect width="20" height="22.8571" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        @endauth
                    </div>
                </div>
                <div class="header-logo">
                    <a href='{{ route('welcome') }}'>
                        <img src="assets/images/logo/logo-home-1.svg" alt="logo">
                    </a>
                </div>

                <div class="col-auto d-none d-xl-block">
                    <div class="header-option">


                        <div class="love-icon">
                            <a href="#!" class="cart-icon">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.0001 25.1418L12.0313 23.3033C5.70424 17.5118 1.16675 13.3818 1.16675 8.3418C1.16675 4.2118 4.37508 1.00347 8.50008 1.00347C10.9542 1.00347 13.3001 2.20347 14.0001 4.32847C14.7001 2.20347 17.0459 1.00347 19.5001 1.00347C23.6251 1.00347 26.8334 4.2118 26.8334 8.3418C26.8334 13.3818 22.2959 17.5118 15.9688 23.3151L14.0001 25.1418Z"
                                        stroke="#111111" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>


                        <div class="header__icon">
                            <a href='cart.html'>
                                <span class="header__icon">
                                    <img src="assets/images/header/prodect-icon.png" alt="icon">
                                </span>
                            </a>
                        </div>
                        <div class="add-to-cart">
                            <span>Cart $0.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper2 header-bg-1">
        <!--=====Main Menu Area -->
        <div class="container-1690">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <button class="bar me-5 d-xxl-inline-flex d-none"> <i class="fa-solid fa-bars"></i>
                        </button>
                        <nav class="main-menu d-none d-xl-inline-block">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a class='active' href='{{ route('welcome') }}'>Home
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href='#'> Shop
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href='{{ route('shop') }}'>Shop Page</a></li>
                                        <li><a href='{{ route('shop-details') }}'>Shop Details</a></li>
                                        <li><a href='{{ route('cart') }}'>Cart Page</a></li>
                                        <li><a href='{{ route('checkout') }}'>Checkout Page</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href='#'> Pages
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href='{{ route('login') }}'>Sign In</a></li>
                                        <li><a href='{{ route('register') }}'>Sign Up</a></li>
                                        <li><a href='{{ route('faq') }}'>Faqs</a></li>
                                        <li><a href='{{ route('404') }}'>Error</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href='#'>Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href='{{ route('blog') }}'>Blog Standard</a></li>
                                        <li><a href='{{ route('blog-details') }}'>Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href='{{ route('contact') }}'>Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header-logo d-xl-none d-inline-flex">
                            <a href='{{ route('welcome') }}'>
                                <img src="assets/images/logo/logo-home-1.svg" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-option">
                            <div class="header-search-ber wow fadeInUp" data-wow-delay=".5s">
                                <form action="#">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit" class="header-submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26"
                                            viewBox="0 0 25 26" fill="none">
                                            <g clip-path="url(#clip0_2242_5130)">
                                                <path
                                                    d="M25.0001 24.0272L18.4772 17.5043C20.1716 15.432 21.0047 12.7877 20.8041 10.1184C20.6036 7.44913 19.3847 4.95903 17.3997 3.16318C15.4147 1.36734 12.8153 0.403152 10.1393 0.47006C7.46336 0.536968 4.91545 1.62985 3.02265 3.52265C1.12985 5.41545 0.0369681 7.96336 -0.02994 10.6393C-0.0968482 13.3153 0.867338 15.9147 2.66318 17.8997C4.45903 19.8847 6.94913 21.1036 9.61843 21.3041C12.2877 21.5047 14.932 20.6716 17.0043 18.9772L23.5272 25.5001L25.0001 24.0272ZM10.4168 19.2501C8.76863 19.2501 7.15746 18.7614 5.78705 17.8457C4.41664 16.93 3.34854 15.6286 2.71781 14.1058C2.08708 12.5831 1.92205 10.9076 2.24359 9.29105C2.56514 7.67455 3.35881 6.18969 4.52425 5.02425C5.68969 3.85881 7.17455 3.06514 8.79105 2.74359C10.4076 2.42205 12.0831 2.58708 13.6058 3.21781C15.1286 3.84854 16.43 4.91664 17.3457 6.28705C18.2614 7.65746 18.7501 9.26863 18.7501 10.9168C18.7477 13.1262 17.8689 15.2444 16.3066 16.8066C14.7444 18.3689 12.6262 19.2477 10.4168 19.2501Z"
                                                    fill="#111111" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2242_5130">
                                                    <rect width="25" height="25" fill="white"
                                                        transform="translate(0 0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <div class="dark-mode wow fadeInUp" data-wow-delay=".5s">
                                <img src="assets/images/header/dark-mode.png" alt="dark-mode">
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-flex d-xl-none">
                        <div class="header-button">
                            <button type="button" class="global-menu-toggle sidebar-btn">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
</header>
