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
                    <form action="/search_map" method="get">
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
                                            <span class="current">Все недвижимости</span>
                                            <ul class="list">
                                                <li data-value="Все виды сделок"
                                                    class={{ $property_available_for == '' ? 'option selected' : 'option' }}
                                                    onclick="setSelectValue('', this, 'property_available_for')">Все виды сделок
                                                </li>
                                                <li data-value="Для аренды"
                                                    class={{ $property_available_for == 0 ? 'option selected' : 'option' }}
                                                    onclick="setSelectValue(1, this, 'property_available_for')">Для аренды
                                                </li>
                                                <li data-value="3"
                                                    class={{ $property_available_for == 0 ? 'option selected' : 'option' }}
                                                    onclick="setSelectValue(0, this, 'property_available_for')">Для продажи
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
                                                <li data-value="{{ $bedrooms }}" class="option selected"
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
                                                <li data-value="{{ $bathrooms }}" class="option selected"
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
                                            <input type="text" name="bathrooms" value="{{ $bathrooms }}" hidden>
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
                                                <button class="nav-link" onclick="location.href='/search_grid'"
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
                                                <button class="nav-link active" onclick="location.href='/search_map'"
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
                                                <option value="6" {{ $limit == 6 ? 'selected' : '' }}>Отображать по:
                                                    (6)
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
                                    <form action="/search_map" method="get">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home1" role="tabpanel"
                                                aria-labelledby="pills-home1-tab" tabindex="0">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="input-area m-0">
                                                            <select name="property_available_for"
                                                                class="country-area nice-select">
                                                                <option value=""
                                                                    {{ $property_available_for == '' ? 'selected' : '' }}>
                                                                    Все виды сделок</option>
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
                                                                    data-display="@switch($bedrooms)@case(1)1 Спальня@break@case(2)2 Спальни@break@case(3)3 Спальни@break@case(4)4 Спальни@break@case(5)5 Спален@break@defaultСпальни не ограничены@endSwitch">
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
                                                                            Спальни не ограничены
                                                                    @endswitch
                                                                </option>
                                                                <option value="">Спальни не ограничены</option>
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
                                                                        value="{{ $price_from == 0 ? '' : $price_from }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="input-area">
                                                                    <input name="price_to" type="number"
                                                                        placeholder="Цена до"
                                                                        value="{{ $price_to == 0 ? '' : $price_to }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="input-area">
                                                                    <input name="area_from" type="number"
                                                                        placeholder="Площадь от"
                                                                        value="{{ $area_from == 0 ? '' : $area_from }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="input-area">
                                                                    <input name="area_to" type="number"
                                                                        placeholder="Площадь до"
                                                                        value="{{ $area_to == 0 ? '' : $area_to }}">
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
                                    <div class="tab-pane fade" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab" tabindex="0">
                                        <div class="row">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab" tabindex="0">
                                        <div class="row">
                                            <div id="map" style="height: 500px;"></div>
                                        </div>
                                    </div>
                                </div>
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
            document.getElementById('limitInput1').value = value;
            document.getElementById('limitInput2').value = value;
        }
    </script>
    {{-- <script>
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
    </script> --}}

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

            // Массив маркеров, сгенерированный из PHP
            const markersData = [
                @foreach ($resultsProperties as $property)
                    @if ($property->latitude && $property->longitude)
                        {
                            position: {
                                lat: parseFloat("{{ $property->latitude }}"),
                                lng: parseFloat("{{ $property->longitude }}")
                            },
                            title: @json($property->title),
                            content: `<div style="max-width: 250px; max-height: 500px; overflow: auto;">
                                @if ($property->media && count($property->media) > 0)
                                    <img src="{{ $property->media[0]->content }}" alt="Фото" style="width:100%; height: 200px; border-radius:5px; margin-bottom:8px; object-fit: fill;">
                                @else
                                    <img src="/default_image.jpg" alt="Нет фото" style="width:100%; height:auto; border-radius:5px; margin-bottom:8px; object-fit: contain;">
                                @endif
                                <strong>{{ $property->title }}</strong><br>
                                {{ $property->address ?? '' }}<br>
                                Цена: {{ number_format($property->first_price, 0, '', ' ') }} сомони<br>
                                <a href='/property_details?property_id={{ $property->id }}'>Подробнее</a>
                            </div>`,

                            icon: {
                                url: "https://osonhona.tj/market2.png",
                                scaledSize: new google.maps.Size(30, 40),
                                anchor: new google.maps.Point(20, 40)
                            }
                        },
                    @endif
                @endforeach
            ];

            // Создание маркеров и инфо-окон
            markersData.forEach((data) => {
                const marker = new google.maps.Marker({
                    position: data.position,
                    map: map,
                    title: data.title,
                    icon: data.icon || undefined
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
        onclick="location.href='/search_grid?property_available_for={{ $property_available_for }}&city={{ $city }}&property_type_id={{ $property_type_id }}&bathrooms={{ $bathrooms }}&bedrooms={{ $bedrooms }}&price_from={{ $price_from }}&price_to={{ $price_to }}&area_from={{ $area_from }}&area_to={{ $area_to }}'">
        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30"
                                                        viewBox="0 0 31 30" fill="none">
                                                        <path
                                                            d="M5.1875 13.1231C4.93886 13.1231 4.7004 13.0244 4.52459 12.8485C4.34877 12.6727 4.25 12.4343 4.25 12.1856V4.6875C4.25 4.43886 4.34877 4.2004 4.52459 4.02459C4.7004 3.84877 4.93886 3.75 5.1875 3.75H12.6875C12.9361 3.75 13.1746 3.84877 13.3504 4.02459C13.5262 4.2004 13.625 4.43886 13.625 4.6875V12.1856C13.625 12.4343 13.5262 12.6727 13.3504 12.8485C13.1746 13.0244 12.9361 13.1231 12.6875 13.1231H5.1875ZM18.3125 13.1231C18.0639 13.1231 17.8254 13.0244 17.6496 12.8485C17.4738 12.6727 17.375 12.4343 17.375 12.1856V4.6875C17.375 4.43886 17.4738 4.2004 17.6496 4.02459C17.8254 3.84877 18.0639 3.75 18.3125 3.75H25.8106C26.0593 3.75 26.2977 3.84877 26.4735 4.02459C26.6494 4.2004 26.7481 4.43886 26.7481 4.6875V12.1856C26.7481 12.4343 26.6494 12.6727 26.4735 12.8485C26.2977 13.0244 26.0593 13.1231 25.8106 13.1231H18.3125ZM5.1875 26.2481C4.93886 26.2481 4.7004 26.1494 4.52459 25.9735C4.34877 25.7977 4.25 25.5593 4.25 25.3106V17.8106C4.25 17.562 4.34877 17.3235 4.52459 17.1477C4.7004 16.9719 4.93886 16.8731 5.1875 16.8731H12.6875C12.9361 16.8731 13.1746 16.9719 13.3504 17.1477C13.5262 17.3235 13.625 17.562 13.625 17.8106V25.3106C13.625 25.5593 13.5262 25.7977 13.3504 25.9735C13.1746 26.1494 12.9361 26.2481 12.6875 26.2481H5.1875ZM18.3125 26.2481C18.0639 26.2481 17.8254 26.1494 17.6496 25.9735C17.4738 25.7977 17.375 25.5593 17.375 25.3106V17.8106C17.375 17.562 17.4738 17.3235 17.6496 17.1477C17.8254 16.9719 18.0639 16.8731 18.3125 16.8731H25.8106C26.0593 16.8731 26.2977 16.9719 26.4735 17.1477C26.6494 17.3235 26.7481 17.562 26.7481 17.8106V25.3106C26.7481 25.5593 26.6494 25.7977 26.4735 25.9735C26.2977 26.1494 26.0593 26.2481 25.8106 26.2481H18.3125Z"
                                                            fill="#FFF" />
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
