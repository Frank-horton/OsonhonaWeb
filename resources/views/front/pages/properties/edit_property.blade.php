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

    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsMGvxv1SC0VngbpeoU6R0QdDVCaDbHSU&callback=initMap" async
        defer></script> --}}

    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaUwxhxkPPpBm5cW32PlKY-J4giPLEWug&callback=initMap" async
        defer></script> --}}


    <!--===== DASHBOARD AREA STARTS =======-->
    <div class="add-property-section" style="padding: 30px!important">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-boxarea">
                        <h3>Редактирование недвижимости</h3>
                        <div class="space40"></div>
                        <form action="/update_property/{{ $property->id }}" method="POSt" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="all-tabs-boxarea">
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true"
                                            style="min-width: 200px; margin-bottom: 10px">1.
                                            Описание</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false"
                                            style="min-width: 200px; margin-bottom: 10px">2.
                                            Локация</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact1-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact1" type="button" role="tab"
                                            aria-controls="pills-contact1" aria-selected="false"
                                            style="min-width: 200px; margin-bottom: 10px">3.
                                            Детали</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false"
                                            style="min-width: 200px; margin-bottom: 10px">4.
                                            Мультимедиа</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact2" type="button" role="tab"
                                            aria-controls="pills-contact2" aria-selected="false"
                                            style="min-width: 200px; margin-bottom: 10px">5.
                                            Удобства</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="space48"></div>
                                                <h4>Описание недвижимости</h4>
                                                <div class="space28"></div>
                                                <h5>Право собственности</h5>
                                                <div class="space16"></div>
                                                <div class="input-area">
                                                    <input type="text" name="title" placeholder="Собственник"
                                                        value="{{ $property->title }}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="space30"></div>
                                                <div class="input-area">
                                                    <h5>Категория недвижимости</h5>
                                                    <div class="space16"></div>
                                                    <select class="nice-select" name="property_category" required>
                                                        <option value="{{ $property->property_category }}" selected>
                                                            {{ $property->property_category == 0 ? 'Жилая' : 'Коммерческая' }}
                                                        </option>
                                                        <option value="0">Жилая</option>
                                                        <option value="1">Коммерческая</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="space30"></div>
                                                <div class="input-area">
                                                    <h5>Тип недвижимости</h5>
                                                    <div class="space16"></div>
                                                    <select class="nice-select" name="property_type" required>
                                                        {{-- <option value="{{ $property->property_type }}"></option> --}}
                                                        @foreach ($property_type as $item)
                                                            <option value="{{ $item->id }}">{{ $item->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="space30"></div>
                                                <div class="input-area">
                                                    <h5>Спальни</h5>
                                                    <div class="space16"></div>
                                                    <select class="nice-select" name="bedrooms" required>
                                                        <option value="{{ $property->bedrooms }}">
                                                            {{ $property->bedrooms }}
                                                        </option>
                                                        @for ($i = 1; $i <= 10; $i++)
                                                            <option value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="space30"></div>
                                                <div class="input-area">
                                                    <h5>Ванная</h5>
                                                    <div class="space16"></div>
                                                    <select class="nice-select" name="bathrooms" required>
                                                        <option value="{{ $property->bathrooms }}">
                                                            {{ $property->bathrooms }}
                                                        </option>
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <option value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="space30"></div>
                                                <div class="input-area">
                                                    <h5>Квадратура</h5>
                                                    <div class="space16"></div>
                                                    <input type="text" name="area" value="{{ $property->area }}"
                                                        placeholder="120 кв/м" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="space32"></div>
                                                <h5>О недвижимости</h5>
                                                <div class="space16"></div>
                                                <div class="input-area">
                                                    <textarea placeholder="" name="about" required>{{ $property->about }}</textarea>
                                                </div>
                                            </div>
                                            <div class="d-none col-lg-9"></div>
                                            <div class="col-lg-3 col-md-12">
                                                <div class="vl-btn1"
                                                    onclick="activateTab('#pills-contact-tab', '#pills-contact');"
                                                    style="width: 100%!important; text-align: center;">
                                                    Следующий шаг
                                                    <span class="arrow1">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                        aria-labelledby="pills-contact-tab" tabindex="0">
                                        <div class="upload-main-boxarea">
                                            <div class="space48"></div>
                                            <h4>Локация недвижимости</h4>
                                            <div class="space32"></div>
                                            <div class="input-area">
                                                <h5>Адрес</h5>
                                                <div class="space16"></div>
                                                <input type="text" name="address" id="address"
                                                    value="{{ $property->address }}" placeholder="Адрес недвижимости"
                                                    required>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Город</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" id="city" name="city"
                                                            value="{{ $property->city }}" placeholder="Город" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Название района</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" id="district"
                                                            value="{{ $property->text }}" name="society_name"
                                                            placeholder="Название района">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="space28"></div>
                                                    <div id="map" style="height: 400px; width: 100%;"></div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 d-none">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Широта</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="latitude"
                                                            value="{{ $property->latitude }}" id="lat"
                                                            placeholder="Широта" required readonly hidden>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 d-none">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Долгота</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="longitude"
                                                            value="{{ $property->longitude }}" id="lng"
                                                            placeholder="Долгота" required readonly hidden>
                                                    </div>
                                                </div>
                                                <div class="d-none col-lg-9"></div>
                                                <div class="col-lg-3 col-md-12">
                                                    <div class="vl-btn1"
                                                        onclick="activateTab('#pills-contact1-tab', '#pills-contact1');"
                                                        style="width: 100%!important; text-align: center;">
                                                        Следующий шаг
                                                        <span class="arrow1">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-contact1" role="tabpanel"
                                        aria-labelledby="pills-contact1-tab" tabindex="0">
                                        <div class="upload-main-boxarea">
                                            <div class="space48"></div>
                                            <h4>Детали недвижимости</h4>
                                            <div class="space32"></div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Год постройки</h5>
                                                        <div class="space16"></div>
                                                        <input type="number" value="{{ $property->built_year }}"
                                                            name="built_year" placeholder="Год постройки">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Мебель</h5>
                                                        <div class="space16"></div>
                                                        <select class="nice-select" name="furniture">
                                                            <option value="{{ $property->furniture }}" selected>
                                                                {{ $property->furniture == 0 ? 'Нет' : 'Да' }}
                                                            </option>
                                                            <option value="0">Нет</option>
                                                            <option value="1">Да</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Ориентация</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="facing"
                                                            value="{{ $property->facing }}" placeholder="Ориентация">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Всего этажей</h5>
                                                        <div class="space16"></div>
                                                        <input type="number" value="{{ $property->total_floors }}"
                                                            name="total_floors" placeholder="Всего этажей">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Номер этажа</h5>
                                                        <div class="space16"></div>
                                                        <input type="number" value="{{ $property->floor_number }}"
                                                            name="floor_number" placeholder="Номер этажа">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Парковочные места</h5>
                                                        <div class="space16"></div>
                                                        <input type="number" name="car_parkings"
                                                            value="{{ $property->car_parkings }}"
                                                            placeholder="Парковочные места">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Месяц обслуживания</h5>
                                                        <div class="space16"></div>
                                                        <input type="number" name="maintenance_month"
                                                            value="{{ $property->maintenance_month }}"
                                                            placeholder="Месяц обслуживания">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Доступно для</h5>
                                                        <div class="space16"></div>
                                                        <select class="nice-select" name="property_available_for"
                                                            required>
                                                            <option value="{{ $property->property_available_for }}"
                                                                selected>
                                                                {{ $property->property_available_for == 0 ? 'Аренда' : 'Продажа' }}
                                                            <option value="0">Аренда</option>
                                                            <option value="1">Продажа</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Первая цена</h5>
                                                        <div class="space16"></div>
                                                        <input type="number" name="first_price"
                                                            value="{{ $property->first_price }}"
                                                            placeholder="Первая цена">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Цена за кв/м</h5>
                                                        <div class="space16"></div>
                                                        <input type="number" name="second_price"
                                                            value="{{ $property->second_price }}"
                                                            placeholder="Вторая цена">
                                                    </div>
                                                </div>
                                                <div class="d-none col-lg-9"></div>
                                                <div class="col-lg-3 col-md-12">
                                                    <div class="space30"></div>
                                                    <div class="space30"></div>
                                                    <div class="vl-btn1"
                                                        onclick="activateTab('#pills-profile-tab', '#pills-profile');"
                                                        style="width: 100%!important; text-align: center;">
                                                        Следующий шаг
                                                        <span class="arrow1">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab" tabindex="0">
                                        <div class="upload-main-boxarea">
                                            <div class="space48"></div>
                                            <h4>Мультимедиа</h4>
                                            <div class="space32"></div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Обзорные фото</h5>
                                                        <div class="space16"></div>
                                                        <input type="file" name="overview[]" multiple
                                                            accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Фото спален</h5>
                                                        <div class="space16"></div>
                                                        <input type="file" name="bedroom[]" multiple accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Фото ванных</h5>
                                                        <div class="space16"></div>
                                                        <input type="file" name="bathroom[]" multiple
                                                            accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>План этажа</h5>
                                                        <div class="space16"></div>
                                                        <input type="file" name="floor_plan[]" multiple
                                                            accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Другие фото</h5>
                                                        <div class="space16"></div>
                                                        <input type="file" name="other[]" multiple accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>360° фото</h5>
                                                        <div class="space16"></div>
                                                        <input type="file" name="three_sixty[]" multiple
                                                            accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 d-none">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Видео недвижимости</h5>
                                                        <div class="space16"></div>
                                                        <input type="file" name="property_video[]" multiple
                                                            accept="video/*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 d-none">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Превью видео</h5>
                                                        <div class="space16"></div>
                                                        <input type="file" name="thumbnail" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="d-none col-lg-9"></div>
                                                <div class="col-lg-3 col-md-12">
                                                    <div class="space30"></div>
                                                    <div class="space30"></div>
                                                    <div class="vl-btn1"
                                                        onclick="activateTab('#pills-contact2-tab', '#pills-contact2');"
                                                        style="width: 100%!important; text-align: center;">
                                                        Следующий шаг
                                                        <span class="arrow1">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-contact2" role="tabpanel"
                                        aria-labelledby="pills-contact2-tab" tabindex="0">
                                        <div class="upload-main-boxarea">
                                            <div class="space48"></div>
                                            <h4>Удобства</h4>
                                            <div class="space32"></div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Расстояние до больницы</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="far_from_hospital"
                                                            value="{{ $property->far_from_hospital }}"
                                                            placeholder="Расстояние до больницы">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Расстояние до школы</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="far_from_school"
                                                            value="{{ $property->far_from_school }}"
                                                            placeholder="Расстояние до школы">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Расстояние до спортзала</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="far_from_gym"
                                                            value="{{ $property->far_from_gym }}"
                                                            placeholder="Расстояние до спортзала">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Расстояние до рынка</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="far_from_market"
                                                            value="{{ $property->far_from_market }}"
                                                            placeholder="Расстояние до рынка">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Расстояние до АЗС</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="far_from_gasoline"
                                                            value="{{ $property->far_from_gasoline }}"
                                                            placeholder="Расстояние до АЗС">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Расстояние до аэропорта</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="far_from_airport"
                                                            value="{{ $property->far_from_airport }}"
                                                            placeholder="Расстояние до аэропорта">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="space40"></div>
                                                <div class="btn-area1 text-end">
                                                    <button type="submit" class="vl-btn1">
                                                        Сохранить
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        let map;
        let marker;

        function initMap() {
            const initialCoords = {
                lat: 38.5598,
                lng: 68.7870
            };

            map = new google.maps.Map(document.getElementById("map"), {
                center: initialCoords,
                zoom: 13,
            });

            map.addListener("click", (e) => {
                placeMarkerAndPanTo(e.latLng, map);
            });
        }

        function placeMarkerAndPanTo(latLng, map) {
            if (marker) {
                marker.setMap(null);
            }

            marker = new google.maps.Marker({
                position: latLng,
                map: map,
            });

            document.getElementById("lat").value = latLng.lat().toFixed(6);
            document.getElementById("lng").value = latLng.lng().toFixed(6);
        }

        // Грузим карту правильно
        function loadMapScript() {
            const script = document.createElement("script");
            script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDaUwxhxkPPpBm5cW32PlKY-J4giPLEWug";
            script.async = true;
            script.defer = true;
            script.onload = initMap;
            document.head.appendChild(script);
        }

        // Загружаем карту при загрузке страницы
        window.addEventListener("load", loadMapScript);
    </script> --}}

    <script>
        let map;
        let marker;
        let geocoder;

        function initMap() {
            const initialCoords = {
                lat: 38.5598,
                lng: 68.7870
            };

            map = new google.maps.Map(document.getElementById("map"), {
                center: initialCoords,
                zoom: 13,
            });

            geocoder = new google.maps.Geocoder();

            map.addListener("click", (e) => {
                const latLng = e.latLng;
                placeMarkerAndPanTo(latLng, map);
                getAddressFromLatLng(latLng);
            });
        }

        function placeMarkerAndPanTo(latLng, map) {
            if (marker) {
                marker.setMap(null);
            }

            marker = new google.maps.Marker({
                position: latLng,
                map: map,
            });

            document.getElementById("lat").value = latLng.lat().toFixed(6);
            document.getElementById("lng").value = latLng.lng().toFixed(6);
        }

        function getAddressFromLatLng(latLng) {
            geocoder.geocode({
                location: latLng
            }, (results, status) => {
                if (status === "OK" && results[0]) {
                    const address = results[0].formatted_address;
                    document.getElementById("address").value = address;

                    const components = results[0].address_components;

                    let city = "";
                    let district = "";

                    for (let i = 0; i < components.length; i++) {
                        const types = components[i].types;

                        if (types.includes("locality")) {
                            city = components[i].long_name;
                        }

                        if (types.includes("sublocality") || types.includes("sublocality_level_1") || types
                            .includes("administrative_area_level_2")) {
                            district = components[i].long_name;
                        }
                    }

                    document.getElementById("city").value = city || "Город не найден";
                    document.getElementById("district").value = district || "Район не найден";
                } else {
                    document.getElementById("address").value = "Адрес не найден";
                    document.getElementById("city").value = "";
                    document.getElementById("district").value = "";
                    console.error("Geocoder error: " + status);
                }
            });
        }

        function loadMapScript() {
            const script = document.createElement("script");
            script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDaUwxhxkPPpBm5cW32PlKY-J4giPLEWug";
            script.async = true;
            script.defer = true;
            script.onload = initMap;
            document.head.appendChild(script);
        }

        window.addEventListener("load", loadMapScript);
    </script>

    <script>
        function activateTab(buttonSelector, tabSelector) {
            // Удаляем "active" у всех кнопок
            document.querySelectorAll('#pills-tab .nav-link').forEach(btn => {
                btn.classList.remove('active');
            });

            // Добавляем "active" к нужной кнопке
            const targetButton = document.querySelector(buttonSelector);
            if (targetButton) {
                targetButton.classList.add('active');
            }

            // Удаляем "show active" у всех вкладок
            document.querySelectorAll('.tab-pane').forEach(tab => {
                tab.classList.remove('show', 'active');
            });

            // Добавляем "show active" к нужной вкладке
            const targetTab = document.querySelector(tabSelector);
            if (targetTab) {
                targetTab.classList.add('show', 'active');
            }
        }
    </script>


    <!--===== DASHBOARD AREA ENDS =======-->
    <div class="space30"></div>
    <!--===== FOOTER AREA STARTS =======-->
    @include('front.includes.footer')
    <!--===== FOOTER AREA ENDS =======-->
@endsection
