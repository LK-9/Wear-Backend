<x-guest-layout>
    <!--===== Breadcrumb  Section   S T A R T =====-->
    <div class="breadcrumb background-image fix" data-bg-src="assets/images/breadcumbBg1_1.jpg">
        <div class="container">
            <div class="breadcrumb-wrapper">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-content__title wow fadeInUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Blog Details</div>
                    <ul class="breadcrumb-content__items wow fadeInUp" data-wow-delay=".5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <li>
                            <a href="{{ route('welcome') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            Blog Details
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--=====  Blog-Details  Section   S T A R T =====-->
    <div class="blog-details section-padding fix">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-7">
                    <div class="blog-details-wrapper">
                        <div class="blog-details-wrapper-items">
                            <div class="blog-details-wrapper-items__thumb wow fadeInUp" data-wow-delay=".3s">
                                <img src="assets/images/blog-details/blogdetails-thumb1_1.jpg" alt="thumb">
                            </div>
                            <div class="blog-details-wrapper-items__title">Winds of Change in the Turbine Service</div>
                            <ul class="blog-details-wrapper-items__post wow fadeInUp" data-wow-delay=".5s">
                                <li class="blog-details-wrapper-items__post-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <mask id="mask0_2242_2323" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="20" height="20">
                                            <rect width="20" height="20" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_2242_2323)">
                                            <path
                                                d="M4.8724 14.2493C5.58073 13.7077 6.3724 13.2806 7.2474 12.9681C8.1224 12.6556 9.03906 12.4993 9.9974 12.4993C10.9557 12.4993 11.8724 12.6556 12.7474 12.9681C13.6224 13.2806 14.4141 13.7077 15.1224 14.2493C15.6085 13.6799 15.987 13.0341 16.2578 12.3118C16.5286 11.5896 16.6641 10.8188 16.6641 9.99935C16.6641 8.15213 16.0148 6.57921 14.7161 5.2806C13.4175 3.98199 11.8446 3.33268 9.9974 3.33268C8.15017 3.33268 6.57726 3.98199 5.27865 5.2806C3.98003 6.57921 3.33073 8.15213 3.33073 9.99935C3.33073 10.8188 3.46615 11.5896 3.73698 12.3118C4.00781 13.0341 4.38628 13.6799 4.8724 14.2493ZM9.9974 10.8327C9.17795 10.8327 8.48698 10.5514 7.92448 9.98893C7.36198 9.42643 7.08073 8.73546 7.08073 7.91602C7.08073 7.09657 7.36198 6.4056 7.92448 5.8431C8.48698 5.2806 9.17795 4.99935 9.9974 4.99935C10.8168 4.99935 11.5078 5.2806 12.0703 5.8431C12.6328 6.4056 12.9141 7.09657 12.9141 7.91602C12.9141 8.73546 12.6328 9.42643 12.0703 9.98893C11.5078 10.5514 10.8168 10.8327 9.9974 10.8327ZM9.9974 18.3327C8.84462 18.3327 7.76128 18.1139 6.7474 17.6764C5.73351 17.2389 4.85156 16.6452 4.10156 15.8952C3.35156 15.1452 2.75781 14.2632 2.32031 13.2493C1.88281 12.2355 1.66406 11.1521 1.66406 9.99935C1.66406 8.84657 1.88281 7.76324 2.32031 6.74935C2.75781 5.73546 3.35156 4.85352 4.10156 4.10352C4.85156 3.35352 5.73351 2.75977 6.7474 2.32227C7.76128 1.88477 8.84462 1.66602 9.9974 1.66602C11.1502 1.66602 12.2335 1.88477 13.2474 2.32227C14.2613 2.75977 15.1432 3.35352 15.8932 4.10352C16.6432 4.85352 17.237 5.73546 17.6745 6.74935C18.112 7.76324 18.3307 8.84657 18.3307 9.99935C18.3307 11.1521 18.112 12.2355 17.6745 13.2493C17.237 14.2632 16.6432 15.1452 15.8932 15.8952C15.1432 16.6452 14.2613 17.2389 13.2474 17.6764C12.2335 18.1139 11.1502 18.3327 9.9974 18.3327ZM9.9974 16.666C10.7335 16.666 11.428 16.5584 12.0807 16.3431C12.7335 16.1278 13.3307 15.8188 13.8724 15.416C13.3307 15.0132 12.7335 14.7042 12.0807 14.4889C11.428 14.2737 10.7335 14.166 9.9974 14.166C9.26128 14.166 8.56684 14.2737 7.91406 14.4889C7.26128 14.7042 6.66406 15.0132 6.1224 15.416C6.66406 15.8188 7.26128 16.1278 7.91406 16.3431C8.56684 16.5584 9.26128 16.666 9.9974 16.666ZM9.9974 9.16602C10.3585 9.16602 10.6571 9.04796 10.8932 8.81185C11.1293 8.57574 11.2474 8.27713 11.2474 7.91602C11.2474 7.5549 11.1293 7.25629 10.8932 7.02018C10.6571 6.78407 10.3585 6.66602 9.9974 6.66602C9.63628 6.66602 9.33767 6.78407 9.10156 7.02018C8.86545 7.25629 8.7474 7.5549 8.7474 7.91602C8.7474 8.27713 8.86545 8.57574 9.10156 8.81185C9.33767 9.04796 9.63628 9.16602 9.9974 9.16602Z"
                                                fill="#111111" />
                                        </g>
                                    </svg>
                                    By Admin
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_2242_2334)">
                                            <path
                                                d="M12.9109 1.23252H12.3141V0.628628C12.3141 0.283594 12.0344 0.00390625 11.6894 0.00390625C11.3444 0.00390625 11.0647 0.283594 11.0647 0.628628V1.23252H4.9353V0.628628C4.9353 0.283594 4.65561 0.00390625 4.31058 0.00390625C3.96555 0.00390625 3.68586 0.283594 3.68586 0.628628V1.23252H3.08909C1.38576 1.23252 0 2.61827 0 4.32158V12.9077C0 14.611 1.38576 15.9968 3.08909 15.9968H12.9109C14.6142 15.9968 16 14.611 16 12.9077V4.32158C16 2.61827 14.6142 1.23252 12.9109 1.23252ZM3.08909 2.48196H3.68586V3.70017C3.68586 4.0452 3.96555 4.32489 4.31058 4.32489C4.65561 4.32489 4.9353 4.0452 4.9353 3.70017V2.48196H11.0647V3.70017C11.0647 4.0452 11.3444 4.32489 11.6894 4.32489C12.0345 4.32489 12.3141 4.0452 12.3141 3.70017V2.48196H12.9109C13.9253 2.48196 14.7506 3.30722 14.7506 4.32158V4.91837H1.24944V4.32158C1.24944 3.30722 2.0747 2.48196 3.08909 2.48196ZM12.9109 14.7473H3.08909C2.0747 14.7473 1.24944 13.9221 1.24944 12.9077V6.16782H14.7506V12.9077C14.7506 13.9221 13.9253 14.7473 12.9109 14.7473ZM5.54962 8.62507C5.54962 8.9701 5.26993 9.24979 4.9249 9.24979H3.69629C3.35126 9.24979 3.07157 8.9701 3.07157 8.62507C3.07157 8.28003 3.35126 8.00035 3.69629 8.00035H4.9249C5.2699 8.00035 5.54962 8.28003 5.54962 8.62507ZM12.9285 8.62507C12.9285 8.9701 12.6488 9.24979 12.3037 9.24979H11.0751C10.7301 9.24979 10.4504 8.9701 10.4504 8.62507C10.4504 8.28003 10.7301 8.00035 11.0751 8.00035H12.3037C12.6487 8.00035 12.9285 8.28003 12.9285 8.62507ZM9.23548 8.62507C9.23548 8.9701 8.95579 9.24979 8.61076 9.24979H7.38215C7.03712 9.24979 6.75743 8.9701 6.75743 8.62507C6.75743 8.28003 7.03712 8.00035 7.38215 8.00035H8.61076C8.95576 8.00035 9.23548 8.28003 9.23548 8.62507ZM5.54962 12.3109C5.54962 12.656 5.26993 12.9356 4.9249 12.9356H3.69629C3.35126 12.9356 3.07157 12.656 3.07157 12.3109C3.07157 11.9659 3.35126 11.6862 3.69629 11.6862H4.9249C5.2699 11.6862 5.54962 11.9659 5.54962 12.3109ZM12.9285 12.3109C12.9285 12.656 12.6488 12.9356 12.3037 12.9356H11.0751C10.7301 12.9356 10.4504 12.656 10.4504 12.3109C10.4504 11.9659 10.7301 11.6862 11.0751 11.6862H12.3037C12.6487 11.6862 12.9285 11.9659 12.9285 12.3109ZM9.23548 12.3109C9.23548 12.656 8.95579 12.9356 8.61076 12.9356H7.38215C7.03712 12.9356 6.75743 12.656 6.75743 12.3109C6.75743 11.9659 7.03712 11.6862 7.38215 11.6862H8.61076C8.95576 11.6862 9.23548 11.9659 9.23548 12.3109Z"
                                                fill="#111111" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2242_2334">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    June 13
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <mask id="mask0_2242_2327" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="20" height="20">
                                            <rect width="20" height="20" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_2242_2327)">
                                            <path
                                                d="M1.66406 18.3327V3.33268C1.66406 2.87435 1.8274 2.48185 2.15406 2.15518C2.48017 1.82907 2.8724 1.66602 3.33073 1.66602H16.6641C17.1224 1.66602 17.5149 1.82907 17.8416 2.15518C18.1677 2.48185 18.3307 2.87435 18.3307 3.33268V13.3327C18.3307 13.791 18.1677 14.1835 17.8416 14.5102C17.5149 14.8363 17.1224 14.9993 16.6641 14.9993H4.9974L1.66406 18.3327ZM3.33073 14.3118L4.3099 13.3327H16.6641V3.33268H3.33073V14.3118Z"
                                                fill="#111111" />
                                        </g>
                                    </svg>
                                    (05)
                                </li>
                            </ul>
                            <div class="blog-details-wrapper-items-content wow fadeInUp" data-wow-delay=".7s">
                                <p class="blog-details-wrapper-items-content__text">Lorem ipsum is simply free text used
                                    by copytyping
                                    refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et
                                    quasi architecto
                                    beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur
                                    turpis gilla sed sit
                                    amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem
                                    Ipsum has been the ndustry standard dummy text ever since the 1500s, when an unknown
                                    printer took a
                                    galley</p>
                            </div>
                            <div class="blog-details-wrapper-items__client">
                                <img src="assets/images/blog-details/blogdetails-thumb1_2.jpg"
                                    class="blog-details-wrapper-items__client-thumb wow fadeInUp" data-wow-delay=".3s"
                                    alt="thumb">
                                <div class="blog-details-wrapper-items__client-content wow fadeInUp"
                                    data-wow-delay=".5s">
                                    <ul class="blog-details-wrapper-items__client-content-items">
                                        <li class="blog-details-wrapper-items__client-content-items-list">
                                            <div class="blog-details-wrapper-items__client-content-items-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 25 25" fill="none">
                                                    <g clip-path="url(#clip0_2242_2348)">
                                                        <path
                                                            d="M24.2867 3.41737C23.919 3.04896 23.3222 3.04832 22.9545 3.4158L11.6511 14.6893L7.57286 10.26C7.22047 9.87747 6.62467 9.85267 6.24152 10.205C5.85865 10.5574 5.83414 11.1535 6.18654 11.5364L10.929 16.6868C11.1027 16.8756 11.3458 16.9852 11.6021 16.9905C11.6089 16.9908 11.6156 16.9908 11.6222 16.9908C11.8713 16.9908 12.1109 16.8919 12.2874 16.716L24.2849 4.74993C24.6536 4.3825 24.6542 3.78577 24.2867 3.41737Z"
                                                            fill="#111111" />
                                                        <path
                                                            d="M24.0578 11.5578C23.5374 11.5578 23.1156 11.9795 23.1156 12.5C23.1156 18.3537 18.3537 23.1156 12.5 23.1156C6.64668 23.1156 1.88442 18.3537 1.88442 12.5C1.88442 6.64668 6.64668 1.88442 12.5 1.88442C13.0204 1.88442 13.4422 1.46265 13.4422 0.942236C13.4422 0.421777 13.0204 0 12.5 0C5.60742 0 0 5.60742 0 12.5C0 19.3923 5.60742 25 12.5 25C19.3923 25 25 19.3923 25 12.5C25 11.9796 24.5782 11.5578 24.0578 11.5578Z"
                                                            fill="#111111" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_2242_23488">
                                                            <rect width="25" height="25" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            Find information and begin your application
                                        </li>
                                        <li class="blog-details-wrapper-items__client-content-items-list">
                                            <div class="blog-details-wrapper-items__client-content-items-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 25 25" fill="none">
                                                    <g clip-path="url(#clip0_2242_2348)">
                                                        <path
                                                            d="M24.2867 3.41737C23.919 3.04896 23.3222 3.04832 22.9545 3.4158L11.6511 14.6893L7.57286 10.26C7.22047 9.87747 6.62467 9.85267 6.24152 10.205C5.85865 10.5574 5.83414 11.1535 6.18654 11.5364L10.929 16.6868C11.1027 16.8756 11.3458 16.9852 11.6021 16.9905C11.6089 16.9908 11.6156 16.9908 11.6222 16.9908C11.8713 16.9908 12.1109 16.8919 12.2874 16.716L24.2849 4.74993C24.6536 4.3825 24.6542 3.78577 24.2867 3.41737Z"
                                                            fill="#111111" />
                                                        <path
                                                            d="M24.0578 11.5578C23.5374 11.5578 23.1156 11.9795 23.1156 12.5C23.1156 18.3537 18.3537 23.1156 12.5 23.1156C6.64668 23.1156 1.88442 18.3537 1.88442 12.5C1.88442 6.64668 6.64668 1.88442 12.5 1.88442C13.0204 1.88442 13.4422 1.46265 13.4422 0.942236C13.4422 0.421777 13.0204 0 12.5 0C5.60742 0 0 5.60742 0 12.5C0 19.3923 5.60742 25 12.5 25C19.3923 25 25 19.3923 25 12.5C25 11.9796 24.5782 11.5578 24.0578 11.5578Z"
                                                            fill="#111111" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_2242_23485">
                                                            <rect width="25" height="25" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            We provide obtaining entry permits
                                        </li>
                                        <li class="blog-details-wrapper-items__client-content-items-list">
                                            <div class="blog-details-wrapper-items__client-content-items-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 25 25" fill="none">
                                                    <g clip-path="url(#clip0_2242_2348)">
                                                        <path
                                                            d="M24.2867 3.41737C23.919 3.04896 23.3222 3.04832 22.9545 3.4158L11.6511 14.6893L7.57286 10.26C7.22047 9.87747 6.62467 9.85267 6.24152 10.205C5.85865 10.5574 5.83414 11.1535 6.18654 11.5364L10.929 16.6868C11.1027 16.8756 11.3458 16.9852 11.6021 16.9905C11.6089 16.9908 11.6156 16.9908 11.6222 16.9908C11.8713 16.9908 12.1109 16.8919 12.2874 16.716L24.2849 4.74993C24.6536 4.3825 24.6542 3.78577 24.2867 3.41737Z"
                                                            fill="#111111" />
                                                        <path
                                                            d="M24.0578 11.5578C23.5374 11.5578 23.1156 11.9795 23.1156 12.5C23.1156 18.3537 18.3537 23.1156 12.5 23.1156C6.64668 23.1156 1.88442 18.3537 1.88442 12.5C1.88442 6.64668 6.64668 1.88442 12.5 1.88442C13.0204 1.88442 13.4422 1.46265 13.4422 0.942236C13.4422 0.421777 13.0204 0 12.5 0C5.60742 0 0 5.60742 0 12.5C0 19.3923 5.60742 25 12.5 25C19.3923 25 25 19.3923 25 12.5C25 11.9796 24.5782 11.5578 24.0578 11.5578Z"
                                                            fill="#111111" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_2242_23482">
                                                            <rect width="25" height="25" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            Ut enim veniam, quis nostrud minim exerc
                                        </li>
                                        <li class="blog-details-wrapper-items__client-content-items-list">
                                            <div class="blog-details-wrapper-items__client-content-items-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 25 25" fill="none">
                                                    <g clip-path="url(#clip0_2242_2348)">
                                                        <path
                                                            d="M24.2867 3.41737C23.919 3.04896 23.3222 3.04832 22.9545 3.4158L11.6511 14.6893L7.57286 10.26C7.22047 9.87747 6.62467 9.85267 6.24152 10.205C5.85865 10.5574 5.83414 11.1535 6.18654 11.5364L10.929 16.6868C11.1027 16.8756 11.3458 16.9852 11.6021 16.9905C11.6089 16.9908 11.6156 16.9908 11.6222 16.9908C11.8713 16.9908 12.1109 16.8919 12.2874 16.716L24.2849 4.74993C24.6536 4.3825 24.6542 3.78577 24.2867 3.41737Z"
                                                            fill="#111111" />
                                                        <path
                                                            d="M24.0578 11.5578C23.5374 11.5578 23.1156 11.9795 23.1156 12.5C23.1156 18.3537 18.3537 23.1156 12.5 23.1156C6.64668 23.1156 1.88442 18.3537 1.88442 12.5C1.88442 6.64668 6.64668 1.88442 12.5 1.88442C13.0204 1.88442 13.4422 1.46265 13.4422 0.942236C13.4422 0.421777 13.0204 0 12.5 0C5.60742 0 0 5.60742 0 12.5C0 19.3923 5.60742 25 12.5 25C19.3923 25 25 19.3923 25 12.5C25 11.9796 24.5782 11.5578 24.0578 11.5578Z"
                                                            fill="#111111" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_2242_2348">
                                                            <rect width="25" height="25" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            Apply to travel, study, work or immigrate
                                        </li>
                                        <li class="blog-details-wrapper-items__client-content-items-list">
                                            <div class="blog-details-wrapper-items__client-content-items-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 25 25" fill="none">
                                                    <g clip-path="url(#clip0_2242_2348)">
                                                        <path
                                                            d="M24.2867 3.41737C23.919 3.04896 23.3222 3.04832 22.9545 3.4158L11.6511 14.6893L7.57286 10.26C7.22047 9.87747 6.62467 9.85267 6.24152 10.205C5.85865 10.5574 5.83414 11.1535 6.18654 11.5364L10.929 16.6868C11.1027 16.8756 11.3458 16.9852 11.6021 16.9905C11.6089 16.9908 11.6156 16.9908 11.6222 16.9908C11.8713 16.9908 12.1109 16.8919 12.2874 16.716L24.2849 4.74993C24.6536 4.3825 24.6542 3.78577 24.2867 3.41737Z"
                                                            fill="#111111" />
                                                        <path
                                                            d="M24.0578 11.5578C23.5374 11.5578 23.1156 11.9795 23.1156 12.5C23.1156 18.3537 18.3537 23.1156 12.5 23.1156C6.64668 23.1156 1.88442 18.3537 1.88442 12.5C1.88442 6.64668 6.64668 1.88442 12.5 1.88442C13.0204 1.88442 13.4422 1.46265 13.4422 0.942236C13.4422 0.421777 13.0204 0 12.5 0C5.60742 0 0 5.60742 0 12.5C0 19.3923 5.60742 25 12.5 25C19.3923 25 25 19.3923 25 12.5C25 11.9796 24.5782 11.5578 24.0578 11.5578Z"
                                                            fill="#111111" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_2242_23480">
                                                            <rect width="25" height="25" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            Dolor in reprehenderit voluptate velit esse
                                        </li>
                                        <li class="blog-details-wrapper-items__client-content-items-list">
                                            <div class="blog-details-wrapper-items__client-content-items-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 25 25" fill="none">
                                                    <g clip-path="url(#clip0_2242_2348)">
                                                        <path
                                                            d="M24.2867 3.41737C23.919 3.04896 23.3222 3.04832 22.9545 3.4158L11.6511 14.6893L7.57286 10.26C7.22047 9.87747 6.62467 9.85267 6.24152 10.205C5.85865 10.5574 5.83414 11.1535 6.18654 11.5364L10.929 16.6868C11.1027 16.8756 11.3458 16.9852 11.6021 16.9905C11.6089 16.9908 11.6156 16.9908 11.6222 16.9908C11.8713 16.9908 12.1109 16.8919 12.2874 16.716L24.2849 4.74993C24.6536 4.3825 24.6542 3.78577 24.2867 3.41737Z"
                                                            fill="#111111" />
                                                        <path
                                                            d="M24.0578 11.5578C23.5374 11.5578 23.1156 11.9795 23.1156 12.5C23.1156 18.3537 18.3537 23.1156 12.5 23.1156C6.64668 23.1156 1.88442 18.3537 1.88442 12.5C1.88442 6.64668 6.64668 1.88442 12.5 1.88442C13.0204 1.88442 13.4422 1.46265 13.4422 0.942236C13.4422 0.421777 13.0204 0 12.5 0C5.60742 0 0 5.60742 0 12.5C0 19.3923 5.60742 25 12.5 25C19.3923 25 25 19.3923 25 12.5C25 11.9796 24.5782 11.5578 24.0578 11.5578Z"
                                                            fill="#111111" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_2242_234877">
                                                            <rect width="25" height="25" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            Bunt in culpa qui officia deserunt mollit anim
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="blog-details-wrapper-items-tag">
                                <div class="blog-details-wrapper-items-tag__title">We Exist to Inspire the World to
                                    Play</div>
                                <p class="blog-details-wrapper-items-tag__subtitle">England dotted with a lush, green
                                    landscape, rustic
                                    villages and throbbing with humanity. South Asian country that has plenty to offer
                                    to visitors with
                                    its diverse wildlife .We have helped students, business persons, tourists, clients
                                    with medical needs.
                                    There are many variations of passages of Lorem Ipsum available.</p>
                                <div class="blog-details-wrapper-items-tag__thumb wow fadeInUp" data-wow-delay=".5s">
                                    <div class="row g-3 d-flex align-items-center">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="blog-details-wrapper-items-tag__thumb-img">
                                                <img src="assets/images/blog-details/blogdetails-thumb1_3.jpg"
                                                    alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="blog-details-wrapper-items-tag__thumb-img">
                                                <img src="assets/images/blog-details/blogdetails-thumb1_4.jpg"
                                                    alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-details-wrapper-items-tag__thumb-title">Building smart business
                                        solution for you
                                    </div>
                                    <p class="blog-details-wrapper-items-tag__thumb-subtitle">Lorem ipsum is simply
                                        free text used by
                                        copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore
                                        veritatis et quasi
                                        architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var
                                        sed efficitur turpis
                                        gilla sed sit amet finibus eros. Lorem Ipsum</p>
                                </div>
                                <div class="blog-details-wrapper-items-comments">
                                    <div class="blog-details-wrapper-items-comments__heading">
                                        Comments (2)
                                    </div>
                                    <div class="blog-details-wrapper-items-comments-single wow fadeInUp"
                                        data-wow-delay=".3s">
                                        <div class="blog-details-wrapper-items-comments-single__thumb">
                                            <img src="assets/images/blog-details/blogdetails-thumb1_5.jpg"
                                                alt="image">
                                        </div>
                                        <div class="blog-details-wrapper-items-comments-single-content">
                                            <div
                                                class="blog-details-wrapper-items-comments-single-content-head d-flex gap-2 align-items-center justify-content-between">
                                                <div
                                                    class="blog-details-wrapper-items-comments-single-content-head__con">
                                                    <div
                                                        class="blog-details-wrapper-items-comments-single-content-head__con-title">
                                                        Isaac Herman
                                                    </div>
                                                    <div
                                                        class="blog-details-wrapper-items-comments-single-content-head__con-date">
                                                        June 14, 2023 /
                                                        12:00 AM
                                                    </div>
                                                </div>
                                                <div
                                                    class="blog-details-wrapper-items-comments-single-content-head__icon">
                                                    Reply
                                                </div>
                                            </div>
                                            <p class="blog-details-wrapper-items-comments-single-content__text">
                                                Imperdiet in nulla sed
                                                viverraut loremut dapib estetur Lorem ipsum dolor sit amet eiusmod
                                                tempor incididunt ut labore
                                                et dolore magna aliqua. Ut eniy minim sed exe ullamco laboris nisi ut
                                                aliquip cepteur</p>
                                        </div>
                                    </div>

                                    <div class="blog-details-wrapper-items-comments-single ml-46 wow fadeInUp"
                                        data-wow-delay=".5s">
                                        <div class="blog-details-wrapper-items-comments-single__thumb">
                                            <img src="assets/images/blog-details/blogdetails-thumb1_6.jpg"
                                                alt="image">
                                        </div>
                                        <div class="blog-details-wrapper-items-comments-single-content">
                                            <div
                                                class="blog-details-wrapper-items-comments-single-content-head d-flex gap-2 align-items-center justify-content-between">
                                                <div
                                                    class="blog-details-wrapper-items-comments-single-content-head__con">
                                                    <div
                                                        class="blog-details-wrapper-items-comments-single-content-head__con-title">
                                                        George Clooney
                                                    </div>
                                                    <div
                                                        class="blog-details-wrapper-items-comments-single-content-head__con-date">
                                                        June 14, 2023 /
                                                        12:10 AM
                                                    </div>
                                                </div>
                                                <div
                                                    class="blog-details-wrapper-items-comments-single-content-head__icon">
                                                    Reply
                                                </div>
                                            </div>
                                            <p class="blog-details-wrapper-items-comments-single-content__text">
                                                Imperdiet in nulla sed
                                                viverraut loremut dapib estetur Lorem ipsum dolor sit amet eiusmod
                                                tempor incididunt ut labore
                                                et dolore magna aliqua. Ut eniy minim sed exe ullamco</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-details-wrapper-items-form">
                                    <div class="blog-details-wrapper-items-form__title">Leave a Reply</div>
                                    <form action="#" id="blog-details-wrapper-items-form__contact"
                                        method="POST">
                                        <div class="row g-4">
                                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                                <div class="blog-details-wrapper-items-form__contact-clt">
                                                    <input type="text" name="name" id="name"
                                                        placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                                <div class="blog-details-wrapper-items-form__contact-clt">
                                                    <input type="text" name="email" id="email2"
                                                        placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                                <div class="blog-details-wrapper-items-form__contact-clt">
                                                    <input type="text" name="website" id="website"
                                                        placeholder="Website">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                                <div class="blog-details-wrapper-items-form__contact-clt">
                                                    <textarea name="message" id="message" placeholder="Comment"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="1s">
                                                <div class="blog-details-wrapper-items-form__button">
                                                    <a class="theme-btn style5" href="#!">Post
                                                        Comment<span></span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 20 20" fill="none">
                                                            <path
                                                                d="M14.5148 4.51562L13.6239 5.40653L17.5882 9.37089H0V10.6308H17.5882L13.6239 14.5951L14.5148 15.4861L20 10.0008L14.5148 4.51562Z"
                                                                fill="white" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="main-sidebar2">
                        <div class="main-sidebar2-widget style">
                            <div class="main-sidebar2-widget__search-widget wow fadeInUp" data-wow-delay=".5s">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 25 25" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.4173 3.64648C6.68086 3.64648 3.64648 6.68086 3.64648 10.4173C3.64648 14.1538 6.68086 17.1882 10.4173 17.1882C14.1538 17.1882 17.1882 14.1538 17.1882 10.4173C17.1882 6.68086 14.1538 3.64648 10.4173 3.64648ZM10.4173 4.68815C13.5798 4.68815 16.1465 7.25482 16.1465 10.4173C16.1465 13.5798 13.5798 16.1465 10.4173 16.1465C7.25482 16.1465 4.68815 13.5798 4.68815 10.4173C4.68815 7.25482 7.25482 4.68815 10.4173 4.68815Z"
                                                fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M21.2022 20.4647L15.2033 14.4668C15.0001 14.2637 14.6699 14.2637 14.4668 14.4668C14.2637 14.6699 14.2637 15.0001 14.4668 15.2033L20.4647 21.2022C20.6689 21.4053 20.998 21.4053 21.2022 21.2022C21.4053 20.998 21.4053 20.6689 21.2022 20.4647Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="main-sidebar2-widget">
                            <div class="main-sidebar2-widget__heading wow fadeInUp" data-wow-delay=".3s">
                                <div class="main-sidebar2-widget__heading-title">Categories</div>
                            </div>
                            <div class="main-sidebar2-widget__categories wow fadeInUp" data-wow-delay=".5s">
                                <ul class="main-sidebar2-widget__categories-items">
                                    <li class="main-sidebar2-widget__categories-items-text"><a
                                            href="{{ route('blog-details') }}">Accessories</a>
                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                    </li>
                                    <li class="main-sidebar2-widget__categories-items-text"><a
                                            href="{{ route('blog-details') }}">Collection</a><span><i
                                                class="fa-solid fa-angle-right"></i></span></li>
                                    <li class="main-sidebar2-widget__categories-items-text"><a
                                            href="{{ route('blog-details') }}">Fashion</a><span><i
                                                class="fa-solid fa-angle-right"></i></span></li>
                                    <li class="main-sidebar2-widget__categories-items-text"><a
                                            href="{{ route('blog-details') }}">Interior</a><span><i
                                                class="fa-solid fa-angle-right"></i></span></li>
                                    <li class="main-sidebar2-widget__categories-items-text"><a
                                            href="{{ route('blog-details') }}">Lifestyle</a><span><i
                                                class="fa-solid fa-angle-right"></i></span></li>
                                    <li class="main-sidebar2-widget__categories-items-text"><a
                                            href="{{ route('blog-details') }}">On Point
                                            Distribution</a><span><i class="fa-solid fa-angle-right"></i></span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="main-sidebar2-widget">
                            <div class="main-sidebar2-widget__heading wow fadeInUp" data-wow-delay=".3s">
                                <div class="main-sidebar2-widget__heading-title">Popular Post</div>
                            </div>
                            <div class="main-sidebar2-widget__post">
                                <div class="main-sidebar2-widget__post-items wow fadeInUp" data-wow-delay=".4s">
                                    <div class="main-sidebar2-widget__post-items-thumb">
                                        <img src="assets/images/blog-details/pp1.jpg" alt="thumb">
                                    </div>
                                    <div class="main-sidebar2-widget__post-items-content">
                                        <ul class="main-sidebar2-widget__post-items-content-post">
                                            <li class="main-sidebar2-widget__post-items-content-post-date">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path
                                                        d="M11.875 3.125H11.25V1.875C11.25 1.70924 11.1842 1.55027 11.0669 1.43306C10.9497 1.31585 10.7908 1.25 10.625 1.25C10.4592 1.25 10.3003 1.31585 10.1831 1.43306C10.0658 1.55027 10 1.70924 10 1.875V3.125H5V1.875C5 1.70924 4.93415 1.55027 4.81694 1.43306C4.69973 1.31585 4.54076 1.25 4.375 1.25C4.20924 1.25 4.05027 1.31585 3.93306 1.43306C3.81585 1.55027 3.75 1.70924 3.75 1.875V3.125H3.125C2.62772 3.125 2.15081 3.32254 1.79917 3.67418C1.44754 4.02581 1.25 4.50272 1.25 5V5.625H13.75V5C13.75 4.50272 13.5525 4.02581 13.2008 3.67418C12.8492 3.32254 12.3723 3.125 11.875 3.125Z"
                                                        fill="#111111" />
                                                    <path
                                                        d="M1.25 11.875C1.25 12.3723 1.44754 12.8492 1.79917 13.2008C2.15081 13.5525 2.62772 13.75 3.125 13.75H11.875C12.3723 13.75 12.8492 13.5525 13.2008 13.2008C13.5525 12.8492 13.75 12.3723 13.75 11.875V6.875H1.25V11.875Z"
                                                        fill="#111111" />
                                                </svg>
                                                June 13
                                            </li>
                                            <li class="main-sidebar2-widget__post-items-content-post-date">
                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.666016 17.3327V2.33268C0.666016 1.87435 0.829349 1.48185 1.15602 1.15518C1.48213 0.829071 1.87435 0.666016 2.33268 0.666016H15.666C16.1243 0.666016 16.5168 0.829071 16.8435 1.15518C17.1696 1.48185 17.3327 1.87435 17.3327 2.33268V12.3327C17.3327 12.791 17.1696 13.1835 16.8435 13.5102C16.5168 13.8363 16.1243 13.9993 15.666 13.9993H3.99935L0.666016 17.3327ZM2.33268 13.3118L3.31185 12.3327H15.666V2.33268H2.33268V13.3118Z"
                                                        fill="#111111" />
                                                </svg>
                                                (05)
                                            </li>
                                        </ul>
                                        <div class="main-sidebar2-widget__post-items-content-title">
                                            <a href="{{ route('blog-details') }}">
                                                This Place Really Place For Awesome Moment
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-sidebar2-widget__post-items wow fadeInUp" data-wow-delay=".6s">
                                    <div class="main-sidebar2-widget__post-items-thumb">
                                        <img src="assets/images/blog-details/pp2.jpg" alt="thumb">
                                    </div>
                                    <div class="main-sidebar2-widget__post-items-content">
                                        <ul class="main-sidebar2-widget__post-items-content-post">
                                            <li class="main-sidebar2-widget__post-items-content-post-date">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path
                                                        d="M11.875 3.125H11.25V1.875C11.25 1.70924 11.1842 1.55027 11.0669 1.43306C10.9497 1.31585 10.7908 1.25 10.625 1.25C10.4592 1.25 10.3003 1.31585 10.1831 1.43306C10.0658 1.55027 10 1.70924 10 1.875V3.125H5V1.875C5 1.70924 4.93415 1.55027 4.81694 1.43306C4.69973 1.31585 4.54076 1.25 4.375 1.25C4.20924 1.25 4.05027 1.31585 3.93306 1.43306C3.81585 1.55027 3.75 1.70924 3.75 1.875V3.125H3.125C2.62772 3.125 2.15081 3.32254 1.79917 3.67418C1.44754 4.02581 1.25 4.50272 1.25 5V5.625H13.75V5C13.75 4.50272 13.5525 4.02581 13.2008 3.67418C12.8492 3.32254 12.3723 3.125 11.875 3.125Z"
                                                        fill="#111111" />
                                                    <path
                                                        d="M1.25 11.875C1.25 12.3723 1.44754 12.8492 1.79917 13.2008C2.15081 13.5525 2.62772 13.75 3.125 13.75H11.875C12.3723 13.75 12.8492 13.5525 13.2008 13.2008C13.5525 12.8492 13.75 12.3723 13.75 11.875V6.875H1.25V11.875Z"
                                                        fill="#111111" />
                                                </svg>
                                                June 13
                                            </li>
                                            <li class="main-sidebar2-widget__post-items-content-post-date">
                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.666016 17.3327V2.33268C0.666016 1.87435 0.829349 1.48185 1.15602 1.15518C1.48213 0.829071 1.87435 0.666016 2.33268 0.666016H15.666C16.1243 0.666016 16.5168 0.829071 16.8435 1.15518C17.1696 1.48185 17.3327 1.87435 17.3327 2.33268V12.3327C17.3327 12.791 17.1696 13.1835 16.8435 13.5102C16.5168 13.8363 16.1243 13.9993 15.666 13.9993H3.99935L0.666016 17.3327ZM2.33268 13.3118L3.31185 12.3327H15.666V2.33268H2.33268V13.3118Z"
                                                        fill="#111111" />
                                                </svg>
                                                (05)
                                            </li>
                                        </ul>
                                        <div class="main-sidebar2-widget__post-items-content-title">
                                            <a href="{{ route('blog-details') }}">
                                                This Place Really Place For Awesome Moment
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-sidebar2-widget__post-items wow fadeInUp" data-wow-delay=".8s">
                                    <div class="main-sidebar2-widget__post-items-thumb">
                                        <img src="assets/images/blog-details/pp3.jpg" alt="thumb">
                                    </div>
                                    <div class="main-sidebar2-widget__post-items-content">
                                        <ul class="main-sidebar2-widget__post-items-content-post">
                                            <li class="main-sidebar2-widget__post-items-content-post-date">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path
                                                        d="M11.875 3.125H11.25V1.875C11.25 1.70924 11.1842 1.55027 11.0669 1.43306C10.9497 1.31585 10.7908 1.25 10.625 1.25C10.4592 1.25 10.3003 1.31585 10.1831 1.43306C10.0658 1.55027 10 1.70924 10 1.875V3.125H5V1.875C5 1.70924 4.93415 1.55027 4.81694 1.43306C4.69973 1.31585 4.54076 1.25 4.375 1.25C4.20924 1.25 4.05027 1.31585 3.93306 1.43306C3.81585 1.55027 3.75 1.70924 3.75 1.875V3.125H3.125C2.62772 3.125 2.15081 3.32254 1.79917 3.67418C1.44754 4.02581 1.25 4.50272 1.25 5V5.625H13.75V5C13.75 4.50272 13.5525 4.02581 13.2008 3.67418C12.8492 3.32254 12.3723 3.125 11.875 3.125Z"
                                                        fill="#111111" />
                                                    <path
                                                        d="M1.25 11.875C1.25 12.3723 1.44754 12.8492 1.79917 13.2008C2.15081 13.5525 2.62772 13.75 3.125 13.75H11.875C12.3723 13.75 12.8492 13.5525 13.2008 13.2008C13.5525 12.8492 13.75 12.3723 13.75 11.875V6.875H1.25V11.875Z"
                                                        fill="#111111" />
                                                </svg>
                                                June 13
                                            </li>
                                            <li class="main-sidebar2-widget__post-items-content-post-date">
                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.666016 17.3327V2.33268C0.666016 1.87435 0.829349 1.48185 1.15602 1.15518C1.48213 0.829071 1.87435 0.666016 2.33268 0.666016H15.666C16.1243 0.666016 16.5168 0.829071 16.8435 1.15518C17.1696 1.48185 17.3327 1.87435 17.3327 2.33268V12.3327C17.3327 12.791 17.1696 13.1835 16.8435 13.5102C16.5168 13.8363 16.1243 13.9993 15.666 13.9993H3.99935L0.666016 17.3327ZM2.33268 13.3118L3.31185 12.3327H15.666V2.33268H2.33268V13.3118Z"
                                                        fill="#111111" />
                                                </svg>
                                                (05)
                                            </li>
                                        </ul>
                                        <div class="main-sidebar2-widget__post-items-content-title">
                                            <a href="{{ route('blog-details') }}">
                                                This Place Really Place For Awesome Moment
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="main-sidebar2-widget wow fadeInUp" data-wow-delay=".9s">
                            <div class="main-sidebar2-widget__heading">
                                <div class="main-sidebar2-widget__heading-title">Popular Tags</div>
                            </div>
                            <div class="main-sidebar2-widget__tags">
                                <div class="main-sidebar2-widget__tags-tagcloud">
                                    <a href="{{ route('blog-details') }}">Social Media</a>
                                    <a class='active' href="{{ route('blog-details') }}">Digital</a>
                                    <a href="{{ route('blog-details') }}">Marketing</a>
                                    <a href="{{ route('blog-details') }}">Social</a>
                                    <a href="{{ route('blog-details') }}">SEO Services</a>
                                    <a href="{{ route('blog-details') }}">SEO </a>
                                    <a href="{{ route('blog-details') }}">Education</a>
                                    <a href="{{ route('blog-details') }}">America</a>
                                    <a href="{{ route('blog-details') }}">Analysis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
