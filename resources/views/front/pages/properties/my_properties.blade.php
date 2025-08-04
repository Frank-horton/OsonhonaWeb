@extends('front.includes.layout')

@section('preloader')
    @include('front.includes.preloader')
@endsection

@section('content')
    <!--===== PROGRESS STARTS=======-->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>
    <!--===== PROGRESS ENDS=======-->

    <!--=====HEADER START=======-->
    @include('front.includes.header')
    <!--=====HEADER ENDS=======-->

    <!--===== HERO AREA STARTS =======-->
    @include('front.includes.hero')
    <!--===== HERO AREA ENDS =======-->

    <!--===== SIDEBAR STARTS=======-->
    {{-- <div class="header-site-icon">
        <div class="slide-bar slide-bar1">
            <div class="sidebar-info">
                <div class="sidebar-logo">
                    <div class="close-mobile-menu">
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <h3>Profile</h3>
                <div class="space20"></div>
                <div class="personal-info">
                    <div class="img1">
                        <img src="assets/img/all-images/others/others-img7.png" alt="housa">
                    </div>
                    <div class="content">
                        <span>User Account</span>
                        <div class="space10"></div>
                        <a href="#">Ruhul Amin Jr</a>
                    </div>
                </div>
                <div class="space28"></div>
                <h3>Our Menu</h3>
                <div class="space8"></div>
                <div class="boxarea">
                    <a href="dashboard.html">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M14 21C13.4477 21 13 20.5523 13 20V12C13 11.4477 13.4477 11 14 11H20C20.5523 11 21 11.4477 21 12V20C21 20.5523 20.5523 21 20 21H14ZM4 13C3.44772 13 3 12.5523 3 12V4C3 3.44772 3.44772 3 4 3H10C10.5523 3 11 3.44772 11 4V12C11 12.5523 10.5523 13 10 13H4ZM9 11V5H5V11H9ZM4 21C3.44772 21 3 20.5523 3 20V16C3 15.4477 3.44772 15 4 15H10C10.5523 15 11 15.4477 11 16V20C11 20.5523 10.5523 21 10 21H4ZM5 19H9V17H5V19ZM15 19H19V13H15V19ZM13 4C13 3.44772 13.4477 3 14 3H20C20.5523 3 21 3.44772 21 4V8C21 8.55228 20.5523 9 20 9H14C13.4477 9 13 8.55228 13 8V4ZM15 5V7H19V5H15Z">
                                </path>
                            </svg></span>
                        <span class="text">Dashboard</span>
                    </a>
                </div>
                <div class="boxarea">
                    <a href="my-profile.html">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z">
                                </path>
                            </svg></span>
                        <span class="text">User Profile</span>
                    </a>
                </div>
                <div class="boxarea">
                    <a href="reviews.html">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M20.7134 8.12811L20.4668 8.69379C20.2864 9.10792 19.7136 9.10792 19.5331 8.69379L19.2866 8.12811C18.8471 7.11947 18.0555 6.31641 17.0677 5.87708L16.308 5.53922C15.8973 5.35653 15.8973 4.75881 16.308 4.57612L17.0252 4.25714C18.0384 3.80651 18.8442 2.97373 19.2761 1.93083L19.5293 1.31953C19.7058 0.893489 20.2942 0.893489 20.4706 1.31953L20.7238 1.93083C21.1558 2.97373 21.9616 3.80651 22.9748 4.25714L23.6919 4.57612C24.1027 4.75881 24.1027 5.35653 23.6919 5.53922L22.9323 5.87708C21.9445 6.31641 21.1529 7.11947 20.7134 8.12811ZM2 4C2 3.44772 2.44772 3 3 3H14V5H4.5052L12 11.662L16.3981 7.75259L17.7269 9.24741L12 14.338L4 7.22684V19H20V11H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4Z">
                                </path>
                            </svg></span>
                        <span class="text">Our Reviews</span>
                    </a>
                </div>
                <div class="boxarea">
                    <a href="my-property.html">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M10 3V5H5V19H19V14H21V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H10ZM17.5858 5H13V3H21V11H19V6.41421L12 13.4142L10.5858 12L17.5858 5Z">
                                </path>
                            </svg></span>
                        <span class="text">My Properties</span>
                    </a>
                </div>
                <div class="boxarea">
                    <a href="my-favorites.html">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19.2426 4.75736C20.705 6.2228 21.2547 8.25005 20.8924 10.1368C21.4614 10.2972 21.9987 10.6002 22.4471 11.0453C23.851 12.439 23.851 14.6987 22.4471 16.0924L17 21.5L13.978 18.5L10.9999 21.485L2.52138 12.993C0.417048 10.637 0.495706 7.01901 2.75736 4.75736C5.02157 2.49315 8.64519 2.41687 11.001 4.52853C13.35 2.42 16.98 2.49 19.2426 4.75736ZM12.962 12.4646C12.346 13.0761 12.346 14.0615 12.962 14.673L17 18.6818L21.038 14.673C21.654 14.0615 21.654 13.0761 21.038 12.4646C20.414 11.8451 19.3962 11.8451 18.77 12.4668L16.9979 14.2206L15.591 12.825L15.2278 12.4646C14.6038 11.8451 13.586 11.8451 12.962 12.4646ZM4.17157 6.17157C2.68183 7.66131 2.60704 10.0473 3.97993 11.6232L10.9999 18.6543L12.559 17.092L11.5529 16.0924C10.149 14.6987 10.149 12.439 11.5529 11.0453C12.9568 9.65157 15.233 9.65157 16.6369 11.0453L16.9996 11.4051L17.3631 11.0453C17.7877 10.6238 18.2921 10.3297 18.828 10.1632C19.2436 8.79577 18.9058 7.25122 17.827 6.1701C16.3279 4.66794 13.9076 4.60701 12.337 6.01687L11.0019 7.21524L9.66605 6.01781C8.09098 4.60597 5.67506 4.66808 4.17157 6.17157Z">
                                </path>
                            </svg></span>
                        <span class="text">My Favourite</span>
                    </a>
                </div>
                <div class="boxarea">
                    <a href="message.html">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM5.76282 17H20V5H4V18.3851L5.76282 17ZM11 10H13V12H11V10ZM7 10H9V12H7V10ZM15 10H17V12H15V10Z">
                                </path>
                            </svg></span>
                        <span class="text">Message</span>
                    </a>
                </div>
                <div class="boxarea">
                    <a href="add-property.html">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z">
                                </path>
                            </svg></span>
                        <span class="text">Add Property</span>
                    </a>
                </div>
                <div class="boxarea">
                    <a href="index.html">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M4 18H6V20H18V4H6V6H4V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V18ZM6 11H13V13H6V16L1 12L6 8V11Z">
                                </path>
                            </svg></span>
                        <span class="text">User Logout</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="body-overlay"></div>
    </div> --}}
    <!--===== SIDEBAR ENDS STARTS=======-->

    <!--===== DASHBOARD AREA STARTS =======-->
    <div class="dashboard-section-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="space30"></div>
                    <div class="dashboad-all-details-section">
                        <h3>Мои объявления</h3>
                        <div class="row">
                            {{-- <div class="col-lg-4 col-md-6">
                                <div class="input-area">
                                    <form>
                                        <input type="text" placeholder="Search">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="input-area">
                                    <form>
                                        <input type="date">
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="input-area">
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">Select</span>
                                        <ul class="list">
                                            <li data-value="1" class="option">Today</li>
                                            <li data-value="2" class="option selected">Yesterday</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="space28"></div>
                            <h4 class="found">Результаты</h4>
                            <div class="space20"></div>
                            <div class="table-container">
                                <!-- Header -->
                                <div class="table-header d-none d-lg-grid ">
                                    <div>Обявление</div>
                                    <div>Статус</div>
                                    <div>Операции</div>
                                </div>

                                @foreach ($properties as $property)
                                    <!-- Row 1 -->
                                    <div class="table-row">
                                        <div class="property-tab-boxarea">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6">
                                                    <div class="img1 image-anime">
                                                        <img src="{{ $property['media'][0]['content'] }}" alt="housa"
                                                            style="height: 294px">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="content-tab-area">
                                                        <div class="property-price">
                                                            <div class="text">
                                                                <a href="/property_details?property_id={{ $property['id'] }}"
                                                                    class="title">
                                                                    {{ $property['title'] }}
                                                                </a>
                                                                <div class="space16"></div>
                                                                <p>{{ $property['address'] }}</p>
                                                            </div>
                                                            <a href="/property_details?property_id={{ $property['id'] }}"
                                                                class="price" style="font-size: 14px!important;">
                                                                {{ $property['first_price'] }} TJS
                                                            </a>
                                                        </div>
                                                        <div class="space20"></div>
                                                        <div class="property-other-widget">
                                                            <ul>
                                                                <li>
                                                                    <span>
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path d="M8 9H16M8 15H16" stroke="#1B1B1B"
                                                                                stroke-width="1.5"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M3 21H21V3.00046L3 3V21Z"
                                                                                stroke="#1B1B1B" stroke-width="1.5"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                    </span>
                                                                    {{ $property['area'] }} Кв/м
                                                                </li>
                                                                <li>
                                                                    <span>
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path d="M22 17.5H2" stroke="#1B1B1B"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M22 21V16C22 14.1144 22 13.1716 21.4142 12.5858C20.8284 12 19.8856 12 18 12H6C4.11438 12 3.17157 12 2.58579 12.5858C2 13.1716 2 14.1144 2 16V21"
                                                                                stroke="#1B1B1B" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M16 12V10.6178C16 10.1103 15.9085 9.94054 15.4396 9.7405C14.4631 9.32389 13.2778 9 12 9C10.7222 9 9.53688 9.32389 8.5604 9.7405C8.09154 9.94054 8 10.1103 8 10.6178V12"
                                                                                stroke="#1B1B1B" stroke-width="1.5"
                                                                                stroke-linecap="round" />
                                                                            <path
                                                                                d="M20 12V7.36057C20 6.66893 20 6.32311 19.8292 5.99653C19.6584 5.66995 19.4151 5.50091 18.9284 5.16283C16.9661 3.79978 14.5772 3 12 3C9.42282 3 7.03391 3.79978 5.07163 5.16283C4.58492 5.50091 4.34157 5.66995 4.17079 5.99653C4 6.32311 4 6.66893 4 7.36057V12"
                                                                                stroke="#1B1B1B" stroke-width="1.5"
                                                                                stroke-linecap="round" />
                                                                        </svg>
                                                                    </span>
                                                                    {{ $property['bedrooms'] }} Комнат
                                                                </li>
                                                                <li>
                                                                    <span>
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path d="M6 20L5 21M18 20L19 21"
                                                                                stroke="#1B1B1B" stroke-width="1.5"
                                                                                stroke-linecap="round" />
                                                                            <path
                                                                                d="M3 12V13C3 16.2998 3 17.9497 4.02513 18.9749C5.05025 20 6.70017 20 10 20H14C17.2998 20 18.9497 20 19.9749 18.9749C21 17.9497 21 16.2998 21 13V12"
                                                                                stroke="#1B1B1B" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M2 12H22" stroke="#1B1B1B"
                                                                                stroke-width="1.5" stroke-linecap="round" />
                                                                            <path
                                                                                d="M4 12V5.5234C4 4.12977 5.12977 3 6.5234 3C7.64166 3 8.62654 3.73598 8.94339 4.80841L9 5"
                                                                                stroke="#1B1B1B" stroke-width="1.5"
                                                                                stroke-linecap="round" />
                                                                            <path d="M8 6L10.5 4" stroke="#1B1B1B"
                                                                                stroke-width="1.5" stroke-linecap="round" />
                                                                        </svg>
                                                                    </span>
                                                                    {{ $property['bathrooms'] }} Санузел
                                                                </li>
                                                            </ul>
                                                            {{-- <div class="space24"></div>
                                                            <div class="btn-area">
                                                                <div class="name-area">
                                                                    <div class="img">
                                                                        <img src="assets/img/all-images/others/others-img1.png"
                                                                            alt="housa">
                                                                    </div>
                                                                    <div class="text">
                                                                        <a href="#">Santiago Towne</a>
                                                                    </div>
                                                                </div>
                                                                <div class="love-share">
                                                                    <a href="javascript:void(0)" class="heart"><img
                                                                            src="assets/img/icons/heart2.svg"
                                                                            alt="housa" class="heart1"> <img
                                                                            src="assets/img/icons/heart1.svg"
                                                                            alt="housa" class="heart2"></a>
                                                                    <a href="#" class="share"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="19" height="20"
                                                                            viewBox="0 0 19 20" fill="none">
                                                                            <path
                                                                                d="M11.0373 14.6505L7.14942 12.5297C6.47355 13.2521 5.51175 13.7034 4.44452 13.7034C2.39902 13.7034 0.740814 12.0452 0.740814 9.99974C0.740814 7.95424 2.39902 6.29603 4.44452 6.29603C5.51169 6.29603 6.47345 6.74739 7.14931 7.46961L11.0373 5.34893C10.9646 5.05938 10.926 4.75628 10.926 4.44418C10.926 2.39868 12.5842 0.740479 14.6297 0.740479C16.6752 0.740479 18.3334 2.39868 18.3334 4.44418C18.3334 6.48968 16.6752 8.14789 14.6297 8.14789C13.5625 8.14789 12.6007 7.69651 11.9248 6.97424L8.0369 9.09492C8.10961 9.38446 8.14822 9.68761 8.14822 9.99974C8.14822 10.3119 8.10962 10.6149 8.03693 10.9045L11.9249 13.0252C12.6007 12.303 13.5625 11.8516 14.6297 11.8516C16.6752 11.8516 18.3334 13.5098 18.3334 15.5553C18.3334 17.6008 16.6752 19.259 14.6297 19.259C12.5842 19.259 10.926 17.6008 10.926 15.5553C10.926 15.2432 10.9646 14.94 11.0373 14.6505ZM4.44452 11.8516C5.46727 11.8516 6.29637 11.0225 6.29637 9.99974C6.29637 8.97696 5.46727 8.14789 4.44452 8.14789C3.42177 8.14789 2.59267 8.97696 2.59267 9.99974C2.59267 11.0225 3.42177 11.8516 4.44452 11.8516ZM14.6297 6.29603C15.6525 6.29603 16.4816 5.46693 16.4816 4.44418C16.4816 3.42143 15.6525 2.59233 14.6297 2.59233C13.6069 2.59233 12.7779 3.42143 12.7779 4.44418C12.7779 5.46693 13.6069 6.29603 14.6297 6.29603ZM14.6297 17.4071C15.6525 17.4071 16.4816 16.5781 16.4816 15.5553C16.4816 14.5325 15.6525 13.7034 14.6297 13.7034C13.6069 13.7034 12.7779 14.5325 12.7779 15.5553C12.7779 16.5781 13.6069 17.4071 14.6297 17.4071Z"
                                                                                fill="#ED8438" />
                                                                        </svg></a>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="status">
                                            @switch($property->status)
                                                @case(0)
                                                    {{ $text = 'Ваше объявление "' . $property->title . '" ожидает модерацию' }}
                                                @break

                                                @case(1)
                                                    {{ $text = 'Ваше объявление "' . $property->title . '" успешно опубликовано' }}
                                                @break

                                                @case(2)
                                                    {{ $text = 'Ваше объявление "' . $property->title . '" отклонено по причине: ' . $request->text }}
                                                @break

                                                @default
                                                    {{ $text = 'Ваше объявление "' . $property->title . '" успешно опубликовано' }}

                                                    <a href="/property_details?property_id={{ $property['id'] }}"
                                                        class="status-badge approved">{{ $text }}</a>
                                            @endswitch
                                        </div>
                                        <div class="actions">
                                            <a href="/edit/{{ $property->id }}" class="edit">
                                                <button class="edit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor">
                                                        <path
                                                            d="M6.41421 15.89L16.5563 5.74785L15.1421 4.33363L5 14.4758V15.89H6.41421ZM7.24264 17.89H3V13.6473L14.435 2.21231C14.8256 1.82179 15.4587 1.82179 15.8492 2.21231L18.6777 5.04074C19.0682 5.43126 19.0682 6.06443 18.6777 6.45495L7.24264 17.89ZM3 19.89H21V21.89H3V19.89Z">
                                                        </path>
                                                    </svg> Редактирование
                                                </button>
                                            </a>
                                            <button class="sold"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M7.0943 5.68009L18.3199 16.9057C19.3736 15.5506 20 13.8491 20 12C20 7.58172 16.4183 4 12 4C10.1509 4 8.44939 4.62644 7.0943 5.68009ZM16.9057 18.3199L5.68009 7.0943C4.62644 8.44939 4 10.1509 4 12C4 16.4183 7.58172 20 12 20C13.8491 20 15.5506 19.3736 16.9057 18.3199ZM4.92893 4.92893C6.73748 3.12038 9.23885 2 12 2C17.5228 2 22 6.47715 22 12C22 14.7611 20.8796 17.2625 19.0711 19.0711C17.2625 20.8796 14.7611 22 12 22C6.47715 22 2 17.5228 2 12C2 9.23885 3.12038 6.73748 4.92893 4.92893Z">
                                                    </path>
                                                </svg> Не актуально</button>
                                            <button class="delete"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z">
                                                    </path>
                                                </svg> Удалить </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{-- <div class="col-lg-12">
                                <div class="pagination-area" style="text-align: start;">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor">
                                                        <path
                                                            d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">....</a></li>
                                            <li class="page-item"><a class="page-link" href="#">12</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor">
                                                        <path
                                                            d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== DASHBOARD AREA ENDS =======-->
    <div class="space30"></div>

    <!--===== FOOTER AREA STARTS =======-->
    @include('front.includes.footer')
    <!--===== FOOTER AREA ENDS =======-->
@endsection
