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
    {{-- <div class="inner-header-area">
        <div class="containe-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inner-header heading1">
                        <h2>Детали недвижимости</h2>
                        <div class="space28"></div>
                        <p>
                            <a href="/">Главная</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16"
                                fill="none">
                                <path d="M1.5 1.74997L7.75 7.99997L1.5 14.25" stroke="#1B1B1B" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Детали недвижимости
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-images">
                        <img src="/assets/img/all-images/hero/hero-img9.png" alt="housa">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======--> --}}

    <div class="space30"></div>
    <div class="space30"></div>
    <div class="space30"></div>
    <div class="space30"></div>
    <!--===== PROPERTIES AREA STARTS =======-->
    <div class="properties2-details sp1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7" id="gallery">
                    <div class="all-galler-images2" data-aos="fade-left" data-aos-duration="1000">
                        @foreach ($response['data']['media'] as $property)
                            <div class="big-img">
                                <img src="{{ $property['content'] }}" alt="housa" onclick="openModal(this.src)">
                            </div>
                        @endforeach
                    </div>
                    <div class="bottom-galler-images2" data-aos="fade-right" data-aos-duration="1100">
                        @foreach ($response['data']['media'] as $property)
                            <div class="small-img">
                                <img src="{{ $property['content'] }}" alt="housa" onclick="openModal(this.src)">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="heading1" style="min-height: 200px!important;">
                        <div class="content-area" style="min-height: 200px!important;">
                            <a href="property-details-v1.html" class="title">{{ $response['data']['title'] }}</a>
                            <div class="space32"></div>
                            <p>
                                <span class="s-tiltle2">Расположение:</span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="22"
                                        viewBox="0 0 18 22" fill="none">
                                        <path
                                            d="M9 5C8.25832 5 7.5333 5.21993 6.91661 5.63199C6.29993 6.04404 5.81928 6.62971 5.53545 7.31494C5.25162 8.00016 5.17736 8.75416 5.32205 9.48159C5.46675 10.209 5.8239 10.8772 6.34835 11.4017C6.8728 11.9261 7.54098 12.2833 8.26841 12.4279C8.99584 12.5726 9.74984 12.4984 10.4351 12.2145C11.1203 11.9307 11.706 11.4501 12.118 10.8334C12.5301 10.2167 12.75 9.49168 12.75 8.75C12.75 7.75544 12.3549 6.80161 11.6517 6.09835C10.9484 5.39509 9.99456 5 9 5ZM9 11C8.55499 11 8.11998 10.868 7.74997 10.6208C7.37996 10.3736 7.09157 10.0222 6.92127 9.61104C6.75097 9.1999 6.70642 8.7475 6.79323 8.31105C6.88005 7.87459 7.09434 7.47368 7.40901 7.15901C7.72368 6.84434 8.12459 6.63005 8.56105 6.54323C8.9975 6.45642 9.4499 6.50097 9.86104 6.67127C10.2722 6.84157 10.6236 7.12996 10.8708 7.49997C11.118 7.86998 11.25 8.30499 11.25 8.75C11.25 9.34674 11.0129 9.91903 10.591 10.341C10.169 10.7629 9.59674 11 9 11ZM9 0.5C6.81273 0.502481 4.71575 1.37247 3.16911 2.91911C1.62247 4.46575 0.752481 6.56273 0.75 8.75C0.75 11.6938 2.11031 14.8138 4.6875 17.7734C5.84552 19.1108 7.14887 20.3151 8.57344 21.3641C8.69954 21.4524 8.84978 21.4998 9.00375 21.4998C9.15772 21.4998 9.30796 21.4524 9.43406 21.3641C10.856 20.3147 12.1568 19.1104 13.3125 17.7734C15.8859 14.8138 17.25 11.6938 17.25 8.75C17.2475 6.56273 16.3775 4.46575 14.8309 2.91911C13.2843 1.37247 11.1873 0.502481 9 0.5ZM9 19.8125C7.45031 18.5938 2.25 14.1172 2.25 8.75C2.25 6.95979 2.96116 5.2429 4.22703 3.97703C5.4929 2.71116 7.20979 2 9 2C10.7902 2 12.5071 2.71116 13.773 3.97703C15.0388 5.2429 15.75 6.95979 15.75 8.75C15.75 14.1153 10.5497 18.5938 9 19.8125Z"
                                            fill="#1B1B1B" />
                                    </svg>
                                </span>{{ $response['data']['address'] }}
                            </p>
                            <div class="space24"></div>
                            <div class="property-other-widget">
                                Функции:
                                <div class="row">
                                    <div class="col-6">
                                        <span>
                                            <svg fill="#1B1B1B" width="24" height="24" version="1.1" id="Layer_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M490.667,170.667H416V21.333h74.667c5.867,0,10.667-4.8,10.667-10.667C501.333,4.8,496.533,0,490.667,0h-85.333
                                                                                c-0.32,0-0.64,0.107-0.96,0.213c-0.64,0.107-1.28,0.213-1.92,0.427c-1.067,0.32-2.133,0.853-3.093,1.493h-0.107
                                                                                c-0.533,0.32-1.067,0.747-1.6,1.173l-84.16,63.147c-0.427,0.213-0.747,0.533-1.173,0.853l-84.48,63.36
                                                                                c-0.213,0.213-0.533,0.32-0.747,0.64l-84.907,63.68c-0.107,0.107-0.32,0.213-0.427,0.32L56.427,259.2l-41.493,31.04
                                                                                c-4.693,3.52-5.653,10.24-2.133,14.933c3.52,4.693,10.24,5.653,14.933,2.133l25.6-19.2v138.56h-32
                                                                                c-5.867,0-10.667,4.8-10.667,10.667v64c0,5.867,4.8,10.667,10.667,10.667h469.333c5.867,0,10.667-4.8,10.667-10.667v-320
                                                                                C501.333,175.467,496.533,170.667,490.667,170.667z M330.667,80.213l64-48v138.453H384c-5.867,0-10.667,4.8-10.667,10.667v53.333
                                                                                h-42.667V80.213z M245.333,144.213l64-48v138.453h-10.667c-5.867,0-10.667,4.8-10.667,10.667V288h-42.667V144.213z M160,208.107
                                                                                l64-48V288h-21.333C196.8,288,192,292.8,192,298.667v64h-32V208.107z M74.667,272.107l64-48v138.56h-21.333
                                                                                c-5.867,0-10.667,4.8-10.667,10.667v53.333h-32V272.107z M480,490.667H32V448h85.333C123.2,448,128,443.2,128,437.333V384h74.667
                                                                                c5.867,0,10.667-4.8,10.667-10.667v-64h85.333c5.867,0,10.667-4.8,10.667-10.667V256H384c5.867,0,10.667-4.8,10.667-10.667V192
                                                                                H480V490.667z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                        {{ $response['data']['floor_number'] }} Этаж
                                    </div>
                                    <div class="col-6">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path d="M22 17.5H2" stroke="#1B1B1B" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M22 21V16C22 14.1144 22 13.1716 21.4142 12.5858C20.8284 12 19.8856 12 18 12H6C4.11438 12 3.17157 12 2.58579 12.5858C2 13.1716 2 14.1144 2 16V21"
                                                    stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16 12V10.6178C16 10.1103 15.9085 9.94054 15.4396 9.7405C14.4631 9.32389 13.2778 9 12 9C10.7222 9 9.53688 9.32389 8.5604 9.7405C8.09154 9.94054 8 10.1103 8 10.6178V12"
                                                    stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                                <path
                                                    d="M20 12V7.36057C20 6.66893 20 6.32311 19.8292 5.99653C19.6584 5.66995 19.4151 5.50091 18.9284 5.16283C16.9661 3.79978 14.5772 3 12 3C9.42282 3 7.03391 3.79978 5.07163 5.16283C4.58492 5.50091 4.34157 5.66995 4.17079 5.99653C4 6.32311 4 6.66893 4 7.36057V12"
                                                    stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                            </svg>
                                        </span>
                                        {{ $response['data']['bedrooms'] }} Комнат
                                    </div>
                                    <div class="col-6">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path d="M8 9H16M8 15H16" stroke="#1B1B1B" stroke-width="1.5"
                                                    stroke-linejoin="round" />
                                                <path d="M3 21H21V3.00046L3 3V21Z" stroke="#1B1B1B" stroke-width="1.5"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        {{ $response['data']['area'] }} кв/м
                                    </div>
                                    <div class="col-6">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path d="M6 20L5 21M18 20L19 21" stroke="#1B1B1B" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                                <path
                                                    d="M3 12V13C3 16.2998 3 17.9497 4.02513 18.9749C5.05025 20 6.70017 20 10 20H14C17.2998 20 18.9497 20 19.9749 18.9749C21 17.9497 21 16.2998 21 13V12"
                                                    stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M2 12H22" stroke="#1B1B1B" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                                <path
                                                    d="M4 12V5.5234C4 4.12977 5.12977 3 6.5234 3C7.64166 3 8.62654 3.73598 8.94339 4.80841L9 5"
                                                    stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                                <path d="M8 6L10.5 4" stroke="#1B1B1B" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                            </svg>
                                        </span>
                                        {{ $response['data']['bathrooms'] }} Санузел
                                    </div>
                                </div>
                                <div class="space32"></div>
                                <div class="btn-area">
                                    <div class="nm-btn">
                                        <p>
                                            <a href="#">
                                                {{ formatTJS($response['data']['first_price']) }}
                                            </a>
                                            /
                                            @if ($response['data']['property_available_for'] == 0)
                                                Для продажи
                                            @else
                                                Для аренды
                                            @endif
                                        </p>
                                    </div>
                                    {{-- <div class="love-share">
                                        <a href="javascript:void(0)" class="heart">
                                            <img src="/assets/img/icons/heart2.svg" alt="housa" class="heart1">
                                            <img src="/assets/img/icons/heart1.svg" alt="housa" class="heart2">
                                        </a>
                                        <a href="#" class="share">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                viewBox="0 0 17 18" fill="none">
                                                <path
                                                    d="M9.93383 13.185L6.43473 11.2763C5.82645 11.9264 4.96083 12.3327 4.00033 12.3327C2.15938 12.3327 0.666992 10.8403 0.666992 8.99935C0.666992 7.1584 2.15938 5.66602 4.00033 5.66602C4.96078 5.66602 5.82637 6.07223 6.43464 6.72223L9.93383 4.81362C9.86841 4.55302 9.83366 4.28024 9.83366 3.99935C9.83366 2.1584 11.3261 0.666016 13.167 0.666016C15.0079 0.666016 16.5003 2.1584 16.5003 3.99935C16.5003 5.8403 15.0079 7.33268 13.167 7.33268C12.2065 7.33268 11.3409 6.92644 10.7326 6.2764L7.23347 8.18502C7.29891 8.4456 7.33366 8.71843 7.33366 8.99935C7.33366 9.28027 7.29892 9.55302 7.2335 9.8136L10.7327 11.7223C11.3409 11.0723 12.2065 10.666 13.167 10.666C15.0079 10.666 16.5003 12.1584 16.5003 13.9993C16.5003 15.8403 15.0079 17.3327 13.167 17.3327C11.3261 17.3327 9.83366 15.8403 9.83366 13.9993C9.83366 13.7184 9.86841 13.4456 9.93383 13.185ZM4.00033 10.666C4.9208 10.666 5.66699 9.91985 5.66699 8.99935C5.66699 8.07885 4.9208 7.33268 4.00033 7.33268C3.07985 7.33268 2.33366 8.07885 2.33366 8.99935C2.33366 9.91985 3.07985 10.666 4.00033 10.666ZM13.167 5.66602C14.0875 5.66602 14.8337 4.91982 14.8337 3.99935C14.8337 3.07887 14.0875 2.33268 13.167 2.33268C12.2465 2.33268 11.5003 3.07887 11.5003 3.99935C11.5003 4.91982 12.2465 5.66602 13.167 5.66602ZM13.167 15.666C14.0875 15.666 14.8337 14.9198 14.8337 13.9993C14.8337 13.0788 14.0875 12.3327 13.167 12.3327C12.2465 12.3327 11.5003 13.0788 11.5003 13.9993C11.5003 14.9198 12.2465 15.666 13.167 15.666Z"
                                                    fill="#ED8438" />
                                            </svg>
                                        </a>
                                    </div> --}}
                                </div>
                                <div class="space30"></div>
                                <p>
                                    {{ $response['data']['about'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== PROPERTIES AREA ENDS =======-->
    <!--===== PROPERTY AREA STARTS =======-->
    <div class="property-inner-section-find">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-mapgrid-area">
                        <div class="space32"></div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="sidebar1-area">
                                    <div class="details-siderbar2">
                                        <h4>Контакты продавца</h4>
                                        <div class="space24"></div>
                                        <div class="personal-info">
                                            <div class="img1">
                                                <img src="{{ $response['data']['user']['profile'] != '' ? $response['data']['user']['profile'] : '/profile.svg' }}" onerror="this.onerror=null;this.src='/profile.svg';" alt="housa" style="height: 50px; width: 100px; border-radius: 50%; object-fit: fill;">
                                            </div>
                                            <div class="content">
                                                <a href="#">
                                                    {{ $response['data']['user']['fullname'] }}
                                                </a>
                                                @if ($response['data']['user']['email'] != '')
                                                    <a href="mailto:{{ $response['data']['user']['email'] }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor">
                                                            <path
                                                                d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z">
                                                            </path>
                                                        </svg>{{ $response['data']['user']['email'] }}</a>
                                                @endif
                                                <a href="tel:{{ $response['data']['user']['mobile_no'] }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor">
                                                        <path
                                                            d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                                                        </path>
                                                    </svg>
                                                    {{ $response['data']['user']['mobile_no'] }}
                                                </a>
                                            </div>
                                        </div>
                                        <!-- <div class="space10"></div>
                                                            <div class="input-area">
                                                                <input type="text" placeholder="Полное имя" required>
                                                            </div>
                                                            <div class="input-area">
                                                                <input type="number" placeholder="Номер телефона" required>
                                                            </div>
                                                            <div class="input-area">
                                                                <input type="email" placeholder="Почта" required>
                                                            </div>
                                                            <div class="input-area">
                                                                <textarea placeholder="Текст сообщения" required></textarea>
                                                            </div>
                                                            <div class="input-area">
                                                                <button type="submit" class="vl-btn1">
                                                                    Отправить
                                                                    <span class="arrow1">
                                                                        <i class="fa-solid fa-arrow-right"></i>
                                                                    </span>
                                                                    <span class="arrow2">
                                                                        <i class="fa-solid fa-arrow-right"></i>
                                                                    </span>
                                                                </button>
                                                            </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="property-widget-sidebar">
                                    {{-- <div class="img1">
                                        <img src="{{ $response['data']['media'][0]['content'] }}" alt="housa" style="height: 494px">
                                    </div>
                                    <div class="space40"></div> --}}
                                    <div class="padding-side">
                                        <h3>О недвижимости</h3>
                                        <div class="space24"></div>
                                        <p>
                                            {{ $response['data']['about'] }}
                                        </p>
                                        <div class="space30"></div>
                                        <div class="space30"></div>
                                        <h3>Галерея недвижимости, исследуйте пространство</h3>
                                        <div class="space32"></div>
                                        <div class="img2"
                                            onclick="openModal(`{{ $response['data']['media'][0]['content'] }}`)">
                                            <img src="{{ $response['data']['media'][0]['content'] }}" alt="housa"
                                                style="height: 394px">
                                            <div class="plus">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 32 32" fill="none">
                                                        <path
                                                            d="M12.7143 13.7143C13.2666 13.7143 13.7143 13.2666 13.7143 12.7143V1C13.7143 0.447715 14.162 0 14.7143 0H17.2857C17.838 0 18.2857 0.447715 18.2857 1V12.7143C18.2857 13.2666 18.7334 13.7143 19.2857 13.7143H31C31.5523 13.7143 32 14.162 32 14.7143V17.2857C32 17.838 31.5523 18.2857 31 18.2857H19.2857C18.7334 18.2857 18.2857 18.7334 18.2857 19.2857V31C18.2857 31.5523 17.838 32 17.2857 32H14.7143C14.162 32 13.7143 31.5523 13.7143 31V19.2857C13.7143 18.7334 13.2666 18.2857 12.7143 18.2857H1C0.447715 18.2857 0 17.838 0 17.2857V14.7143C0 14.162 0.447715 13.7143 1 13.7143H12.7143Z"
                                                            fill="white" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row" id="gallery">
                                            @foreach ($response['data']['media'] as $media)
                                                @if ($media['media_type_id'] != 4)
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="img2"
                                                            onclick="openModal(`{{ $media['content'] }}`)">
                                                            <img src="{{ $media['content'] }}" alt="housa"
                                                                style="height: 244px">
                                                            <div class="plus">
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                                        height="32" viewBox="0 0 32 32"
                                                                        fill="none">
                                                                        <path
                                                                            d="M12.7143 13.7143C13.2666 13.7143 13.7143 13.2666 13.7143 12.7143V1C13.7143 0.447715 14.162 0 14.7143 0H17.2857C17.838 0 18.2857 0.447715 18.2857 1V12.7143C18.2857 13.2666 18.7334 13.7143 19.2857 13.7143H31C31.5523 13.7143 32 14.162 32 14.7143V17.2857C32 17.838 31.5523 18.2857 31 18.2857H19.2857C18.7334 18.2857 18.2857 18.7334 18.2857 19.2857V31C18.2857 31.5523 17.838 32 17.2857 32H14.7143C14.162 32 13.7143 31.5523 13.7143 31V19.2857C13.7143 18.7334 13.2666 18.2857 12.7143 18.2857H1C0.447715 18.2857 0 17.838 0 17.2857V14.7143C0 14.162 0.447715 13.7143 1 13.7143H12.7143Z"
                                                                            fill="white" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="space30"></div>
                                        <h3>Все, что вам нужно, всего в нескольких шагах</h3>
                                        <div class="space12"></div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="others-box">
                                                    <img src="/assets/img/icons/check1.svg" alt="housa">
                                                    <div class="text">
                                                        <p>
                                                            <span>
                                                                До школы:
                                                            </span>
                                                            {{ $response['data']['far_from_school'] == 0 ? 5:$response['data']['far_from_school'] }}
                                                            м
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="others-box">
                                                    <img src="/assets/img/icons/check1.svg" alt="housa">
                                                    <div class="text">
                                                        <p>
                                                            <span>До больницы:
                                                            </span>{{ $response['data']['far_from_hospital'] == 0 ? 5:$response['data']['far_from_hospital'] }} м
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="others-box">
                                                    <img src="/assets/img/icons/check1.svg" alt="housa">
                                                    <div class="text">
                                                        <p>
                                                            <span>До магазина:
                                                            </span>{{ $response['data']['far_from_market'] == 0 ? 5:$response['data']['far_from_market'] }} м
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="others-box">
                                                    <img src="/assets/img/icons/check1.svg" alt="housa">
                                                    <div class="text">
                                                        <p>
                                                            <span>До зала:
                                                            </span>{{ $response['data']['far_from_gym']== 0 ? 5:$response['data']['far_from_gym'] }} м
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="others-box">
                                                    <img src="/assets/img/icons/check1.svg" alt="housa">
                                                    <div class="text">
                                                        <p>
                                                            <span>До заправки:
                                                            </span>{{ $response['data']['far_from_gasoline']== 0 ? 5:$response['data']['far_from_gasoline'] }} м
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="others-box">
                                                    <img src="/assets/img/icons/check1.svg" alt="housa">
                                                    <div class="text">
                                                        <p>
                                                            <span>До аэропорта:
                                                            </span>{{ $response['data']['far_from_airport']== 0 ? 5:$response['data']['far_from_airport'] }} м
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="space30"></div>
                                        <h3>План этажа</h3>
                                        <div class="accordion-area">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                                            <span>Чертежи</span>
                                                        </button>
                                                    </h2>
                                                    @foreach ($mediaByType['4'] as $media)
                                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <div class="img1">
                                                                    <img src="{{ $media['content'] }}" alt="housa">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="space30"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== PROPERTY AREA ENDS =======-->
    <div class="space30"></div>
    <!--===== PROPERTY AREA STARTS =======-->
    <div class="propert-bottom-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="heading1 text-center space-margin60">
                        <h2>Похожее обявления</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($response['data']['relatedProperty'] as $property)
                    <div class="col-lg-4 col-md-6">
                        <div class="property-single-boxarea">
                            <div class="property-list-img-area owl-carousel">
                                @foreach ($property['media'] as $media)
                                    <a href="/property_details?property_id={{ $property['id'] }}">
                                        <div class="img1 image-anime">
                                            <img src="{{ $media['content'] }}" alt="housa" style="height: 294px">
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="space20"></div>
                            <div class="property-price" style="min-height: 120px">
                                <div class="text">
                                    <a href="/property_details?property_id={{ $property['id'] }}" class="title"
                                        style="max-width: 230px;">
                                        {{ $property['title'] }}
                                    </a>
                                    <div class="space16"></div>
                                    <p style="max-width: 240px">{{ $property['address'] }}</p>
                                </div>
                                <a href="#" class="price" style="font-size: 14px!important;">
                                    {{ formatTJS($property['first_price']) }}
                                </a>
                            </div>
                            <div class="space20"></div>
                            <div class="property-other-widget">
                                <ul>
                                    <li>
                                        <span>
                                            <svg fill="#1B1B1B" width="24" height="24" version="1.1"
                                                id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M490.667,170.667H416V21.333h74.667c5.867,0,10.667-4.8,10.667-10.667C501.333,4.8,496.533,0,490.667,0h-85.333
                                                                                c-0.32,0-0.64,0.107-0.96,0.213c-0.64,0.107-1.28,0.213-1.92,0.427c-1.067,0.32-2.133,0.853-3.093,1.493h-0.107
                                                                                c-0.533,0.32-1.067,0.747-1.6,1.173l-84.16,63.147c-0.427,0.213-0.747,0.533-1.173,0.853l-84.48,63.36
                                                                                c-0.213,0.213-0.533,0.32-0.747,0.64l-84.907,63.68c-0.107,0.107-0.32,0.213-0.427,0.32L56.427,259.2l-41.493,31.04
                                                                                c-4.693,3.52-5.653,10.24-2.133,14.933c3.52,4.693,10.24,5.653,14.933,2.133l25.6-19.2v138.56h-32
                                                                                c-5.867,0-10.667,4.8-10.667,10.667v64c0,5.867,4.8,10.667,10.667,10.667h469.333c5.867,0,10.667-4.8,10.667-10.667v-320
                                                                                C501.333,175.467,496.533,170.667,490.667,170.667z M330.667,80.213l64-48v138.453H384c-5.867,0-10.667,4.8-10.667,10.667v53.333
                                                                                h-42.667V80.213z M245.333,144.213l64-48v138.453h-10.667c-5.867,0-10.667,4.8-10.667,10.667V288h-42.667V144.213z M160,208.107
                                                                                l64-48V288h-21.333C196.8,288,192,292.8,192,298.667v64h-32V208.107z M74.667,272.107l64-48v138.56h-21.333
                                                                                c-5.867,0-10.667,4.8-10.667,10.667v53.333h-32V272.107z M480,490.667H32V448h85.333C123.2,448,128,443.2,128,437.333V384h74.667
                                                                                c5.867,0,10.667-4.8,10.667-10.667v-64h85.333c5.867,0,10.667-4.8,10.667-10.667V256H384c5.867,0,10.667-4.8,10.667-10.667V192
                                                                                H480V490.667z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                        {{ $property['floor_number'] }} Этаж
                                    </li>
                                    <li>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path d="M22 17.5H2" stroke="#1B1B1B" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M22 21V16C22 14.1144 22 13.1716 21.4142 12.5858C20.8284 12 19.8856 12 18 12H6C4.11438 12 3.17157 12 2.58579 12.5858C2 13.1716 2 14.1144 2 16V21"
                                                    stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16 12V10.6178C16 10.1103 15.9085 9.94054 15.4396 9.7405C14.4631 9.32389 13.2778 9 12 9C10.7222 9 9.53688 9.32389 8.5604 9.7405C8.09154 9.94054 8 10.1103 8 10.6178V12"
                                                    stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                                <path
                                                    d="M20 12V7.36057C20 6.66893 20 6.32311 19.8292 5.99653C19.6584 5.66995 19.4151 5.50091 18.9284 5.16283C16.9661 3.79978 14.5772 3 12 3C9.42282 3 7.03391 3.79978 5.07163 5.16283C4.58492 5.50091 4.34157 5.66995 4.17079 5.99653C4 6.32311 4 6.66893 4 7.36057V12"
                                                    stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                            </svg>
                                        </span>
                                        {{ $property['bedrooms'] }} Комнат
                                    </li>
                                    <li>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path d="M8 9H16M8 15H16" stroke="#1B1B1B" stroke-width="1.5"
                                                    stroke-linejoin="round" />
                                                <path d="M3 21H21V3.00046L3 3V21Z" stroke="#1B1B1B" stroke-width="1.5"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>{{ $property['area'] }} кв/м
                                    </li>
                                    <li>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path d="M6 20L5 21M18 20L19 21" stroke="#1B1B1B" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                                <path
                                                    d="M3 12V13C3 16.2998 3 17.9497 4.02513 18.9749C5.05025 20 6.70017 20 10 20H14C17.2998 20 18.9497 20 19.9749 18.9749C21 17.9497 21 16.2998 21 13V12"
                                                    stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M2 12H22" stroke="#1B1B1B" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                                <path
                                                    d="M4 12V5.5234C4 4.12977 5.12977 3 6.5234 3C7.64166 3 8.62654 3.73598 8.94339 4.80841L9 5"
                                                    stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                                <path d="M8 6L10.5 4" stroke="#1B1B1B" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                            </svg>
                                        </span>
                                        {{ $property['bathrooms'] }} Санузел
                                    </li>
                                </ul>
                                {{-- <div class="space24"></div>
                            <div class="btn-area">
                                <div class="name-area">
                                    <div class="img">
                                        <img src="/assets/img/all-images/others/others-img1.png"
                                            alt="housa">
                                    </div>
                                    <div class="text">
                                        <a href="#">Santiago Towne</a>
                                    </div>
                                </div>
                                <div class="love-share">
                                    <a href="javascript:void(0)" class="heart">
                                        <img src="/assets/img/icons/heart2.svg" alt="housa"
                                            class="heart1">
                                        <img src="/assets/img/icons/heart1.svg" alt="housa"
                                            class="heart2">
                                    </a>
                                    <a href="#" class="share">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                            height="20" viewBox="0 0 19 20" fill="none">
                                            <path
                                                d="M11.0373 14.6505L7.14942 12.5297C6.47355 13.2521 5.51175 13.7034 4.44452 13.7034C2.39902 13.7034 0.740814 12.0452 0.740814 9.99974C0.740814 7.95424 2.39902 6.29603 4.44452 6.29603C5.51169 6.29603 6.47345 6.74739 7.14931 7.46961L11.0373 5.34893C10.9646 5.05938 10.926 4.75628 10.926 4.44418C10.926 2.39868 12.5842 0.740479 14.6297 0.740479C16.6752 0.740479 18.3334 2.39868 18.3334 4.44418C18.3334 6.48968 16.6752 8.14789 14.6297 8.14789C13.5625 8.14789 12.6007 7.69651 11.9248 6.97424L8.0369 9.09492C8.10961 9.38446 8.14822 9.68761 8.14822 9.99974C8.14822 10.3119 8.10962 10.6149 8.03693 10.9045L11.9249 13.0252C12.6007 12.303 13.5625 11.8516 14.6297 11.8516C16.6752 11.8516 18.3334 13.5098 18.3334 15.5553C18.3334 17.6008 16.6752 19.259 14.6297 19.259C12.5842 19.259 10.926 17.6008 10.926 15.5553C10.926 15.2432 10.9646 14.94 11.0373 14.6505ZM4.44452 11.8516C5.46727 11.8516 6.29637 11.0225 6.29637 9.99974C6.29637 8.97696 5.46727 8.14789 4.44452 8.14789C3.42177 8.14789 2.59267 8.97696 2.59267 9.99974C2.59267 11.0225 3.42177 11.8516 4.44452 11.8516ZM14.6297 6.29603C15.6525 6.29603 16.4816 5.46693 16.4816 4.44418C16.4816 3.42143 15.6525 2.59233 14.6297 2.59233C13.6069 2.59233 12.7779 3.42143 12.7779 4.44418C12.7779 5.46693 13.6069 6.29603 14.6297 6.29603ZM14.6297 17.4071C15.6525 17.4071 16.4816 16.5781 16.4816 15.5553C16.4816 14.5325 15.6525 13.7034 14.6297 13.7034C13.6069 13.7034 12.7779 14.5325 12.7779 15.5553C12.7779 16.5781 13.6069 17.4071 14.6297 17.4071Z"
                                                fill="#040083" />
                                        </svg>
                                    </a>
                                </div>
                            </div> --}}
                            </div>
                            <div class="rent-sale-area">
                                <ul>
                                    <li>
                                        <a href="#">
                                            @if ($property['property_available_for'] == 0)
                                                Для продажи
                                            @else
                                                Для аренды
                                            @endif
                                        </a>
                                    </li>
                                    <li><a href="#">Новое</a></li>
                                </ul>
                                <a href="#" class="camera"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="14" viewBox="0 0 16 14" fill="none">
                                        <path
                                            d="M12 7.39995C12 8.75995 10.96 9.79995 9.6 9.79995C8.24 9.79995 7.2 8.75995 7.2 7.39995C7.2 6.03995 8.24 4.99995 9.6 4.99995C10.96 4.99995 12 6.03995 12 7.39995ZM16 3.39995V12.2C16 13.08 15.28 13.8 14.4 13.8H1.6C0.72 13.8 0 13.08 0 12.2V3.39995C0 2.51995 0.72 1.79995 1.6 1.79995V0.999951H4.8V1.79995H6.4L7.2 0.199951H12L12.8 1.79995H14.4C15.28 1.79995 16 2.51995 16 3.39995ZM4.4 4.99995C4.4 4.35995 3.84 3.79995 3.2 3.79995C2.56 3.79995 2 4.35995 2 4.99995C2 5.63995 2.56 6.19995 3.2 6.19995C3.84 6.19995 4.4 5.63995 4.4 4.99995ZM13.6 7.39995C13.6 5.15995 11.84 3.39995 9.6 3.39995C7.36 3.39995 5.6 5.15995 5.6 7.39995C5.6 9.63995 7.36 11.4 9.6 11.4C11.84 11.4 13.6 9.63995 13.6 7.39995Z"
                                            fill="#1B1B1B" />
                                    </svg>
                                    {{ count($property['media']) }}
                                </a>
                            </div>
                            <div class="btn-area1 text-center">
                                <a href="/property_details?property_id={{ $property['id'] }}" class="vl-btn1">
                                    Подробности
                                    <span class="arrow1">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                    <span class="arrow2">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="property-single-boxarea">
                        <div class="property-list-img-area owl-carousel">
                            <div class="img1 ">
                                <a href="property-details-v1.html"><img
                                        src="/assets/img/all-images/properties/property-img3.png" alt="housa"></a>
                            </div>
                            <div class="img1 ">
                                <a href="property-details-v1.html"><img
                                        src="/assets/img/all-images/properties/property-img3.png" alt="housa"></a>
                            </div>
                            <div class="img1 ">
                                <a href="property-details-v1.html"><img
                                        src="/assets/img/all-images/properties/property-img3.png" alt="housa"></a>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="property-price">
                            <div class="text">
                                <a href="property-details-v1.html" class="title">Golden Oaks Residence</a>
                                <div class="space16"></div>
                                <p>199 Oakway Lane, Woodland </p>
                            </div>
                            <a href="#" class="price">$8,000</a>
                        </div>
                        <div class="space20"></div>
                        <div class="property-other-widget">
                            <ul>
                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M8 9H16M8 15H16" stroke="#1B1B1B" stroke-width="1.5"
                                                stroke-linejoin="round" />
                                            <path d="M3 21H21V3.00046L3 3V21Z" stroke="#1B1B1B" stroke-width="1.5"
                                                stroke-linejoin="round" />
                                        </svg></span>2150 sqft</li>
                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M22 17.5H2" stroke="#1B1B1B" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M22 21V16C22 14.1144 22 13.1716 21.4142 12.5858C20.8284 12 19.8856 12 18 12H6C4.11438 12 3.17157 12 2.58579 12.5858C2 13.1716 2 14.1144 2 16V21"
                                                stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M16 12V10.6178C16 10.1103 15.9085 9.94054 15.4396 9.7405C14.4631 9.32389 13.2778 9 12 9C10.7222 9 9.53688 9.32389 8.5604 9.7405C8.09154 9.94054 8 10.1103 8 10.6178V12"
                                                stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                            <path
                                                d="M20 12V7.36057C20 6.66893 20 6.32311 19.8292 5.99653C19.6584 5.66995 19.4151 5.50091 18.9284 5.16283C16.9661 3.79978 14.5772 3 12 3C9.42282 3 7.03391 3.79978 5.07163 5.16283C4.58492 5.50091 4.34157 5.66995 4.17079 5.99653C4 6.32311 4 6.66893 4 7.36057V12"
                                                stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                        </svg></span>5 Beds</li>
                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M6 20L5 21M18 20L19 21" stroke="#1B1B1B" stroke-width="1.5"
                                                stroke-linecap="round" />
                                            <path
                                                d="M3 12V13C3 16.2998 3 17.9497 4.02513 18.9749C5.05025 20 6.70017 20 10 20H14C17.2998 20 18.9497 20 19.9749 18.9749C21 17.9497 21 16.2998 21 13V12"
                                                stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M2 12H22" stroke="#1B1B1B" stroke-width="1.5"
                                                stroke-linecap="round" />
                                            <path
                                                d="M4 12V5.5234C4 4.12977 5.12977 3 6.5234 3C7.64166 3 8.62654 3.73598 8.94339 4.80841L9 5"
                                                stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                            <path d="M8 6L10.5 4" stroke="#1B1B1B" stroke-width="1.5"
                                                stroke-linecap="round" />
                                        </svg></span>3 Baths</li>
                            </ul>
                            <div class="space24"></div>
                            <div class="btn-area">
                                <div class="name-area">
                                    <div class="img">
                                        <img src="/assets/img/all-images/others/others-img2.png" alt="housa">
                                    </div>
                                    <div class="text">
                                        <a href="#">John Dukes</a>
                                    </div>
                                </div>
                                <div class="love-share">
                                    <a href="javascript:void(0)" class="heart"><img src="/assets/img/icons/heart2.svg"
                                            alt="housa" class="heart1"> <img src="/assets/img/icons/heart1.svg"
                                            alt="housa" class="heart2"></a>
                                    <a href="#" class="share"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="19" height="20" viewBox="0 0 19 20" fill="none">
                                            <path
                                                d="M11.0373 14.6505L7.14942 12.5297C6.47355 13.2521 5.51175 13.7034 4.44452 13.7034C2.39902 13.7034 0.740814 12.0452 0.740814 9.99974C0.740814 7.95424 2.39902 6.29603 4.44452 6.29603C5.51169 6.29603 6.47345 6.74739 7.14931 7.46961L11.0373 5.34893C10.9646 5.05938 10.926 4.75628 10.926 4.44418C10.926 2.39868 12.5842 0.740479 14.6297 0.740479C16.6752 0.740479 18.3334 2.39868 18.3334 4.44418C18.3334 6.48968 16.6752 8.14789 14.6297 8.14789C13.5625 8.14789 12.6007 7.69651 11.9248 6.97424L8.0369 9.09492C8.10961 9.38446 8.14822 9.68761 8.14822 9.99974C8.14822 10.3119 8.10962 10.6149 8.03693 10.9045L11.9249 13.0252C12.6007 12.303 13.5625 11.8516 14.6297 11.8516C16.6752 11.8516 18.3334 13.5098 18.3334 15.5553C18.3334 17.6008 16.6752 19.259 14.6297 19.259C12.5842 19.259 10.926 17.6008 10.926 15.5553C10.926 15.2432 10.9646 14.94 11.0373 14.6505ZM4.44452 11.8516C5.46727 11.8516 6.29637 11.0225 6.29637 9.99974C6.29637 8.97696 5.46727 8.14789 4.44452 8.14789C3.42177 8.14789 2.59267 8.97696 2.59267 9.99974C2.59267 11.0225 3.42177 11.8516 4.44452 11.8516ZM14.6297 6.29603C15.6525 6.29603 16.4816 5.46693 16.4816 4.44418C16.4816 3.42143 15.6525 2.59233 14.6297 2.59233C13.6069 2.59233 12.7779 3.42143 12.7779 4.44418C12.7779 5.46693 13.6069 6.29603 14.6297 6.29603ZM14.6297 17.4071C15.6525 17.4071 16.4816 16.5781 16.4816 15.5553C16.4816 14.5325 15.6525 13.7034 14.6297 13.7034C13.6069 13.7034 12.7779 14.5325 12.7779 15.5553C12.7779 16.5781 13.6069 17.4071 14.6297 17.4071Z"
                                                fill="#ED8438" />
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="rent-sale-area">
                            <ul>
                                <li><a href="#">For Rent</a></li>
                                <li><a href="#">New</a></li>
                            </ul>
                            <a href="#" class="camera"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="14" viewBox="0 0 16 14" fill="none">
                                    <path
                                        d="M12 7.39995C12 8.75995 10.96 9.79995 9.6 9.79995C8.24 9.79995 7.2 8.75995 7.2 7.39995C7.2 6.03995 8.24 4.99995 9.6 4.99995C10.96 4.99995 12 6.03995 12 7.39995ZM16 3.39995V12.2C16 13.08 15.28 13.8 14.4 13.8H1.6C0.72 13.8 0 13.08 0 12.2V3.39995C0 2.51995 0.72 1.79995 1.6 1.79995V0.999951H4.8V1.79995H6.4L7.2 0.199951H12L12.8 1.79995H14.4C15.28 1.79995 16 2.51995 16 3.39995ZM4.4 4.99995C4.4 4.35995 3.84 3.79995 3.2 3.79995C2.56 3.79995 2 4.35995 2 4.99995C2 5.63995 2.56 6.19995 3.2 6.19995C3.84 6.19995 4.4 5.63995 4.4 4.99995ZM13.6 7.39995C13.6 5.15995 11.84 3.39995 9.6 3.39995C7.36 3.39995 5.6 5.15995 5.6 7.39995C5.6 9.63995 7.36 11.4 9.6 11.4C11.84 11.4 13.6 9.63995 13.6 7.39995Z"
                                        fill="#1B1B1B" />
                                </svg> 3</a>
                        </div>
                        <div class="btn-area1 text-center">
                            <a href="property-details-v1.html" class="vl-btn1">View Property Details <span
                                    class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="property-single-boxarea">
                        <div class="property-list-img-area owl-carousel">
                            <div class="img1 ">
                                <a href="property-details-v1.html"><img
                                        src="/assets/img/all-images/properties/property-img3.png" alt="housa"></a>
                            </div>
                            <div class="img1 ">
                                <a href="property-details-v1.html"><img
                                        src="/assets/img/all-images/properties/property-img3.png" alt="housa"></a>
                            </div>
                            <div class="img1 ">
                                <a href="property-details-v1.html"><img
                                        src="/assets/img/all-images/properties/property-img3.png" alt="housa"></a>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="property-price">
                            <div class="text">
                                <a href="property-details-v1.html" class="title">Golden Oaks Residence</a>
                                <div class="space16"></div>
                                <p>199 Oakway Lane, Woodland </p>
                            </div>
                            <a href="#" class="price">$8,000</a>
                        </div>
                        <div class="space20"></div>
                        <div class="property-other-widget">
                            <ul>
                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M8 9H16M8 15H16" stroke="#1B1B1B" stroke-width="1.5"
                                                stroke-linejoin="round" />
                                            <path d="M3 21H21V3.00046L3 3V21Z" stroke="#1B1B1B" stroke-width="1.5"
                                                stroke-linejoin="round" />
                                        </svg></span>2150 sqft</li>
                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M22 17.5H2" stroke="#1B1B1B" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M22 21V16C22 14.1144 22 13.1716 21.4142 12.5858C20.8284 12 19.8856 12 18 12H6C4.11438 12 3.17157 12 2.58579 12.5858C2 13.1716 2 14.1144 2 16V21"
                                                stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M16 12V10.6178C16 10.1103 15.9085 9.94054 15.4396 9.7405C14.4631 9.32389 13.2778 9 12 9C10.7222 9 9.53688 9.32389 8.5604 9.7405C8.09154 9.94054 8 10.1103 8 10.6178V12"
                                                stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                            <path
                                                d="M20 12V7.36057C20 6.66893 20 6.32311 19.8292 5.99653C19.6584 5.66995 19.4151 5.50091 18.9284 5.16283C16.9661 3.79978 14.5772 3 12 3C9.42282 3 7.03391 3.79978 5.07163 5.16283C4.58492 5.50091 4.34157 5.66995 4.17079 5.99653C4 6.32311 4 6.66893 4 7.36057V12"
                                                stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                        </svg></span>5 Beds</li>
                                <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path d="M6 20L5 21M18 20L19 21" stroke="#1B1B1B" stroke-width="1.5"
                                                stroke-linecap="round" />
                                            <path
                                                d="M3 12V13C3 16.2998 3 17.9497 4.02513 18.9749C5.05025 20 6.70017 20 10 20H14C17.2998 20 18.9497 20 19.9749 18.9749C21 17.9497 21 16.2998 21 13V12"
                                                stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M2 12H22" stroke="#1B1B1B" stroke-width="1.5"
                                                stroke-linecap="round" />
                                            <path
                                                d="M4 12V5.5234C4 4.12977 5.12977 3 6.5234 3C7.64166 3 8.62654 3.73598 8.94339 4.80841L9 5"
                                                stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                            <path d="M8 6L10.5 4" stroke="#1B1B1B" stroke-width="1.5"
                                                stroke-linecap="round" />
                                        </svg></span>3 Baths</li>
                            </ul>
                            <div class="space24"></div>
                            <div class="btn-area">
                                <div class="name-area">
                                    <div class="img">
                                        <img src="/assets/img/all-images/others/others-img3.png" alt="housa">
                                    </div>
                                    <div class="text">
                                        <a href="#">David Elson</a>
                                    </div>
                                </div>
                                <div class="love-share">
                                    <a href="javascript:void(0)" class="heart"><img src="/assets/img/icons/heart2.svg"
                                            alt="housa" class="heart1"> <img src="/assets/img/icons/heart1.svg"
                                            alt="housa" class="heart2"></a>
                                    <a href="#" class="share"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="19" height="20" viewBox="0 0 19 20" fill="none">
                                            <path
                                                d="M11.0373 14.6505L7.14942 12.5297C6.47355 13.2521 5.51175 13.7034 4.44452 13.7034C2.39902 13.7034 0.740814 12.0452 0.740814 9.99974C0.740814 7.95424 2.39902 6.29603 4.44452 6.29603C5.51169 6.29603 6.47345 6.74739 7.14931 7.46961L11.0373 5.34893C10.9646 5.05938 10.926 4.75628 10.926 4.44418C10.926 2.39868 12.5842 0.740479 14.6297 0.740479C16.6752 0.740479 18.3334 2.39868 18.3334 4.44418C18.3334 6.48968 16.6752 8.14789 14.6297 8.14789C13.5625 8.14789 12.6007 7.69651 11.9248 6.97424L8.0369 9.09492C8.10961 9.38446 8.14822 9.68761 8.14822 9.99974C8.14822 10.3119 8.10962 10.6149 8.03693 10.9045L11.9249 13.0252C12.6007 12.303 13.5625 11.8516 14.6297 11.8516C16.6752 11.8516 18.3334 13.5098 18.3334 15.5553C18.3334 17.6008 16.6752 19.259 14.6297 19.259C12.5842 19.259 10.926 17.6008 10.926 15.5553C10.926 15.2432 10.9646 14.94 11.0373 14.6505ZM4.44452 11.8516C5.46727 11.8516 6.29637 11.0225 6.29637 9.99974C6.29637 8.97696 5.46727 8.14789 4.44452 8.14789C3.42177 8.14789 2.59267 8.97696 2.59267 9.99974C2.59267 11.0225 3.42177 11.8516 4.44452 11.8516ZM14.6297 6.29603C15.6525 6.29603 16.4816 5.46693 16.4816 4.44418C16.4816 3.42143 15.6525 2.59233 14.6297 2.59233C13.6069 2.59233 12.7779 3.42143 12.7779 4.44418C12.7779 5.46693 13.6069 6.29603 14.6297 6.29603ZM14.6297 17.4071C15.6525 17.4071 16.4816 16.5781 16.4816 15.5553C16.4816 14.5325 15.6525 13.7034 14.6297 13.7034C13.6069 13.7034 12.7779 14.5325 12.7779 15.5553C12.7779 16.5781 13.6069 17.4071 14.6297 17.4071Z"
                                                fill="#ED8438" />
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="rent-sale-area">
                            <ul>
                                <li><a href="#">For Rent</a></li>
                                <li><a href="#">New</a></li>
                            </ul>
                            <a href="#" class="camera"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="14" viewBox="0 0 16 14" fill="none">
                                    <path
                                        d="M12 7.39995C12 8.75995 10.96 9.79995 9.6 9.79995C8.24 9.79995 7.2 8.75995 7.2 7.39995C7.2 6.03995 8.24 4.99995 9.6 4.99995C10.96 4.99995 12 6.03995 12 7.39995ZM16 3.39995V12.2C16 13.08 15.28 13.8 14.4 13.8H1.6C0.72 13.8 0 13.08 0 12.2V3.39995C0 2.51995 0.72 1.79995 1.6 1.79995V0.999951H4.8V1.79995H6.4L7.2 0.199951H12L12.8 1.79995H14.4C15.28 1.79995 16 2.51995 16 3.39995ZM4.4 4.99995C4.4 4.35995 3.84 3.79995 3.2 3.79995C2.56 3.79995 2 4.35995 2 4.99995C2 5.63995 2.56 6.19995 3.2 6.19995C3.84 6.19995 4.4 5.63995 4.4 4.99995ZM13.6 7.39995C13.6 5.15995 11.84 3.39995 9.6 3.39995C7.36 3.39995 5.6 5.15995 5.6 7.39995C5.6 9.63995 7.36 11.4 9.6 11.4C11.84 11.4 13.6 9.63995 13.6 7.39995Z"
                                        fill="#1B1B1B" />
                                </svg> 3</a>
                        </div>
                        <div class="btn-area1 text-center">
                            <a href="property-details-v1.html" class="vl-btn1">View Property Details <span
                                    class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!--===== PROPERTY AREA ENDS =======-->

    <div class="space30"></div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('http://localhost:8000/api/home_get_properties') // <-- Замени на свой URL
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`Ошибка: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    // Пример: проверка по какому-то полю в ответе
                    if (data.status === true) {
                        // Показать блок
                        document.querySelector(".property1").style.display = "block";

                        // Получение контейнера row для добавления новых блоков
                        const row = document.querySelector('#property-list');

                        // Проходим по массиву data.data и создаём блоки для каждой недвижимости
                        data.data.forEach(property => {
                            const propertyBlock = document.createElement('div');
                            propertyBlock.classList.add('col-lg-4',
                                'col-md-6'); // Добавляем классы col-lg-4 и col-md-6

                            // Структура блока
                            propertyBlock.innerHTML = `
                                <div class="property-single-boxarea">
                                             <div class="property-list-img-area owl-carousel">
                                                ${property.media.map(item => `
                                                                                                                                                                                                                                                                                                                                        <a href="/property_details/${property.id}">
                                                                                                                                                                                                                                                                                                                                            <div class="img1 image-anime">
                                                                                                                                                                                                                                                                                                                                                <img src="/assets/img/all-images/properties/property-img1.png"
                                                                                                                                                                                                                                                                                                                                                    alt="housa">
                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                                                                        `).join('')}
                                            </div>
                                            <div class="space20"></div>
                                            <div class="property-price">
                                                <div class="text">
                                                    <a href="/property_details/${property.id}" class="title">
                                                        ${property.title}
                                                    </a>
                                                    <div class="space16"></div>
                                                    <p>${property.address}</p>
                                                </div>
                                                <a href="#" class="price">${property.first_price} $</a>
                                            </div>
                                            <div class="space20"></div>
                                            <div class="property-other-widget">
                                                <ul>
                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M8 9H16M8 15H16" stroke="#1B1B1B"
                                                                    stroke-width="1.5" stroke-linejoin="round" />
                                                                <path d="M3 21H21V3.00046L3 3V21Z" stroke="#1B1B1B"
                                                                    stroke-width="1.5" stroke-linejoin="round" />
                                                            </svg></span>
                                                            ${property.area} кв/м
                                                            </li>
                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M22 17.5H2" stroke="#1B1B1B" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M22 21V16C22 14.1144 22 13.1716 21.4142 12.5858C20.8284 12 19.8856 12 18 12H6C4.11438 12 3.17157 12 2.58579 12.5858C2 13.1716 2 14.1144 2 16V21"
                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M16 12V10.6178C16 10.1103 15.9085 9.94054 15.4396 9.7405C14.4631 9.32389 13.2778 9 12 9C10.7222 9 9.53688 9.32389 8.5604 9.7405C8.09154 9.94054 8 10.1103 8 10.6178V12"
                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                    stroke-linecap="round" />
                                                                <path
                                                                    d="M20 12V7.36057C20 6.66893 20 6.32311 19.8292 5.99653C19.6584 5.66995 19.4151 5.50091 18.9284 5.16283C16.9661 3.79978 14.5772 3 12 3C9.42282 3 7.03391 3.79978 5.07163 5.16283C4.58492 5.50091 4.34157 5.66995 4.17079 5.99653C4 6.32311 4 6.66893 4 7.36057V12"
                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                    stroke-linecap="round" />
                                                            </svg></span>${property.bedrooms} Комнат</li>
                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M6 20L5 21M18 20L19 21" stroke="#1B1B1B"
                                                                    stroke-width="1.5" stroke-linecap="round" />
                                                                <path
                                                                    d="M3 12V13C3 16.2998 3 17.9497 4.02513 18.9749C5.05025 20 6.70017 20 10 20H14C17.2998 20 18.9497 20 19.9749 18.9749C21 17.9497 21 16.2998 21 13V12"
                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M2 12H22" stroke="#1B1B1B" stroke-width="1.5"
                                                                    stroke-linecap="round" />
                                                                <path
                                                                    d="M4 12V5.5234C4 4.12977 5.12977 3 6.5234 3C7.64166 3 8.62654 3.73598 8.94339 4.80841L9 5"
                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                    stroke-linecap="round" />
                                                                <path d="M8 6L10.5 4" stroke="#1B1B1B" stroke-width="1.5"
                                                                    stroke-linecap="round" />
                                                            </svg></span>${property.bathrooms} Санузел</li>
                                                </ul>
                                                <div class="space24"></div>
                                                <div class="btn-area">
                                                    <div class="name-area">
                                                        <div class="img">
                                                            <img src="/assets/img/all-images/others/others-img1.png"
                                                                alt="housa">
                                                        </div>
                                                        <div class="text">
                                                            <a href="#">Santiago Towne</a>
                                                        </div>
                                                    </div>
                                                    <div class="love-share">
                                                        <a href="javascript:void(0)" class="heart"><img
                                                                src="/assets/img/icons/heart2.svg" alt="housa"
                                                                class="heart1"> <img src="/assets/img/icons/heart1.svg"
                                                                alt="housa" class="heart2"></a>
                                                        <a href="#" class="share"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="19"
                                                                height="20" viewBox="0 0 19 20" fill="none">
                                                                <path
                                                                    d="M11.0373 14.6505L7.14942 12.5297C6.47355 13.2521 5.51175 13.7034 4.44452 13.7034C2.39902 13.7034 0.740814 12.0452 0.740814 9.99974C0.740814 7.95424 2.39902 6.29603 4.44452 6.29603C5.51169 6.29603 6.47345 6.74739 7.14931 7.46961L11.0373 5.34893C10.9646 5.05938 10.926 4.75628 10.926 4.44418C10.926 2.39868 12.5842 0.740479 14.6297 0.740479C16.6752 0.740479 18.3334 2.39868 18.3334 4.44418C18.3334 6.48968 16.6752 8.14789 14.6297 8.14789C13.5625 8.14789 12.6007 7.69651 11.9248 6.97424L8.0369 9.09492C8.10961 9.38446 8.14822 9.68761 8.14822 9.99974C8.14822 10.3119 8.10962 10.6149 8.03693 10.9045L11.9249 13.0252C12.6007 12.303 13.5625 11.8516 14.6297 11.8516C16.6752 11.8516 18.3334 13.5098 18.3334 15.5553C18.3334 17.6008 16.6752 19.259 14.6297 19.259C12.5842 19.259 10.926 17.6008 10.926 15.5553C10.926 15.2432 10.9646 14.94 11.0373 14.6505ZM4.44452 11.8516C5.46727 11.8516 6.29637 11.0225 6.29637 9.99974C6.29637 8.97696 5.46727 8.14789 4.44452 8.14789C3.42177 8.14789 2.59267 8.97696 2.59267 9.99974C2.59267 11.0225 3.42177 11.8516 4.44452 11.8516ZM14.6297 6.29603C15.6525 6.29603 16.4816 5.46693 16.4816 4.44418C16.4816 3.42143 15.6525 2.59233 14.6297 2.59233C13.6069 2.59233 12.7779 3.42143 12.7779 4.44418C12.7779 5.46693 13.6069 6.29603 14.6297 6.29603ZM14.6297 17.4071C15.6525 17.4071 16.4816 16.5781 16.4816 15.5553C16.4816 14.5325 15.6525 13.7034 14.6297 13.7034C13.6069 13.7034 12.7779 14.5325 12.7779 15.5553C12.7779 16.5781 13.6069 17.4071 14.6297 17.4071Z"
                                                                    fill="#040083" />
                                                            </svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rent-sale-area">
                                                <ul>
                                                    <li><a href="#">For Sale</a></li>
                                                    <li><a href="#">New</a></li>
                                                </ul>
                                                <a href="#" class="camera"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="14" viewBox="0 0 16 14"
                                                        fill="none">
                                                        <path
                                                            d="M12 7.39995C12 8.75995 10.96 9.79995 9.6 9.79995C8.24 9.79995 7.2 8.75995 7.2 7.39995C7.2 6.03995 8.24 4.99995 9.6 4.99995C10.96 4.99995 12 6.03995 12 7.39995ZM16 3.39995V12.2C16 13.08 15.28 13.8 14.4 13.8H1.6C0.72 13.8 0 13.08 0 12.2V3.39995C0 2.51995 0.72 1.79995 1.6 1.79995V0.999951H4.8V1.79995H6.4L7.2 0.199951H12L12.8 1.79995H14.4C15.28 1.79995 16 2.51995 16 3.39995ZM4.4 4.99995C4.4 4.35995 3.84 3.79995 3.2 3.79995C2.56 3.79995 2 4.35995 2 4.99995C2 5.63995 2.56 6.19995 3.2 6.19995C3.84 6.19995 4.4 5.63995 4.4 4.99995ZM13.6 7.39995C13.6 5.15995 11.84 3.39995 9.6 3.39995C7.36 3.39995 5.6 5.15995 5.6 7.39995C5.6 9.63995 7.36 11.4 9.6 11.4C11.84 11.4 13.6 9.63995 13.6 7.39995Z"
                                                            fill="#1B1B1B" />
                                                    </svg> 3</a>
                                            </div>
                                            <div class="btn-area1 text-center">
                                                <a href="/property_details/${property.id}" class="vl-btn1">View Property Details
                                                    <span class="arrow1"><i
                                                            class="fa-solid fa-arrow-right"></i></span><span
                                                        class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                            `;

                            // Добавляем созданный блок в контейнер row
                            row.appendChild(propertyBlock);
                        });
                    } else {
                        console.error("Ответ получен, но статус неуспешный:", data);
                    }
                })
                .catch(error => {
                    console.error("Ошибка при запросе:", error);
                });
        });
    </script>
@endsection

@section('footer')
    @include('front.includes.footer')
@endsection
