<x-guest-layout>
    <!--===== Breadcrumb  Section   S T A R T =====-->
    <div class="breadcrumb background-image fix" data-bg-src="assets/images/breadcumbBg1_1.jpg">
        <div class="container">
            <div class="breadcrumb-wrapper">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-content__title wow fadeInUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Sign Up</div>
                    <ul class="breadcrumb-content__items wow fadeInUp" data-wow-delay=".5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <li>
                            <a href="{{ route('welcome') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            Sign Up
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sign-in section-padding fix">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-4 col-lg-4">
                    <div class="sign-in-items">
                        <div class="sign-in-items__tab-header">
                            <ul class="sign-in-items__tab-header-nav border-0" role="tablist">
                                <li class="sign-in-items__tab-header-nav-item wow fadeInUp" data-wow-delay=".3s"
                                    role="presentation">
                                    <a href="#Sign-Up" data-bs-toggle="tab" class="nav-link2 active"
                                        aria-selected="false" role="tab" tabindex="-1">
                                        Sign Up
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">

                            <div id="Sign-Up" class="tab-pane show active" role="tabpanel">
                                <div class="sign-up-contact">

                                    <form method="POST" action="{{ route('register') }}" id="contact-form"
                                        class="contact4-form">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                                                <div class="contact4-form__input">
                                                    <span class="contact4-form__input-title">Name</span>
                                                    <input type="text" class="contact4-form__input-field"
                                                        name="name" id="name" placeholder="">
                                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                                </div>
                                            </div>
                                            <div class="col-12 wow fadeInUp" data-wow-delay=".5s">
                                                <div class="contact4-form__input">
                                                    <span class="contact4-form__input-title">Email Address</span>
                                                    <input type="text" class="contact4-form__input-field"
                                                        name="email" id="email1" placeholder="">
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                                </div>
                                            </div>
                                            <div class="col-12 wow fadeInUp" data-wow-delay=".5s">
                                                <div class="contact4-form__input">
                                                    <span class="contact4-form__input-title">Password</span>
                                                    <input type="password" class="contact4-form__input-field"
                                                        name="password" id="password" placeholder="8+ characters">
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                                    <div class="contact4-form__input-icon">
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 3.54102C3.75 3.54102 1.25 9.99935 1.25 9.99935C1.25 9.99935 3.75 16.4577 10 16.4577C16.25 16.4577 18.75 9.99935 18.75 9.99935C18.75 9.99935 16.25 3.54102 10 3.54102Z"
                                                                stroke="#191C1F" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z"
                                                                stroke="#191C1F" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 wow fadeInUp" data-wow-delay=".5s">
                                                <div class="contact4-form__input">
                                                    <span class="contact4-form__input-title">Confirm Password</span>
                                                    <input type="password" class="contact4-form__input-field"
                                                        name="password_confirmation" id="password_confirmation"
                                                        placeholder="">
                                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                                    <div class="contact4-form__input-icon">
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 3.54102C3.75 3.54102 1.25 9.99935 1.25 9.99935C1.25 9.99935 3.75 16.4577 10 16.4577C16.25 16.4577 18.75 9.99935 18.75 9.99935C18.75 9.99935 16.25 3.54102 10 3.54102Z"
                                                                stroke="#191C1F" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z"
                                                                stroke="#191C1F" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 wow fadeInUp" data-wow-delay=".9s">
                                                <div class="contact4-form-checkbox mt-2">
                                                    <div class="contact4-form-checkbox__single">
                                                        <label class="contact4-form-checkbox__single-area">
                                                            <input type="checkbox">
                                                        </label>
                                                        <div class="contact4-form-checkbox__single-area-text">Are you
                                                            agree
                                                            to Clicon <span>Terms
                                                                of
                                                                Condition</span> and <span>Privacy Policy.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 wow fadeInUp" data-wow-delay=".9s">
                                                <div class="contact4-form__button mt-3">
                                                    <button type="submit" class="theme-btn style5">
                                                        <span> Sign up
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 20 20" fill="none">
                                                                <path d="M3.125 10H16.875" stroke="white"
                                                                    stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M11.25 4.375L16.875 10L11.25 15.625"
                                                                    stroke="white" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                    <div class="sign-up-items__footer">
                                        <div class="sign-up-items__footer-signin-or wow fadeInUp"
                                            data-wow-delay=".3s">
                                            <span>or</span>
                                        </div>
                                        <a href="#!"
                                            class="sign-up-items__footer-signup-button mb-3 wow fadeInUp"
                                            data-wow-delay=".3s">
                                            <i class="fa-brands fa-google"></i>
                                            <p class="sign-up-items__footer-signup-button-subtitle">Sign up with Google
                                            </p>
                                        </a>
                                        <a href="#!" class="sign-up-items__footer-signup-button wow fadeInUp"
                                            data-wow-delay=".3s">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M15.6313 10.534C15.6224 8.90075 16.3614 7.668 17.8572 6.76012C17.0203 5.56297 15.7559 4.90432 14.0865 4.77525C12.506 4.65064 10.7787 5.69648 10.1465 5.69648C9.47873 5.69648 7.94727 4.81976 6.74525 4.81976C4.26108 4.85981 1.62109 6.80018 1.62109 10.7477C1.62109 11.9137 1.83479 13.1182 2.26217 14.3614C2.83202 15.9947 4.8888 20 7.03463 19.9332C8.15651 19.9065 8.94895 19.1366 10.4092 19.1366C11.8249 19.1366 12.5595 19.9332 13.8104 19.9332C15.9741 19.9021 17.835 16.2617 18.3781 14.6239C15.4755 13.2577 15.6313 10.6186 15.6313 10.534ZM13.1115 3.22652C14.3269 1.7846 14.2156 0.47174 14.18 0C13.107 0.0623053 11.865 0.729862 11.1571 1.55318C10.378 2.43436 9.91947 3.5247 10.0174 4.753C11.1794 4.84201 12.2389 4.24566 13.1115 3.22652Z"
                                                    fill="black" />
                                            </svg>
                                            <p class="sign-up-items__footer-signup-button-subtitle">Sign up with Apple
                                            </p>
                                        </a>
                                        <a href="{{ route('login') }}"
                                            class="sign-up-items__footer-signup-button wow fadeInUp mt-3"
                                            data-wow-delay=".3s">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M16.6668 17.5V15.8333C16.6668 14.9493 16.3156 14.1014 15.6905 13.4763C15.0654 12.8512 14.2175 12.5 13.3335 12.5H6.66683C5.78277 12.5 4.93493 12.8512 4.30981 13.4763C3.68469 14.1014 3.3335 14.9493 3.3335 15.8333V17.5"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M10.0002 9.16667C11.8411 9.16667 13.3335 7.67428 13.3335 5.83333C13.3335 3.99238 11.8411 2.5 10.0002 2.5C8.15921 2.5 6.66683 3.99238 6.66683 5.83333C6.66683 7.67428 8.15921 9.16667 10.0002 9.16667Z"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <p class="sign-up-items__footer-signup-button-subtitle">Already have an
                                                Account
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
