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
    {{-- @include('front.includes.hero') --}}
    <!--===== HERO AREA ENDS =======-->

    <div class="space30"></div>
    <div class="space30"></div>
    <div class="space30"></div>
    <div class="space30"></div>

    <!--===== OTHERS AREA STARTS =======-->
    {{-- Карта гугл --}}
    {{-- <div class="map-grid-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="grid-maps-area">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4506257.120552435!2d88.67021924228865!3d21.954385721237916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1704088968016!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space30"></div> --}}
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
                                    <input type="text" name="start" value="{{ $start }}" hidden>
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
                                            <span class="current">Все виды сделок</span>
                                            <ul class="list">
                                                <li data-value="Все виды сделок"
                                                    class={{ $property_available_for == 'none' ? 'option selected' : 'option' }}
                                                    onclick="setSelectValue('none', this, 'property_available_for')">Все
                                                    виды сделок
                                                </li>
                                                <li data-value="Аренда"
                                                    class={{ $property_available_for == 1 ? 'option selected' : 'option' }}
                                                    onclick="setSelectValue(1, this, 'property_available_for')">Аренда
                                                </li>
                                                <li data-value="Продажа"
                                                    class={{ $property_available_for == 0 ? 'option selected' : 'option' }}
                                                    onclick="setSelectValue(0, this, 'property_available_for')">Продажа
                                                </li>
                                            </ul>
                                            <input type="text" name="property_available_for"
                                                value="{{ $property_available_for }}" hidden>
                                        </div>
                                    </div>
                                    <div class="box-select">
                                        <h5>Город</h5>
                                        <select name="city">
                                            <option value="" {{ $city == '' ? 'selected' : '' }}>Все города</option>
                                            <option value="Душанбе" {{ $city == 'Душанбе' ? 'selected' : '' }}>Душанбе
                                            </option>
                                            <option value="Худжанд" {{ $city == 'Худжанд' ? 'selected' : '' }}>Худжанд
                                            </option>
                                            <option value="Бохтар" {{ $city == 'Бохтар' ? 'selected' : '' }}>Бохтар
                                            </option>
                                        </select>
                                    </div>
                                    <div class="box-select">
                                        <h5>Спальни</h5>
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">{{ $bedrooms }}</span>
                                            <ul class="list">
                                                <li data-value="{{ $bedrooms == 0 ? 'Кол-во спален не выбрано' : $bedrooms }}"
                                                    class="option selected"
                                                    onclick="setSelectValue({{ $bedrooms }}, this, 'bedrooms')">
                                                    {{ $bedrooms }}</li>
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
                                            <input type="text" name="bedrooms" value="{{ $bedrooms }}" hidden>
                                        </div>
                                    </div>
                                    <div class="box-select">
                                        <h5>Санузел</h5>
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">{{ $bathrooms }}</span>
                                            <ul class="list">
                                                <li data-value="{{ $bathrooms == 0 ? 'Кол-во санузлов не выбрано' : $bathrooms }}"
                                                    class="option selected"
                                                    onclick="setSelectValue({{ $bathrooms }}, this, 'bathrooms')">
                                                    {{ $bathrooms }}</li>
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
                                            <input type="text" name="bathrooms" value="0" hidden>
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
                                                max="2500000" name="price_from" value="{{ $price_from }}"
                                                step="100">
                                            <input type="range" id="price-range-max" class="range-max" min="10000"
                                                max="2500000" name="price_to" value="{{ $price_to }}"
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
                                                min="0" max="1000" value="{{ $area_from }}"
                                                step="1">
                                            <input type="range" name="area_to" id="size-range-max" class="range-max"
                                                min="50" max="1000" value="{{ $area_to }}"
                                                step="1">
                                            <div class="slider-fill"></div>
                                        </div>
                                    </div>
                                </div>
                                <input id="limitInput1" value="{{ $limit }}" name="limit" hidden>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--===== OTHERS AREA STARTS =======-->
    <div class="space30"></div>
    <!--===== PROPERTY AREA STARTS =======-->
    <div class="property-inner-section-find">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{-- <div id="map" style="height: 500px;"></div> --}}
                </div>
                {{-- <div class="space32"></div>
                <div class="space32"></div> --}}
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-mapgrid-area">
                        <div class="d-none d-lg-block heading1" style="width: 100%;">
                            <div class="row">
                                <div class="col-8">
                                    <h3>Все объявления</h3>
                                </div>
                                <div class="col-4">
                                    <div class="tabs-btn">
                                        <ul>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" onclick="location.href='/search_grid'"
                                                    data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                                                    role="tab" aria-controls="pills-home" aria-selected="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30"
                                                        viewBox="0 0 31 30" fill="none">
                                                        <path
                                                            d="M5.1875 13.1231C4.93886 13.1231 4.7004 13.0244 4.52459 12.8485C4.34877 12.6727 4.25 12.4343 4.25 12.1856V4.6875C4.25 4.43886 4.34877 4.2004 4.52459 4.02459C4.7004 3.84877 4.93886 3.75 5.1875 3.75H12.6875C12.9361 3.75 13.1746 3.84877 13.3504 4.02459C13.5262 4.2004 13.625 4.43886 13.625 4.6875V12.1856C13.625 12.4343 13.5262 12.6727 13.3504 12.8485C13.1746 13.0244 12.9361 13.1231 12.6875 13.1231H5.1875ZM18.3125 13.1231C18.0639 13.1231 17.8254 13.0244 17.6496 12.8485C17.4738 12.6727 17.375 12.4343 17.375 12.1856V4.6875C17.375 4.43886 17.4738 4.2004 17.6496 4.02459C17.8254 3.84877 18.0639 3.75 18.3125 3.75H25.8106C26.0593 3.75 26.2977 3.84877 26.4735 4.02459C26.6494 4.2004 26.7481 4.43886 26.7481 4.6875V12.1856C26.7481 12.4343 26.6494 12.6727 26.4735 12.8485C26.2977 13.0244 26.0593 13.1231 25.8106 13.1231H18.3125ZM5.1875 26.2481C4.93886 26.2481 4.7004 26.1494 4.52459 25.9735C4.34877 25.7977 4.25 25.5593 4.25 25.3106V17.8106C4.25 17.562 4.34877 17.3235 4.52459 17.1477C4.7004 16.9719 4.93886 16.8731 5.1875 16.8731H12.6875C12.9361 16.8731 13.1746 16.9719 13.3504 17.1477C13.5262 17.3235 13.625 17.562 13.625 17.8106V25.3106C13.625 25.5593 13.5262 25.7977 13.3504 25.9735C13.1746 26.1494 12.9361 26.2481 12.6875 26.2481H5.1875ZM18.3125 26.2481C18.0639 26.2481 17.8254 26.1494 17.6496 25.9735C17.4738 25.7977 17.375 25.5593 17.375 25.3106V17.8106C17.375 17.562 17.4738 17.3235 17.6496 17.1477C17.8254 16.9719 18.0639 16.8731 18.3125 16.8731H25.8106C26.0593 16.8731 26.2977 16.9719 26.4735 17.1477C26.6494 17.3235 26.7481 17.562 26.7481 17.8106V25.3106C26.7481 25.5593 26.6494 25.7977 26.4735 25.9735C26.2977 26.1494 26.0593 26.2481 25.8106 26.2481H18.3125Z"
                                                            fill="#ED8438" />
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" onclick="location.href='/search_map'"
                                                    data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                                                    role="tab" aria-controls="pills-profile" aria-selected="false">
                                                    <svg width="31" height="30" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 6H12.01M9 20L3 17V4L5 5M9 20L15 17M9 20V14M15 17L21 20V7L19 6M15 17V14M15 6.2C15 7.96731 13.5 9.4 12 11C10.5 9.4 9 7.96731 9 6.2C9 4.43269 10.3431 3 12 3C13.6569 3 15 4.43269 15 6.2Z"
                                                            stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="filter-group" style="margin: 0 20px 0 0;">
                                            <select id="limitSelect" onchange="updateLimit(this.value)">
                                                <option value="6" {{ $limit == 6 ? 'selected' : '' }}>
                                                    <a
                                                        href="/search_grid?limit=6&property_available_for={{ $property_available_for }}&city={{ $city }}&bedrooms={{ $bedrooms }}&bathrooms={{ $bathrooms }}&price_from={{ $price_from }}&price_to={{ $price_to }}&area_from={{ $area_from }}&area_to={{ $area_to }}&start={{ $start }}">
                                                        Отображать по: (6)
                                                    </a>
                                                </option>
                                                <option value="12" {{ $limit == 12 ? 'selected' : '' }}>Отображать по:
                                                    (12)
                                                </option>
                                                <option value="30" {{ $limit == 30 ? 'selected' : '' }}>Отображать по:
                                                    (30)
                                                </option>
                                                <option value="50" {{ $limit == 50 ? 'selected' : '' }}>Отображать по:
                                                    (50)
                                                </option>
                                            </select>
                                        </div>
                                        {{-- <div class="filter-group">
                                            <select>
                                                <option>Sort by (Default)</option>
                                                <option>Oldest</option>
                                                <option>Newest</option>
                                            </select>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space32"></div>
                        <div class="row">
                            <div class="d-none d-lg-block col-lg-4">
                                <div class="sidebar1-area">
                                    <form action="/search_grid" method="get">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home1" role="tabpanel"
                                                aria-labelledby="pills-home1-tab" tabindex="0">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="input-area m-0">
                                                            <select name="property_available_for"
                                                                class="country-area nice-select">
                                                                <option value="none"
                                                                    {{ $property_available_for == 'none' ? 'selected' : '' }}>
                                                                    Все виды сделок
                                                                </option>
                                                                <option value="0"
                                                                    {{ $property_available_for == 0 ? 'selected' : '' }}>
                                                                    Для
                                                                    продажи
                                                                </option>
                                                                <option value="1"
                                                                    {{ $property_available_for == 1 ? 'selected' : '' }}>
                                                                    Для
                                                                    аренды
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="input-area m-0">
                                                            <select name="city" class="country-area nice-select">
                                                                <option value=""
                                                                    {{ $city == '' ? 'selected' : '' }}>Все города</option>
                                                                <option value="Душанбе"
                                                                    {{ $city == 'Душанбе' ? 'selected' : '' }}>Душанбе
                                                                </option>
                                                                <option value="Худжанд"
                                                                    {{ $city == 'Худжанд' ? 'selected' : '' }}>Худжанд
                                                                </option>
                                                                <option value="Бохтар"
                                                                    {{ $city == 'Бохтар' ? 'selected' : '' }}>Бохтар
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="input-area">
                                                            <select name="bedrooms" class="country-area nice-select">
                                                                <option value="{{ $bedrooms }}" selected
                                                                    data-display="@switch($bedrooms)@case(1)1 Спальня@break@case(2)2 Спальни@break@case(3)3 Спальни@break@case(4)4 Спальни@break@case(5)5 Спален@break@defaultКол-во спален не выбрано@endSwitch">
                                                                    @switch($bedrooms)
                                                                        @case(1)
                                                                            1 Спальня
                                                                        @break

                                                                        @case(2)
                                                                            2 Спальни
                                                                        @break

                                                                        @case(3)
                                                                            3 Спальни
                                                                        @break

                                                                        @case(4)
                                                                            4 Спальни
                                                                        @break

                                                                        @case(5)
                                                                            5 Спален
                                                                        @break

                                                                        @default
                                                                            Кол-во спален не выбрано
                                                                    @endswitch
                                                                </option>
                                                                <option value="">Кол-во спален не выбрано</option>
                                                                <option value="1">1 Спальня</option>
                                                                <option value="2">2 Спальни</option>
                                                                <option value="3">3 Спальни</option>
                                                                <option value="4">4 Спальни</option>
                                                                <option value="5">5 Спален</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-area">
                                                            <select class="country-area nice-select" name="bathrooms">
                                                                <option value="{{ $bathrooms }}" selected
                                                                    data-display="@switch($bathrooms)@case(1)1 Санузел@break@case(2)2 Санузла@break@case(3)3 Санузла@break@case(4)4 Санузла@break@case(5)5 Санузлов@break@defaultСанузел не ограничен@endSwitch">
                                                                    @switch($bathrooms)
                                                                        @case(1)
                                                                            1 Санузел
                                                                        @break

                                                                        @case(2)
                                                                            2 Санузла
                                                                        @break

                                                                        @case(3)
                                                                            3 Санузла
                                                                        @break

                                                                        @case(4)
                                                                            4 Санузла
                                                                        @break

                                                                        @case(5)
                                                                            5 Санузлов
                                                                        @break

                                                                        @default
                                                                            Санузел не ограничен
                                                                    @endswitch
                                                                </option>
                                                                <option value="">Санузел не ограничен</option>
                                                                <option value="1">1 Санузел</option>
                                                                <option value="2">2 Санузла</option>
                                                                <option value="3">3 Санузла</option>
                                                                <option value="4">4 Санузла</option>
                                                                <option value="5">5 Санузлов</option>
                                                            </select>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="input-area">
                                                                    <input name="price_from" type=""
                                                                        placeholder="Цена от"
                                                                        value="{{ $price_from == 0 ? 0 : $price_from }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="input-area">
                                                                    <input name="price_to" type="number"
                                                                        placeholder="Цена до"
                                                                        value="{{ $price_to == 0 ? 0 : $price_to }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="input-area">
                                                                    <input name="area_from" type="number"
                                                                        placeholder="Площадь от"
                                                                        value="{{ $area_from == 0 ? 0 : $area_from }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="input-area">
                                                                    <input name="area_to" type="number"
                                                                        placeholder="Площадь до"
                                                                        value="{{ $area_to == 0 ? 0 : $area_to }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input id="limitInput2" value="{{ $limit }}" name="limit"
                                                        hidden>
                                                </div>
                                                <div class="space32"></div>
                                                <button class="col-12 vl-btn1" type="submit">
                                                    Поиск недвижимости
                                                    <span class="arrow1">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </span>
                                                    <span class="arrow2">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="space30 d-lg-none d-block"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="tab-content" id="pills-tabContent1">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab" tabindex="0">
                                        <div class="row">
                                            @if (count($resultsProperties) > 0)
                                                @foreach ($resultsProperties as $property)
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="property-single-boxarea">
                                                            <div class="property-list-img-area owl-carousel">
                                                                @foreach ($property['media'] as $item)
                                                                    <div class="img1">
                                                                        <a
                                                                            href="/property_details?property_id={{ $property['id'] }}">
                                                                            <img src="{{ $item['content'] }}"
                                                                                alt="housa" style="height: 294px">
                                                                        </a>
                                                                    </div>
                                                                @endforeach
                                                                {{-- <div class="img1 image-anime">
                                                                <a
                                                                    href="/property_details?property_id={{ $property['id'] }}">
                                                                    <img src="{{ $property['media'][0]['content'] }}" alt="housa"
                                                                        style="height: 294px">
                                                                </a>
                                                            </div> --}}
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="property-price" style="min-height: 150px">
                                                                <div class="text">
                                                                    <a href="/property_details?property_id={{ $property['id'] }}"
                                                                        class="title">
                                                                        {{ $property['title'] }}
                                                                    </a>
                                                                    <div class="space16"></div>
                                                                    <p>{{ $property['address'] }}</p>
                                                                </div>
                                                                {{-- <a href="/property_details?property_id={{ $property['id'] }}"
                                                                class="price" style="font-size: 14px!important;">
                                                                {{ formatTJS($property['first_price']) }}
                                                            </a> --}}
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="property-other-widget">
                                                                <ul>
                                                                    <li>
                                                                        <span>
                                                                            <svg fill="#1B1B1B" width="24"
                                                                                height="24" version="1.1"
                                                                                id="Layer_1"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                viewBox="0 0 512 512"
                                                                                xml:space="preserve">
                                                                                <g>
                                                                                    <g>
                                                                                        <path
                                                                                            d="M490.667,170.667H416V21.333h74.667c5.867,0,10.667-4.8,10.667-10.667C501.333,4.8,496.533,0,490.667,0h-85.333
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
                                                                        </span>{{ $property['area'] }} кв/м
                                                                    </li>
                                                                    <li>
                                                                        <span>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path d="M22 17.5H2" stroke="#1B1B1B"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round"
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
                                                                    <div class="space30"></div>
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
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M4 12V5.5234C4 4.12977 5.12977 3 6.5234 3C7.64166 3 8.62654 3.73598 8.94339 4.80841L9 5"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path d="M8 6L10.5 4" stroke="#1B1B1B"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                            </svg>
                                                                        </span>
                                                                        {{ $property['bathrooms'] }} Санузел
                                                                    </li>
                                                                    <li>
                                                                        <a href="/property_details?property_id={{ $property['id'] }}"
                                                                            style="padding: 20px 16px 20px 24px; color: var(--ztc-text-text-1); font-size: var(--ztc-font-size-font-s16); font-style: normal; font-weight: var(--ztc-weight-bold); line-height: 16px; position: relative; z-index: 2; font-family: var(--ztc-family-font1); border: none; overflow: hidden; background-color: var(--ztc-bg-bg-3); transition: all 0.4s; border-radius: 70px; left: 70px;">
                                                                            {{ formatTJS($property['first_price']) }}
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="rent-sale-area">
                                                                <ul>
                                                                    <li>
                                                                        <a
                                                                            href="/property_details?property_id={{ $property['id'] }}">
                                                                            @if ($property['property_available_for'] == 0)
                                                                                Для продажи
                                                                            @else
                                                                                Для аренды
                                                                            @endif
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="/property_details?property_id={{ $property['id'] }}">Новое</a>
                                                                    </li>
                                                                </ul>
                                                                <a href="/property_details?property_id={{ $property['id'] }}"
                                                                    class="camera">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="14" viewBox="0 0 16 14"
                                                                        fill="none">
                                                                        <path
                                                                            d="M12 7.39995C12 8.75995 10.96 9.79995 9.6 9.79995C8.24 9.79995 7.2 8.75995 7.2 7.39995C7.2 6.03995 8.24 4.99995 9.6 4.99995C10.96 4.99995 12 6.03995 12 7.39995ZM16 3.39995V12.2C16 13.08 15.28 13.8 14.4 13.8H1.6C0.72 13.8 0 13.08 0 12.2V3.39995C0 2.51995 0.72 1.79995 1.6 1.79995V0.999951H4.8V1.79995H6.4L7.2 0.199951H12L12.8 1.79995H14.4C15.28 1.79995 16 2.51995 16 3.39995ZM4.4 4.99995C4.4 4.35995 3.84 3.79995 3.2 3.79995C2.56 3.79995 2 4.35995 2 4.99995C2 5.63995 2.56 6.19995 3.2 6.19995C3.84 6.19995 4.4 5.63995 4.4 4.99995ZM13.6 7.39995C13.6 5.15995 11.84 3.39995 9.6 3.39995C7.36 3.39995 5.6 5.15995 5.6 7.39995C5.6 9.63995 7.36 11.4 9.6 11.4C11.84 11.4 13.6 9.63995 13.6 7.39995Z"
                                                                            fill="#1B1B1B" />
                                                                    </svg>
                                                                    {{ count($property['media']) }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-12">
                                                    <img src="/property_not_found.svg" alt="" srcset=""
                                                        style="max-width: 50%; object-fit: fill; margin: 20px 20% 100px">
                                                    <br />
                                                    <h4 style="text-align: center;">По заданным фильтрам ничего не найдено.
                                                        <br /> Попробуйте изменить параметры поиска.
                                                    </h4>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab" tabindex="0">
                                        <div class="row">
                                            {{-- <div id="map" style="height: 500px;"></div> --}}
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $current = $resultsProperties->currentPage();
                                    $last = $resultsProperties->lastPage();
                                @endphp
                                @if (count($resultsProperties) > 0)
                                    <div class="pagination d-flex flex-wrap justify-content-center gap-2 my-4">
                                        {{-- Предыдущая страница --}}
                                        @if ($resultsProperties->onFirstPage())
                                            <span class="btn btn-outline-secondary disabled">« Предыдущая</span>
                                        @else
                                            <a href="{{ $resultsProperties->previousPageUrl() }}&property_available_for={{ $property_available_for }}&area_from={{ $area_from }}&area_to={{ $area_to }}&bedrooms={{ $bedrooms }}&bathrooms={{ $bathrooms }}&price_from={{ $price_from }}&price_to={{ $price_to }}"
                                                class="btn btn-outline-primary">« Предыдущая</a>
                                        @endif

                                        {{-- Первая страница --}}
                                        @if ($current > 3)
                                            <a href="{{ $resultsProperties->url(1) }}&property_available_for={{ $property_available_for }}&area_from={{ $area_from }}&area_to={{ $area_to }}&bedrooms={{ $bedrooms }}&bathrooms={{ $bathrooms }}&price_from={{ $price_from }}&price_to={{ $price_to }}"
                                                class="btn btn-outline-secondary">1</a>
                                            @if ($current > 4)
                                                <span class="btn btn-outline-secondary disabled">...</span>
                                            @endif
                                        @endif

                                        {{-- Страницы вокруг текущей --}}
                                        @for ($i = max($current - 2, 1); $i <= min($current + 2, $last); $i++)
                                            @if ($i == $current)
                                                <span class="btn btn-primary"
                                                    style="background-color: #040083!important">{{ $i }}</span>
                                            @else
                                                <a href="{{ $resultsProperties->url($i) }}&property_available_for={{ $property_available_for }}&area_from={{ $area_from }}&area_to={{ $area_to }}&bedrooms={{ $bedrooms }}&bathrooms={{ $bathrooms }}&price_from={{ $price_from }}&price_to={{ $price_to }}"
                                                    class="btn btn-outline-secondary">{{ $i }}</a>
                                            @endif
                                        @endfor

                                        {{-- Последняя страница --}}
                                        @if ($current < $last - 2)
                                            @if ($current < $last - 3)
                                                <span class="btn btn-outline-secondary disabled">...</span>
                                            @endif
                                            <a href="{{ $resultsProperties->url($last) }}&property_available_for={{ $property_available_for }}&area_from={{ $area_from }}&area_to={{ $area_to }}&bedrooms={{ $bedrooms }}&bathrooms={{ $bathrooms }}&price_from={{ $price_from }}&price_to={{ $price_to }}"
                                                class="btn btn-outline-secondary">{{ $last }}</a>
                                        @endif

                                        {{-- Следующая страница --}}
                                        @if ($resultsProperties->hasMorePages())
                                            <a href="{{ $resultsProperties->nextPageUrl() }}&property_available_for={{ $property_available_for }}&area_from={{ $area_from }}&area_to={{ $area_to }}&bedrooms={{ $bedrooms }}&bathrooms={{ $bathrooms }}&price_from={{ $price_from }}&price_to={{ $price_to }}"
                                                class="btn btn-outline-primary">Следующая »</a>
                                        @else
                                            <span class="btn btn-outline-secondary disabled">Следующая »</span>
                                        @endif
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space30"></div>

    <script>
        // setSelectValue(1, this, 'bathrooms')
        function setSelectValue(n, el, id) {
            // Установить значение в скрытое поле
            document.querySelector(`input[name="${id}"]`).value = n;

            // Обновить текст в .current
            const box = el.closest('.nice-select');
            box.querySelector('.current').textContent = n;

            // Снять класс 'selected' со всех опций
            box.querySelectorAll('.option').forEach(option => {
                option.classList.remove('selected');
            });

            // Добавить класс 'selected' текущему
            el.classList.add('selected');
        }

        function updateLimit(value) {
            const url = new URL(window.location.href);
            url.pathname = "/search_grid";

            url.searchParams.set("limit", value);
            url.searchParams.set("property_available_for", "{{ $property_available_for }}");
            url.searchParams.set("city", "{{ $city }}");
            url.searchParams.set("bedrooms", "{{ $bedrooms }}");
            url.searchParams.set("bathrooms", "{{ $bathrooms }}");
            url.searchParams.set("price_from", "{{ $price_from }}");
            url.searchParams.set("price_to", "{{ $price_to }}");
            url.searchParams.set("area_from", "{{ $area_from }}");
            url.searchParams.set("area_to", "{{ $area_to }}");
            url.searchParams.set("start", "{{ $start }}");

            window.location.href = url.toString();
        }
    </script>
    <script>
        // Функция инициализации карты
        function initMap() {
            // Центр карты: Душанбе
            const center = {
                lat: 38.5598,
                lng: 68.7870
            };

            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 12,
                center: center,
            });

            // Пример маркеров
            const markersData = [{

                position: {
                    lat: 38.5598,
                    lng: 68.7870
                },
                title: "Душанбе",
                content: "<strong>Душанбе</strong><br>Столица Таджикистана",
                icon: {
                    url: "https://osonhona.tj/market2.png", // ЗАМЕНИ на свою ссылку
                    scaledSize: new google.maps.Size(30, 40),
                    anchor: new google.maps.Point(20, 40)
                }
            }, {
                position: {
                    lat: 38.5667,
                    lng: 68.8050
                },
                title: "Площадь Исмоили Сомони",
                content: "<strong>Площадь Сомони</strong><br>Знаковое место Душанбе",
                icon: {
                    url: "https://osonhona.tj/market2.png", // ЗАМЕНИ на свою ссылку
                    scaledSize: new google.maps.Size(30, 40),
                    anchor: new google.maps.Point(20, 40)
                }
            }];

            // Создание маркеров и инфо-окон
            markersData.forEach((data) => {
                const marker = new google.maps.Marker({
                    position: data.position,
                    map: map,
                    title: data.title,
                    icon: data.icon || undefined // <-- теперь работает!
                });

                const infoWindow = new google.maps.InfoWindow({
                    content: data.content,
                });

                marker.addListener("click", () => {
                    infoWindow.open(map, marker);
                });
            });

        }
    </script>

    <!-- Кнопка -->
    <button id="fixedButton" class="fixed-button"
        style="
  position: fixed;
  bottom: 100px;
  right: 20px;
  background: #007bff;
  color: white;
  border: none;
  border-radius: 40px;
  display: none; /* Скрыта по умолчанию */
  z-index: 9999;
  width: 60px;
  height: 60px;
"
        onclick="location.href='/search_map?property_available_for={{ $property_available_for }}&city={{ $city }}&property_type_id={{ $property_type_id }}&bathrooms={{ $bathrooms }}&bedrooms={{ $bedrooms }}&price_from={{ $price_from }}&price_to={{ $price_to }}&area_from={{ $area_from }}&area_to={{ $area_to }}'">
        <svg width="31" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M12 6H12.01M9 20L3 17V4L5 5M9 20L15 17M9 20V14M15 17L21 20V7L19 6M15 17V14M15 6.2C15 7.96731 13.5 9.4 12 11C10.5 9.4 9 7.96731 9 6.2C9 4.43269 10.3431 3 12 3C13.6569 3 15 4.43269 15 6.2Z"
                stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>

    <!-- Замените YOUR_API_KEY на ваш настоящий ключ -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaUwxhxkPPpBm5cW32PlKY-J4giPLEWug&callback=initMap"></script>

    <script>
        window.addEventListener('scroll', function() {
            const target = document.getElementById('pills-tabContent1');
            const button = document.getElementById('fixedButton');
            const rect = target.getBoundingClientRect();

            // Показываем кнопку, когда верх блока на экране
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                button.style.display = 'block';
            } else {
                button.style.display = 'none';
            }
        });
    </script>

@endsection

@section('footer')
    @include('front.includes.footer')
@endsection
