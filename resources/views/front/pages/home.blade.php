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


    <div class="space30"></div>

    <div class="space20"></div>

    <div class="space30"></div>

    <div class="space30"></div>

    <div class="space20"></div>
    <!--===== OTHERS AREA STARTS =======-->
    <div class="d-none d-lg-block others-section-area container-home1" data-aos="fade-up" data-aos-duration="1000">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <div class="tab-header">
                        <button class="tab-btn active" data-tab="for-sale">Продажа</button>
                        <button class="tab-btn" data-tab="for-rent">Аренда</button>
                    </div>
                    <div class="space24"></div> --}}
                    <form action="/search_grid" method="get">
                        <div class="property-tab-section b-bg1">
                            <div class="tab-content1" id="for-sale">
                                <input type="text" name="start" value="1" hidden>
                                <input type="text" name="limit" value="6" hidden>
                                <div class="filters">
                                    <div class="filter-group">
                                        <label>Типы сделки</label>
                                        <select name="property_available_for">
                                            <option value="none">Все виды сделок</option>
                                            <option value="0">Продажи</option>
                                            <option value="1">Аренды</option>
                                        </select>
                                    </div>
                                    {{-- <div class="filter-group">
                                        <label>Тип предложения</label>
                                        <select name="type">
                                            <option>Все предложения</option>
                                            <option>Новые</option>
                                            <option>Топовые</option>
                                        </select>
                                    </div> --}}
                                    <div class="filter-group">
                                        <label>Город</label>
                                        <select name="city">
                                            <option value="" selected>Все города</option>
                                            <option value="Душанбе">Душанбе
                                            </option>
                                            <option value="Худжанд">Худжанд
                                            </option>
                                            <option value="Бохтар">Бохтар</option>
                                        </select>
                                    </div>
                                    <div class="filter-group">
                                        <label>Тип недвижимости</label>
                                        <select name="property_type_id">
                                            <option value="" selected>Все типы</option>
                                            <option value="1">Дома и коттедж</option>
                                            <option value="2">Квартира</option>
                                            <option value="3">Дом</option>
                                            <option value="4">Таунхаус</option>
                                            <option value="5">Дуплекс</option>
                                            <option value="6">Апартаменты</option>
                                            <option value="7">Студия</option>
                                            <option value="8">Комната</option>
                                            <option value="9">Офис</option>
                                            <option value="10">Торговое помещение</option>
                                            <option value="11">Склад</option>
                                            <option value="12">Производственное помещение</option>
                                            <option value="13">Гостиница</option>
                                            <option value="14">Хостел</option>
                                            <option value="15">Ресторан</option>
                                            <option value="16">Кафе</option>
                                            <option value="17">Участок под ИЖС</option>
                                            <option value="18">Сельскохозяйственный участок</option>
                                            <option value="19">Коммерческий участок</option>
                                            <option value="20">Лесной участок</option>
                                            <option value="21">Гараж</option>
                                            <option value="22">Паркинг</option>
                                            <option value="23">Автосервис</option>
                                            <option value="24">Спортивный комплекс</option>
                                            <option value="25">Развлекательный комплекс</option>
                                            <option value="26">Медицинский центр</option>
                                            <option value="27">Школа</option>
                                            <option value="28">Детский сад</option>
                                        </select>
                                    </div>
                                    {{-- <div class="filter-group">
                                        <label for="customize-sale">Фильтры</label>
                                        <button id="customize-sale" class="customize-sale show-form">
                                            Настроить
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path
                                                        d="M6.17071 18C6.58254 16.8348 7.69378 16 9 16C10.3062 16 11.4175 16.8348 11.8293 18H22V20H11.8293C11.4175 21.1652 10.3062 22 9 22C7.69378 22 6.58254 21.1652 6.17071 20H2V18H6.17071ZM12.1707 11C12.5825 9.83481 13.6938 9 15 9C16.3062 9 17.4175 9.83481 17.8293 11H22V13H17.8293C17.4175 14.1652 16.3062 15 15 15C13.6938 15 12.5825 14.1652 12.1707 13H2V11H12.1707ZM6.17071 4C6.58254 2.83481 7.69378 2 9 2C10.3062 2 11.4175 2.83481 11.8293 4H22V6H11.8293C11.4175 7.16519 10.3062 8 9 8C7.69378 8 6.58254 7.16519 6.17071 6H2V4H6.17071Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div> --}}
                                    <div class="search-button">
                                        <button id="search-sale" type="submit">
                                            Поиск
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
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="d-md-block d-lg-none others-section-area others2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <div class="tab-header">
                        <button class="tab-btn active" data-tab="for-sale">Продажа</button>
                        <button class="tab-btn" data-tab="for-rent">Аренда</button>
                    </div>
                    <div class="space24"></div> --}}
                    <form action="/search_grid" method="get">
                        <div class="property-tab-section b-bg1">
                            <div class="tab-content1" id="for-sale">
                                <div class="filters">
                                    <input type="text" name="start" value="0" hidden>
                                    <div class="filter-group">
                                        <label for="customize-sale">Фильтры</label>
                                        <button id="customize-sale" class="customize-sale show-form">
                                            Настроить <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="currentColor">
                                                    <path
                                                        d="M6.17071 18C6.58254 16.8348 7.69378 16 9 16C10.3062 16 11.4175 16.8348 11.8293 18H22V20H11.8293C11.4175 21.1652 10.3062 22 9 22C7.69378 22 6.58254 21.1652 6.17071 20H2V18H6.17071ZM12.1707 11C12.5825 9.83481 13.6938 9 15 9C16.3062 9 17.4175 9.83481 17.8293 11H22V13H17.8293C17.4175 14.1652 16.3062 15 15 15C13.6938 15 12.5825 14.1652 12.1707 13H2V11H12.1707ZM6.17071 4C6.58254 2.83481 7.69378 2 9 2C10.3062 2 11.4175 2.83481 11.8293 4H22V6H11.8293C11.4175 7.16519 10.3062 8 9 8C7.69378 8 6.58254 7.16519 6.17071 6H2V4H6.17071Z">
                                                    </path>
                                                </svg></span>
                                        </button>
                                    </div>
                                    <div class="search-button" style="width: 100%">
                                        <button id="search-sale" type="submit" style="width: 100%">
                                            Поиск
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
                            <div class="wd-search-form">
                                <div class=" group-select">
                                    <div class="box-select">
                                        <h5>Типы сделки</h5>
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Все виды</span>
                                            <ul class="list">
                                                <li data-value="Все статусы"
                                                    class='option selected'
                                                    onclick="setSelectValue('', this, 'property_available_for')">Все виды
                                                </li>
                                                <li data-value="Для аренды"
                                                    class='option'
                                                    onclick="setSelectValue(1, this, 'property_available_for')">Для аренды
                                                </li>
                                                <li data-value="3"
                                                    class='option'
                                                    onclick="setSelectValue(0, this, 'property_available_for')">Для продажи
                                                </li>
                                            </ul>
                                            <input type="text" name="property_available_for" value="" hidden>
                                        </div>
                                    </div>
                                    <div class="box-select">
                                        <h5>Город</h5>
                                        <select name="city">
                                            <option value="" selected>Все города</option>
                                            <option value="Душанбе">Душанбе
                                            </option>
                                            <option value="Худжанд">Худжанд
                                            </option>
                                            <option value="Бохтар">Бохтар</option>
                                        </select>
                                    </div>
                                    <div class="box-select">
                                        <h5>Спальни</h5>
                                        <div class="nice-select" tabindex="0">
                                            <span class="current"></span>
                                            <ul class="list">
                                                <li data-value="1" class="option"
                                                    onclick="setSelectValue(1, this, 'bedrooms')">1</li>
                                                <li data-value="2" class="option"
                                                    onclick="setSelectValue(2, this, 'bedrooms')">2</li>
                                                <li data-value="3" class="option"
                                                    onclick="setSelectValue(3, this, 'bedrooms')">3</li>
                                                <li data-value="4" class="option"
                                                    onclick="setSelectValue(4, this, 'bedrooms')">4</li>
                                                <li data-value="5" class="option"
                                                    onclick="setSelectValue(5, this, 'bedrooms')">5</li>
                                                <li data-value="6" class="option"
                                                    onclick="setSelectValue(6, this, 'bedrooms')">6</li>
                                                <li data-value="7" class="option"
                                                    onclick="setSelectValue(7, this, 'bedrooms')">7</li>
                                                <li data-value="8" class="option"
                                                    onclick="setSelectValue(8, this, 'bedrooms')">8</li>
                                                <li data-value="9" class="option"
                                                    onclick="setSelectValue(9, this, 'bedrooms')">9</li>
                                                <li data-value="10" class="option"
                                                    onclick="setSelectValue(10, this, 'bedrooms')">10</li>
                                            </ul>
                                            <input type="text" name="bedrooms" value="" hidden>
                                        </div>
                                    </div>
                                    <div class="box-select">
                                        <h5>Санузел</h5>
                                        <div class="nice-select" tabindex="0">
                                            <span class="current"></span>
                                            <ul class="list">
                                                <li data-value="1" class="option"
                                                    onclick="setSelectValue(1, this, 'bathrooms')">1</li>
                                                <li data-value="2" class="option"
                                                    onclick="setSelectValue(2, this, 'bathrooms')">2</li>
                                                <li data-value="3" class="option"
                                                    onclick="setSelectValue(3, this, 'bathrooms')">3</li>
                                                <li data-value="4" class="option"
                                                    onclick="setSelectValue(4, this, 'bathrooms')">4</li>
                                                <li data-value="5" class="option"
                                                    onclick="setSelectValue(5, this, 'bathrooms')">5</li>
                                                <li data-value="6" class="option"
                                                    onclick="setSelectValue(6, this, 'bathrooms')">6</li>
                                                <li data-value="7" class="option"
                                                    onclick="setSelectValue(7, this, 'bathrooms')">7</li>
                                                <li data-value="8" class="option"
                                                    onclick="setSelectValue(8, this, 'bathrooms')">8</li>
                                                <li data-value="9" class="option"
                                                    onclick="setSelectValue(9, this, 'bathrooms')">9</li>
                                                <li data-value="10" class="option"
                                                    onclick="setSelectValue(10, this, 'bathrooms')">10</li>
                                            </ul>
                                            <input type="text" name="bathrooms" value="" hidden>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="group-price">
                                    <div class="slider-item">
                                        <div class="slider-label">Диапазон цен: <span id="price-output">$200 -
                                                $2,500,000</span>
                                        </div>
                                        <div class="slider price-slider">
                                            <input type="range" id="price-range-min" class="range-min" min="1000"
                                                max="25000000" name="price_from" value="0"
                                                step="100">
                                            <input type="range" id="price-range-max" class="range-max" min="10000"
                                                max="25000000" name="price_to" value="25000000"
                                                step="100">
                                            <div class="slider-fill"></div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <div class="slider-label">Диапазон площади: <span id="size-output">146 кв/м - 448
                                                кв/м</span>
                                        </div>
                                        <div class="slider size-slider">
                                            <input type="range" name="area_from" id="size-range-min" class="range-min"
                                                min="0" max="1000" value="0"
                                                step="1">
                                            <input type="range" name="area_to" id="size-range-max" class="range-max"
                                                min="50" max="1000" value="1000"
                                                step="1">
                                            <div class="slider-fill"></div>
                                        </div>
                                    </div>
                                </div>
                                <input id="limitInput1" value="6" name="limit" hidden>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--===== OTHERS AREA STARTS =======-->


    <div class="space20"></div>

    <!--===== PROPERTY AREA STARTS =======-->
    <div class="property1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="heading1 text-center">
                        {{-- <h5>Наши объекты недвижимости</h5> --}}
                        <div class="space16"></div>
                        <h2 class="text-anime-style-2">Посмотрите наши топ рекомендации</h2>
                    </div>
                    <div class="space40"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-tabs-area">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row" id="property-list">
                                    @php
                                    try {
                                    @endphp
                                    @foreach ($future_properties as $property)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="property-single-boxarea">
                                                <div class="property-list-img-area owl-carousel">
                                                    @foreach ($property['media'] as $media)
                                                        <a href="/property_details?property_id={{ $property['id'] }}">
                                                            <div class="img1 image-anime">
                                                                <img src="{{ $media['content'] }}" alt="housa"
                                                                    style="height: 294px">
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                </div>
                                                <div class="space20"></div>
                                                <div class="property-price" style="min-height: 150px">
                                                    <div class="text" style="width: 60%">
                                                        <a href="/property_details?property_id={{ $property['id'] }}"
                                                            class="title">
                                                            {{ $property['title'] }}
                                                        </a>
                                                        <div class="space16"></div>
                                                        <p>{{ $property['address'] }}</p>
                                                    </div>
                                                    <a href="/property_details?property_id={{ $property['id'] }}" class="price" style="font-size: 14px!important">
                                                        {{ formatTJS($property['first_price']) }}
                                                    </a>
                                                </div>
                                                <div class="space20"></div>
                                                <div class="property-other-widget">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span>
                                                                <svg fill="#1B1B1B" width="24"
                                                                height="24" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                                                        viewBox="0 0 512 512" xml:space="preserve">
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
                                                                                H480V490.667z"/>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            {{ $property['floor_number'] }} Этаж
                                                        </div>
                                                        <div class="col-6">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M22 17.5H2" stroke="#1B1B1B"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
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
                                                                </svg>
                                                            </span>
                                                            {{ $property['bedrooms'] }} Комнат
                                                        </div>
                                                        <div class="col-6">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M8 9H16M8 15H16" stroke="#1B1B1B"
                                                                        stroke-width="1.5" stroke-linejoin="round" />
                                                                    <path d="M3 21H21V3.00046L3 3V21Z" stroke="#1B1B1B"
                                                                        stroke-width="1.5" stroke-linejoin="round" />
                                                                </svg>
                                                            </span>{{ $property['area'] }} кв/м
                                                        </div>
                                                        <div class="col-6">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
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
                                                                    <path d="M8 6L10.5 4" stroke="#1B1B1B"
                                                                        stroke-width="1.5" stroke-linecap="round" />
                                                                </svg>
                                                            </span>
                                                            {{ $property['bathrooms'] }} Санузел
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rent-sale-area">
                                                    <ul>
                                                        <li><a href="/property_details?property_id={{ $property['id'] }}">
                                                                @if ($property['property_available_for'] == 0)
                                                                    Для продажи
                                                                @else
                                                                    Для аренды
                                                                @endif
                                                            </a></li>
                                                        <li><a href="#">Новое</a></li>
                                                    </ul>
                                                    <a href="/property_details?property_id={{ $property['id'] }}" class="camera"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="14" viewBox="0 0 16 14" fill="none">
                                                            <path
                                                                d="M12 7.39995C12 8.75995 10.96 9.79995 9.6 9.79995C8.24 9.79995 7.2 8.75995 7.2 7.39995C7.2 6.03995 8.24 4.99995 9.6 4.99995C10.96 4.99995 12 6.03995 12 7.39995ZM16 3.39995V12.2C16 13.08 15.28 13.8 14.4 13.8H1.6C0.72 13.8 0 13.08 0 12.2V3.39995C0 2.51995 0.72 1.79995 1.6 1.79995V0.999951H4.8V1.79995H6.4L7.2 0.199951H12L12.8 1.79995H14.4C15.28 1.79995 16 2.51995 16 3.39995ZM4.4 4.99995C4.4 4.35995 3.84 3.79995 3.2 3.79995C2.56 3.79995 2 4.35995 2 4.99995C2 5.63995 2.56 6.19995 3.2 6.19995C3.84 6.19995 4.4 5.63995 4.4 4.99995ZM13.6 7.39995C13.6 5.15995 11.84 3.39995 9.6 3.39995C7.36 3.39995 5.6 5.15995 5.6 7.39995C5.6 9.63995 7.36 11.4 9.6 11.4C11.84 11.4 13.6 9.63995 13.6 7.39995Z"
                                                                fill="#1B1B1B" />
                                                        </svg>
                                                        {{ count($property['media']) }}
                                                    </a>
                                                </div>
                                                <div class="btn-area1 text-center">
                                                    <a href="/property_details?property_id={{ $property['id'] }}"
                                                        class="vl-btn1">
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

                                    @php
                                    } catch (\Throwable $e) {
                                        // echo 'Произошла ошибка: ' . $e->getMessage();
                                    }
                                @endphp
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

    <div class="space20"></div>

    <!--===== PROPERTY AREA STARTS =======-->
    <div class="property1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="heading1 text-center">
                        {{-- <h5>Наши объекты недвижимости</h5> --}}
                        <div class="space16"></div>
                        <h2 class="text-anime-style-2">Последние добавленные объекты</h2>
                    </div>
                    <div class="space40"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-tabs-area">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row" id="property-list">
                                    @php
                                    try {
                                    @endphp
                                    @foreach ($response['data'] as $property)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="property-single-boxarea">
                                                <div class="property-list-img-area owl-carousel">
                                                    @foreach ($property['media'] as $media)
                                                        <a href="/property_details?property_id={{ $property['id'] }}">
                                                            <div class="img1 image-anime">
                                                                <img src="{{ $media['content'] }}" alt="housa"
                                                                    style="height: 294px">
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                </div>
                                                <div class="space20"></div>
                                                <div class="property-price" style="min-height: 150px">
                                                    <div class="text" style="width: 60%">
                                                        <a href="/property_details?property_id={{ $property['id'] }}"
                                                            class="title">
                                                            {{ $property['title'] }}
                                                        </a>
                                                        <div class="space16"></div>
                                                        <p>{{ $property['address'] }}</p>
                                                    </div>
                                                    <a href="/property_details?property_id={{ $property['id'] }}" class="price" style="font-size: 14px!important">
                                                        {{ formatTJS($property['first_price']) }}
                                                    </a>
                                                </div>
                                                <div class="space20"></div>
                                                <div class="property-other-widget">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span>
                                                                <svg fill="#1B1B1B" width="24"
                                                                height="24" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                                                        viewBox="0 0 512 512" xml:space="preserve">
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
                                                                                H480V490.667z"/>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            {{ $property['floor_number'] }} Этаж
                                                        </div>
                                                        <div class="col-6">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M22 17.5H2" stroke="#1B1B1B"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
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
                                                                </svg>
                                                            </span>
                                                            {{ $property['bedrooms'] }} Комнат
                                                        </div>
                                                        <div class="col-6">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M8 9H16M8 15H16" stroke="#1B1B1B"
                                                                        stroke-width="1.5" stroke-linejoin="round" />
                                                                    <path d="M3 21H21V3.00046L3 3V21Z" stroke="#1B1B1B"
                                                                        stroke-width="1.5" stroke-linejoin="round" />
                                                                </svg>
                                                            </span>{{ $property['area'] }} кв/м
                                                        </div>
                                                        <div class="col-6">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
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
                                                                    <path d="M8 6L10.5 4" stroke="#1B1B1B"
                                                                        stroke-width="1.5" stroke-linecap="round" />
                                                                </svg>
                                                            </span>
                                                            {{ $property['bathrooms'] }} Санузел
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rent-sale-area">
                                                    <ul>
                                                        <li><a href="/property_details?property_id={{ $property['id'] }}">
                                                                @if ($property['property_available_for'] == 0)
                                                                    Для продажи
                                                                @else
                                                                    Для аренды
                                                                @endif
                                                            </a></li>
                                                        <li><a href="#">Новое</a></li>
                                                    </ul>
                                                    <a href="/property_details?property_id={{ $property['id'] }}" class="camera"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="14" viewBox="0 0 16 14" fill="none">
                                                            <path
                                                                d="M12 7.39995C12 8.75995 10.96 9.79995 9.6 9.79995C8.24 9.79995 7.2 8.75995 7.2 7.39995C7.2 6.03995 8.24 4.99995 9.6 4.99995C10.96 4.99995 12 6.03995 12 7.39995ZM16 3.39995V12.2C16 13.08 15.28 13.8 14.4 13.8H1.6C0.72 13.8 0 13.08 0 12.2V3.39995C0 2.51995 0.72 1.79995 1.6 1.79995V0.999951H4.8V1.79995H6.4L7.2 0.199951H12L12.8 1.79995H14.4C15.28 1.79995 16 2.51995 16 3.39995ZM4.4 4.99995C4.4 4.35995 3.84 3.79995 3.2 3.79995C2.56 3.79995 2 4.35995 2 4.99995C2 5.63995 2.56 6.19995 3.2 6.19995C3.84 6.19995 4.4 5.63995 4.4 4.99995ZM13.6 7.39995C13.6 5.15995 11.84 3.39995 9.6 3.39995C7.36 3.39995 5.6 5.15995 5.6 7.39995C5.6 9.63995 7.36 11.4 9.6 11.4C11.84 11.4 13.6 9.63995 13.6 7.39995Z"
                                                                fill="#1B1B1B" />
                                                        </svg>
                                                        {{ count($property['media']) }}
                                                    </a>
                                                </div>
                                                <div class="btn-area1 text-center">
                                                    <a href="/property_details?property_id={{ $property['id'] }}"
                                                        class="vl-btn1">
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

                                    @php
                                    } catch (\Throwable $e) {
                                        // echo 'Произошла ошибка: ' . $e->getMessage();
                                    }
                                @endphp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="space40"></div>
                    <div class="text-center">
                        <a href="/search_grid" class="vl-btn1">Смотреть все объекты
                            <span class="arrow1">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                            <span class="arrow2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                    <div class="space80"></div>
                </div>
            </div>
        </div>
    </div>
    <!--===== PROPERTY AREA ENDS =======-->
    {{-- <div class="space30"></div> --}}

    <!--===== HERO AREA STARTS =======-->
    {{-- <div class="hero1-section-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-heading-content heading1">
                        <h1 class="text-anime-style-3">
                            Недвижимость рядом с вами
                        </h1>
                        <div class="space20"></div>
                        <p class="text-anime-style-1">
                            Откройте для себя рынок недвижимости без границ.
                            Мы предлагаем эксклюзивные объекты с уникальными возможностями: прямые сделки без посредников,
                            персональные условия финансирования, редкие форматы жилья и премиальную поддержку на всех этапах
                            покупки.
                            Наши предложения — это не просто квадратные метры, это инвестиции в ваше лучшее будущее.
                                Вместе мы находим то, что другие даже не могут предложить!
                        </p>
                        <div class="space32"></div>
                        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
                            <a href="/add_property" class="vl-btn1">
                                Добавить объявление
                                <span class="arrow1">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                                <span class="arrow2">
                                    <i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                        <div class="space80 d-lg-block d-none"></div>
                        <div class="space40 d-lg-none d-block"></div>
                        <div class="counter-boxarea">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-6" data-aos="fade-up" data-aos-duration="300">
                                    <div class="counter-box">
                                        <h1><span class="odometer text-nowrap" data-count="180"></span>+</h1>
                                        <div class="space10"></div>
                                        <p>Продажа недвижимости</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6" data-aos="fade-up" data-aos-duration="500">
                                    <div class="counter-box">
                                        <h1><span class="odometer text-nowrap" data-count="120"></span>+</h1>
                                        <div class="space10"></div>
                                        <p>Покупка недвижимости</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-up" data-aos-duration="700">
                                    <div class="space30 d-md-none d-block"></div>
                                    <div class="counter-box">
                                        <h1><span class="odometer text-nowrap" data-count="150"></span>+</h1>
                                        <div class="space10"></div>
                                        <p>Недвижимость доступна</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-images-area image-anime">
                        <img src="/assets/img/hero-img1.png" alt="housa">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="space20"></div> --}}
    <!--===== HERO AREA ENDS =======-->

    <!--===== ABOUT AREA STARTS =======-->
    {{-- <div class="about1-section-area container-home1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-img1 image-anime reveal">
                        <img src="/assets/img/all-images/about/about-img1.png" alt="housa">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="heading1">
                        <div class="head">
                            <h5>О компании</h5>
                            <div class="space16"></div>
                            <h3 class="text-anime-style-2">Мы меняем представление о рынке недвижимости.</h3>
                        </div>
                        <div class="space20"></div>
                        <div class="perag-bg">
                            <p data-aos="fade-up" data-aos-duration="900">
                                Наша компания объединяет лучшие объекты, новейшие технологии и индивидуальный подход. Мы не
                                просто продаем квартиры и дома — мы создаем пространство для вашей жизни и развития.
                                Благодаря прямому доступу к уникальным проектам, собственным инвестиционным решениям и
                                юридическому сопровождению, мы предлагаем то, что другие не могут: безопасность, выгоду и
                                эксклюзивный выбор.
                                С нами вы покупаете не просто недвижимость — вы покупаете уверенность в завтрашнем дне.
                            </p>
                            <div class="space32"></div>
                            <div class="btn-area1" data-aos="fade-up" data-aos-duration="1000">
                                <a href="/search_grid" class="vl-btn1">Смотреть посты<span class="arrow1"><i
                                            class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-img2 image-anime reveal">
                        <img src="/assets/img/all-images/about/about-img2.png" alt="housa">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!--===== BLOG AREA ENDS =======-->
    <div class="space30"></div>

    <script>
        function setSelectValue(value, element, fieldName) {
            // Устанавливаем значение в input с указанным именем
            const input = document.querySelector(`input[name="${fieldName}"]`);
            const current = element.closest('.nice-select').querySelector('.current');
            const options = element.parentElement.querySelectorAll('.option');

            if (input && current) {
                input.value = value;
                current.textContent = element.textContent;

                // Удаляем старый .selected и добавляем новый
                options.forEach(opt => opt.classList.remove('selected'));
                element.classList.add('selected');
            }
        }
    </script>
@endsection

@section('footer')
    @include('front.includes.footer')
@endsection
