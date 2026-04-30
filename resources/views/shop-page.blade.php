<x-guest-layout>
    <!--===== Breadcrumb  Section   S T A R T =====-->
    <div class="breadcrumb background-image fix" data-bg-src="assets/images/breadcumbBg1_1.jpg">
        <div class="container">
            <div class="breadcrumb-wrapper">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-content__title wow fadeInUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Shop Page</div>
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


    <!--===== Shop Page  Section    S T A R T =====-->

    <section class="shop2 fix">
        <div class="container">
            <div class="row g-4 gx-60 d-flex justify-content-center justify-content-between">
                <div class="col-lg-3 col-md-4">
                    <div class="main-sidebar-1">
                        <div class="single-sidebar-widget">
                            <div class="single-sidebar-widget__wid">
                                <h3 class="single-sidebar-widget__wid-title">Search</h3>
                            </div>
                            <div class="single-sidebar-widget__search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Search products…">
                                </form>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="single-sidebar-widget__wid">
                                <h3 class="single-sidebar-widget__wid-title">Product Categories</h3>
                            </div>
                            <div class="single-sidebar-widget__widget-categories">
                                <ul>
                                    <li>
                                        <div class="text"> <input type="checkbox" class="me-2"
                                                id="productCategory1"> <label for="productCategory1">Hoodie</label>
                                        </div><span>11</span>
                                    </li>
                                    <li>
                                        <div class="text"> <input type="checkbox" class="me-2"
                                                id="productCategory2"> <label for="productCategory2">Kids</label> </div>
                                        <span>11</span>
                                    </li>
                                    <li>
                                        <div class="text"> <input type="checkbox" class="me-2"
                                                id="productCategory3"> <label for="productCategory3">Long
                                                Sleeves</label> </div><span>11</span>
                                    </li>
                                    <li>
                                        <div class="text"> <input type="checkbox" class="me-2"
                                                id="productCategory4"> <label for="productCategory4">Product
                                                Designer</label> </div><span>11</span>
                                    </li>
                                    <li>
                                        <div class="text"> <input type="checkbox" class="me-2"
                                                id="productCategory5"> <label for="productCategory5">Sweater</label>
                                        </div><span>11</span>
                                    </li>
                                    <li>
                                        <div class="text"> <input type="checkbox" class="me-2"
                                                id="productCategory6"> <label for="productCategory6">T-Shirt</label>
                                        </div><span>11</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="single-sidebar-widget__wid">
                                <h3 class="single-sidebar-widget__wid-title">Filter by price</h3>
                            </div>
                            <div class="single-sidebar-widget__filter-price-widget-categories">
                                <div class="range-slider">
                                    <div class="range-input">
                                        <input type="range" class="range-min" min="0" max="10000"
                                            value="2500" step="100">
                                        <input type="range" class="range-max" min="0" max="10000"
                                            value="7500" step="100">
                                    </div>

                                    <div class="range-slider__range-values">
                                        <div id="minPrice" class="range-slider__range-values-price">
                                            <span>Price:</span>$10 — $160</div>
                                        <button class="range-slider__range-values-title">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="single-sidebar-widget__wid">
                                <h3 class="single-sidebar-widget__wid-title">Filter by Color</h3>
                            </div>
                            <div class="single-sidebar-widget__widget-categories">
                                <ul>
                                    <li>
                                        <div class="text">
                                            <input type="checkbox" class="me-2" id="shopColorId1">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="24" height="24" rx="12"
                                                    fill="black" stroke="#EEEEEE" />
                                            </svg>
                                            <label class="form-check-label" for="shopColorId1">
                                                Black
                                            </label>

                                        </div><span>14</span>
                                    </li>

                                    <li>
                                        <div class="text">
                                            <input type="checkbox" class="me-2" id="shopColorId2">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="24" height="24" rx="12"
                                                    fill="#D7A983" stroke="#EEEEEE" />
                                            </svg>
                                            <label class="form-check-label" for="shopColorId2">
                                                Brown
                                            </label>

                                        </div><span>16</span>
                                    </li>

                                    <li>
                                        <div class="text">
                                            <input type="checkbox" class="me-2" id="shopColorId3">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="24" height="24" rx="12"
                                                    fill="#DD3333" stroke="#EEEEEE" />
                                            </svg>
                                            <label class="form-check-label" for="shopColorId3">
                                                Red
                                            </label>

                                        </div><span>13</span>
                                    </li>

                                    <li>
                                        <div class="text">
                                            <input type="checkbox" class="me-2" id="shopColorId4">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="24" height="24" rx="12"
                                                    fill="white" stroke="#EEEEEE" />
                                            </svg>
                                            <label class="form-check-label" for="shopColorId4">
                                                White
                                            </label>

                                        </div><span>15</span>
                                    </li>

                                    <li>
                                        <div class="text">
                                            <input type="checkbox" class="me-2" id="shopColorId5">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="24" height="24" rx="12"
                                                    fill="#EEEE22" stroke="#EEEEEE" />
                                            </svg>
                                            <label class="form-check-label" for="shopColorId5">
                                                Yellow
                                            </label>

                                        </div><span>13</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="shop2-items">
                        <div class="shop2-items__info">
                            <div class="shop2-items__info-pagination">
                                <p class="shop2-items__info-pagination-subtitle">Showing 1-12 of 20 results</p>
                            </div>
                            <div class="shop2-items__info-details">

                                <div class="select-dropdown">
                                    <div class="select-dropdown__selected">Default Sorting </div>
                                    <div class="select-dropdown__list">
                                        <div class="select-dropdown__item" data-value="1">Price(low-high)</div>
                                        <div class="select-dropdown__item" data-value="2">Price(High-Low)</div>
                                        <div class="select-dropdown__item" data-value="3">By rating</div>
                                    </div>
                                </div>


                                <div class="shop2-items__info-details-subtitle">See</div>



                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-grid-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-grid" type="button" role="tab"
                                            aria-controls="pills-grid" aria-selected="true">
                                            <span class="shop2-items__info-details-windows-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="58"
                                                    viewBox="0 0 32 58" fill="none">
                                                    <path
                                                        d="M0 18.7949C0 18.5241 0.0989583 18.2897 0.296875 18.0918C0.494792 17.8939 0.729167 17.7949 1 17.7949H9C9.27083 17.7949 9.50521 17.8939 9.70312 18.0918C9.90104 18.2897 10 18.5241 10 18.7949V26.7949C10 27.0658 9.90104 27.3001 9.70312 27.498C9.50521 27.696 9.27083 27.7949 9 27.7949H1C0.729167 27.7949 0.494792 27.696 0.296875 27.498C0.0989583 27.3001 0 27.0658 0 26.7949V18.7949ZM2 19.7949V25.7949H8V19.7949H2ZM12 18.7949C12 18.5241 12.099 18.2897 12.2969 18.0918C12.4948 17.8939 12.7292 17.7949 13 17.7949H21C21.2708 17.7949 21.5052 17.8939 21.7031 18.0918C21.901 18.2897 22 18.5241 22 18.7949V26.7949C22 27.0658 21.901 27.3001 21.7031 27.498C21.5052 27.696 21.2708 27.7949 21 27.7949H13C12.7292 27.7949 12.4948 27.696 12.2969 27.498C12.099 27.3001 12 27.0658 12 26.7949V18.7949ZM14 19.7949V25.7949H20V19.7949H14ZM0 30.7949C0 30.5241 0.0989583 30.2897 0.296875 30.0918C0.494792 29.8939 0.729167 29.7949 1 29.7949H9C9.27083 29.7949 9.50521 29.8939 9.70312 30.0918C9.90104 30.2897 10 30.5241 10 30.7949V38.7949C10 39.0658 9.90104 39.3001 9.70312 39.498C9.50521 39.696 9.27083 39.7949 9 39.7949H1C0.729167 39.7949 0.494792 39.696 0.296875 39.498C0.0989583 39.3001 0 39.0658 0 38.7949V30.7949ZM2 31.7949V37.7949H8V31.7949H2ZM12 30.7949C12 30.5241 12.099 30.2897 12.2969 30.0918C12.4948 29.8939 12.7292 29.7949 13 29.7949H21C21.2708 29.7949 21.5052 29.8939 21.7031 30.0918C21.901 30.2897 22 30.5241 22 30.7949V38.7949C22 39.0658 21.901 39.3001 21.7031 39.498C21.5052 39.696 21.2708 39.7949 21 39.7949H13C12.7292 39.7949 12.4948 39.696 12.2969 39.498C12.099 39.3001 12 39.0658 12 38.7949V30.7949ZM14 31.7949V37.7949H20V31.7949H14Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-list-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-list" type="button" role="tab"
                                            aria-controls="pills-list" aria-selected="false">
                                            <span class="shop2-items__info-details-toggle-bar">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="58"
                                                    viewBox="0 0 32 58" fill="none">
                                                    <path
                                                        d="M0 28.7949C0 28.5241 0.0989583 28.2897 0.296875 28.0918C0.494792 27.8939 0.729167 27.7949 1 27.7949H23C23.2708 27.7949 23.5052 27.8939 23.7031 28.0918C23.901 28.2897 24 28.5241 24 28.7949C24 29.0658 23.901 29.3001 23.7031 29.498C23.5052 29.696 23.2708 29.7949 23 29.7949H1C0.729167 29.7949 0.494792 29.696 0.296875 29.498C0.0989583 29.3001 0 29.0658 0 28.7949ZM0 20.7949C0 20.5241 0.0989583 20.2897 0.296875 20.0918C0.494792 19.8939 0.729167 19.7949 1 19.7949H23C23.2708 19.7949 23.5052 19.8939 23.7031 20.0918C23.901 20.2897 24 20.5241 24 20.7949C24 21.0658 23.901 21.3001 23.7031 21.498C23.5052 21.696 23.2708 21.7949 23 21.7949H1C0.729167 21.7949 0.494792 21.696 0.296875 21.498C0.0989583 21.3001 0 21.0658 0 20.7949ZM0 36.7949C0 36.5241 0.0989583 36.2897 0.296875 36.0918C0.494792 35.8939 0.729167 35.7949 1 35.7949H23C23.2708 35.7949 23.5052 35.8939 23.7031 36.0918C23.901 36.2897 24 36.5241 24 36.7949C24 37.0658 23.901 37.3001 23.7031 37.498C23.5052 37.696 23.2708 37.7949 23 37.7949H1C0.729167 37.7949 0.494792 37.696 0.296875 37.498C0.0989583 37.3001 0 37.0658 0 36.7949Z"
                                                        fill="#7E7E7E" />
                                                </svg>
                                            </span>
                                        </button>
                                    </li>
                                </ul>

                            </div>
                        </div>


                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-grid" role="tabpanel"
                                aria-labelledby="pills-grid-tab" tabindex="0">
                                <div class="shop2-product-items">
                                    <div class="row g-3 d-flex justify-content-center">
                                        <div class="col-xl-3 col-lg-4">
                                            <div class="shop2-product-card">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_1.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title'
                                                        href="{{ route('shop-details') }}">Carhartt Essentials
                                                        Bag</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4">
                                            <div class="shop2-product-card">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_2.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title'
                                                        href="{{ route('shop-details') }}">Denim Skinny Jeans</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4">
                                            <div class="shop2-product-card">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_3.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title'
                                                        href="{{ route('shop-details') }}">Plaid Wool Winter
                                                        Coat</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4">
                                            <div class="shop2-product-card">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_4.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title' href="{{ route('shop-details') }}">GTR
                                                        3 Pro Smart watch</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4">
                                            <div class="shop2-product-card">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_5.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title' href="{{ route('shop-details') }}">New
                                                        Balance Rainier</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4">
                                            <div class="shop2-product-card">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_6.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title'
                                                        href="{{ route('shop-details') }}">Expedita Distinctio
                                                        Rerum</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4">
                                            <div class="shop2-product-card">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_7.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title'
                                                        href="{{ route('shop-details') }}">Woman Full Sliv Dress</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4">
                                            <div class="shop2-product-card">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_8.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title'
                                                        href="{{ route('shop-details') }}">Woolrich Waxed Patch
                                                        Hat</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-list" role="tabpanel"
                                aria-labelledby="pills-list-tab" tabindex="0">
                                <div class="shop2-product-items">
                                    <div class="row g-3 d-flex justify-content-center">
                                        <div class="col-xl-12">
                                            <div
                                                class="shop2-product-card d-flex align-items-center justify-content-start">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_1.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title'
                                                        href="{{ route('shop-details') }}">Carhartt Essentials
                                                        Bag</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div
                                                class="shop2-product-card d-flex align-items-center justify-content-start">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_2.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title'
                                                        href="{{ route('shop-details') }}">Denim Skinny Jeans</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div
                                                class="shop2-product-card d-flex align-items-center justify-content-start">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_3.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title'
                                                        href="{{ route('shop-details') }}">Plaid Wool Winter
                                                        Coat</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div
                                                class="shop2-product-card d-flex align-items-center justify-content-start">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_4.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title' href="{{ route('shop-details') }}">GTR
                                                        3 Pro Smart watch</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div
                                                class="shop2-product-card d-flex align-items-center justify-content-start">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_5.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title' href="{{ route('shop-details') }}">New
                                                        Balance Rainier</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div
                                                class="shop2-product-card d-flex align-items-center justify-content-start">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_6.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title'
                                                        href="{{ route('shop-details') }}">Expedita Distinctio
                                                        Rerum</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div
                                                class="shop2-product-card d-flex align-items-center justify-content-start">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_7.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title'
                                                        href="{{ route('shop-details') }}">Woman Full Sliv Dress</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div
                                                class="shop2-product-card d-flex align-items-center justify-content-start">
                                                <div class="shop2-product-card__thumb">
                                                    <img src="assets/images/shop-page/shop-product-thumb2_8.jpg"
                                                        alt="thumb">
                                                    <div class="shop2-product-card__thumb-icons">
                                                        <a href="#!"><i class="fa-regular fa-heart"></i></a>
                                                        <a href="#!"><i
                                                                class="fa-regular fa-cart-shopping"></i></a>
                                                        <a href="#!"><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shop2-product-card__content">
                                                    <div class="shop2-product-card__rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a class='shop2-product-card__title'
                                                        href="{{ route('shop-details') }}">Woolrich Waxed Patch
                                                        Hat</a>
                                                    <div class="shop2-product-card__price">$75.00- $95.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <nav class="pagination" aria-label="Pagination Navigation">
                        <ul class="pagination__list">
                            <!-- prev -->
                            <li class="pagination__item pagination__item--disabled" aria-disabled="true">
                                <a class="pagination__link" href="#" tabindex="-1" aria-hidden="true"
                                    aria-label="Previous">&laquo;</a>
                            </li>

                            <!-- pages -->
                            <li class="pagination__item"><a class="pagination__link" href="#"
                                    aria-label="Go to page 1">1</a></li>
                            <li class="pagination__item"><a class="pagination__link" href="#"
                                    aria-label="Go to page 2">2</a></li>
                            <li class="pagination__item pagination__item--active" aria-current="page">
                                <a class="pagination__link" href="#" aria-label="Current page, page 3">3</a>
                            </li>
                            <li class="pagination__item"><a class="pagination__link" href="#"
                                    aria-label="Go to page 4">4</a></li>

                            <!-- ellipsis -->
                            <li class="pagination__item pagination__item--ellipsis" aria-hidden="true">
                                <span class="pagination__ellipsis">…</span>
                            </li>

                            <li class="pagination__item"><a class="pagination__link" href="#"
                                    aria-label="Go to page 10">10</a></li>

                            <!-- next -->
                            <li class="pagination__item">
                                <a class="pagination__link" href="#" aria-label="Next">&raquo;</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
