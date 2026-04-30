<x-guest-layout>
    <!--===== Breadcrumb  Section   S T A R T =====-->
    <div class="breadcrumb background-image fix" data-bg-src="assets/images/breadcumbBg1_1.jpg">
        <div class="container">
            <div class="breadcrumb-wrapper">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-content__title wow fadeInUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Sign In</div>
                    <ul class="breadcrumb-content__items wow fadeInUp" data-wow-delay=".5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <li>
                            <a href="{{ route('welcome') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            Sign In
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!--===== Sign-Up  Section    S T A R T =====-->
    <div class="sign-in section-padding fix">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-4 col-lg-4">
                    <div class="sign-in-items">
                        <div class="sign-in-items__tab-header">
                            <ul class="sign-in-items__tab-header-nav border-0" role="tablist">
                                <li class="sign-in-items__tab-header-nav-item wow fadeInUp" data-wow-delay=".3s"
                                    role="presentation">
                                    <a href="#Sign-In" data-bs-toggle="tab" class="nav-link1 active"
                                        aria-selected="true" role="tab">
                                        Sign In
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="Sign-In" class="tab-pane fade show active" role="tabpanel">
                                <div class="sign-in-contact">

                                    <form method="POST" action="{{ route('login') }}" id="contact-form2"
                                        class="contact4-form">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12 wow fadeInUp" data-wow-delay=".5s">
                                                <div class="contact4-form__input">
                                                    <span class="contact4-form__input-title">Email Address</span>
                                                    <input type="text" class="contact4-form__input-field"
                                                        name="email" id="email12" placeholder="">
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
                                            <div class="col-12 wow fadeInUp" data-wow-delay=".9s">
                                                <div class="contact4-form__button mt-3">
                                                    <button type="submit" class="theme-btn style5">
                                                        <span> Sign In
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
                                        <div class="sign-up-items__footer-signin-or wow fadeInUp" data-wow-delay=".3s">
                                            <span>or</span>
                                        </div>
                                        <a href="#!" class="sign-up-items__footer-signup-button mb-3 wow fadeInUp"
                                            data-wow-delay=".3s">
                                            <svg viewBox="0 0 24 24" width="20" height="20">
                                                <path fill="#4285F4"
                                                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                                                <path fill="#34A853"
                                                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                                                <path fill="#FBBC05"
                                                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                                                <path fill="#EA4335"
                                                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                                            </svg>
                                            <p class="sign-up-items__footer-signup-button-subtitle">Sign In with Google
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
                                            <p class="sign-up-items__footer-signup-button-subtitle">Sign In with Apple
                                            </p>
                                        </a>
                                        <!-- Replace the list item with a styled button link -->
                                        <a href="{{ route('register') }}"
                                            class="sign-up-items__footer-signup-button wow fadeInUp mt-3"
                                            data-wow-delay=".3s">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M10 3.33301C5.39752 3.33301 1.66669 7.06384 1.66669 11.6663C1.66669 16.2688 5.39752 19.9997 10 19.9997C14.6025 19.9997 18.3334 16.2688 18.3334 11.6663C18.3334 7.06384 14.6025 3.33301 10 3.33301ZM13.3334 12.4997H10.8334V14.9997C10.8334 15.4597 10.4592 15.833 10 15.833C9.54085 15.833 9.16669 15.4597 9.16669 14.9997V12.4997H6.66669C6.20752 12.4997 5.83335 12.1255 5.83335 11.6663C5.83335 11.2072 6.20752 10.833 6.66669 10.833H9.16669V8.33301C9.16669 7.87384 9.54085 7.49967 10 7.49967C10.4592 7.49967 10.8334 7.87384 10.8334 8.33301V10.833H13.3334C13.7925 10.833 14.1667 11.2072 14.1667 11.6663C14.1667 12.1255 13.7925 12.4997 13.3334 12.4997Z"
                                                    fill="black" />
                                            </svg>
                                            <p class="sign-up-items__footer-signup-button-subtitle">Create New Account
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
