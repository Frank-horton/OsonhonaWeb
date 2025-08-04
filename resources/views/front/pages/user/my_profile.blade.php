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

    {{-- <!--===== SIDEBAR STARTS=======-->
    <div class="header-site-icon">
        <div class="slide-bar slide-bar1">
            <div class="sidebar-info">
                <div class="sidebar-logo">
                    <div class="close-mobile-menu">
                        <a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z">
                                </path>
                            </svg></a>
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
    </div>
    <!--===== SIDEBAR ENDS STARTS=======--> --}}

    <div class="space30"></div>
    <!--===== DASHBOARD AREA STARTS =======-->
    <div class="profile-section-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="heading1">
                        <h2>Мой профиль</h2>
                        <div class="space32"></div>
                    </div>
                </div>
                <form action="/update_profile" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-lg-12">
                        <div class="account-details-boxarea">
                            <h4>Аватарка</h4>
                            <div class="space24"></div>
                            <div class="box-agent-avt">
                                <div class="img-poster">
                                    <img src="assets/img/all-images/others/others-img11.png" alt="avatar" loading="lazy">
                                </div>
                                <div class="content uploadfile">
                                    <p>Обновить</p>
                                    <div class="space16"></div>
                                    <div class="box-ip">
                                        <input type="file" class="ip-file">
                                    </div>
                                    <div class="space16"></div>
                                    <span>PNG/JPEG (100/100)</span>
                                </div>
                            </div>
                            <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
                            <div class="space30"></div>
                            <div class="personal-info-area">
                                <h3>Обновление данных профиля</h3>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="space28"></div>
                                        <div class="input-area">
                                            <h5>Имя</h5>
                                            <div class="space16"></div>
                                            <input type="text" name="fullname" placeholder="Username"
                                                value="{{ $user->fullname }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="space28"></div>
                                        <div class="input-area">
                                            <h5>Email*</h5>
                                            <div class="space16"></div>
                                            <input type="email" name="email" placeholder="Email*"
                                                value="{{ $user->email }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="space28"></div>
                                        <div class="input-area">
                                            <h5>Номер телефона*</h5>
                                            <div class="space16"></div>
                                            <input type="number" name="mobile_no" placeholder="Phone*"
                                                value="{{ $user->mobile_no }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="space28"></div>
                                        <div class="input-area">
                                            <h5>Адресс*</h5>
                                            <div class="space16"></div>
                                            <input type="text" name="address" placeholder="Address*"
                                                value="{{ $user->address }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="space28"></div>
                                        <div class="input-area">
                                            <h5>Об нас*</h5>
                                            <div class="space16"></div>
                                            <textarea placeholder="Your Message" name="about" required>{{ $user->about }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="space32"></div>
                                        <div class="btn-area1 text-end">
                                            <button type="submit" class="vl-btn1">
                                                Обновить профиль
                                                <span class="arrow1">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </span>
                                                <span class="arrow2">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="space30"></div>
                        <div class="password-info-area">
                            <h2>Смена пароля</h2>
                            <div class="box">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="box-fieldset">
                                            <label>Старый пароль:<span>*</span></label>
                                            <div class="box-password">
                                                <input type="password" class="form-contact style-1 password-field"
                                                    placeholder="Password">
                                                <span class="show-pass">
                                                    <i class="fa-regular fa-eye"></i>
                                                    <i class="fa-regular fa-eye-slash"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="box-fieldset">
                                            <label>Новый пароль:<span>*</span></label>
                                            <div class="box-password">
                                                <input type="password" class="form-contact style-1 password-field2"
                                                    placeholder="Password">
                                                <div data-lastpass-icon-root=""
                                                    style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                                                </div>
                                                <span class="show-pass2">
                                                    <i class="fa-regular fa-eye"></i>
                                                    <i class="fa-regular fa-eye-slash"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="box-fieldset">
                                            <label>Подтверждения:<span>*</span></label>
                                            <div class="box-password">
                                                <input type="password" class="form-contact style-1 password-field3"
                                                    placeholder="Password">
                                                <div data-lastpass-icon-root=""
                                                    style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                                                </div><span class="show-pass3">
                                                    <i class="fa-regular fa-eye"></i>
                                                    <i class="fa-regular fa-eye-slash"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space32"></div>
                            <div class="btn-area1 text-end">
                                <a href="index.html" class="vl-btn1">Обновить пароль <span class="arrow1"><i
                                            class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--===== DASHBOARD AREA ENDS =======-->
    <div class="space30"></div>

    <!--===== FOOTER AREA STARTS =======-->
    @include('front.includes.footer')
    <!--===== FOOTER AREA ENDS =======-->
@endsection
