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

    <!--===== DASHBOARD AREA STARTS =======-->
    <div class="add-property-section" style="padding: 30px!important;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-boxarea">
                        <h3>Добавление недвижимости</h3>
                        <div class="space40"></div>
                        <form action="/add_property" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="all-tabs-boxarea">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
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
                                            Обзор недвижимости</button>
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
                                                    <input type="text" name="title" placeholder="Собственник" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Доступно для</h5>
                                                        <div class="space16"></div>
                                                        <select class="nice-select" name="property_available_for"
                                                            required>
                                                            <option value="1" selected>Аренда</option>
                                                            <option value="2">Продажа</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="space30"></div>
                                                <div class="input-area">
                                                    <h5>Категория недвижимости</h5>
                                                    <div class="space16"></div>
                                                    <select class="nice-select" name="property_category" required>
                                                        <option value="0" selected>Жилая</option>
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
                                                    <input type="number" name="area" id="area" placeholder="120 кв/м" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="space32"></div>
                                                <h5>О недвижимости</h5>
                                                <div class="space16"></div>
                                                <div class="input-area">
                                                    <textarea placeholder="" name="about"></textarea>
                                                </div>
                                            </div>
                                            <div class="d-none col-lg-9"></div>
                                            <div class="col-lg-3 col-md-12">
                                                <button class="vl-btn1"
                                                    onclick="activateTab('#pills-contact-tab', '#pills-contact');"
                                                    style="width: 100%!important;">
                                                    Следующий шаг
                                                    <span class="arrow1">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </span>
                                                </button>
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
                                                <input type="text" id="address" name="address"
                                                    placeholder="Адрес недвижимости" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Город</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" id="city" name="city"
                                                            placeholder="Город" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Название района</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" id="district" name="society_name"
                                                            placeholder="Название района" required>
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
                                                        <input type="text" name="latitude" id="lat"
                                                            placeholder="Широта" required readonly hidden>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 d-none">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Долгота</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="longitude" id="lng"
                                                            placeholder="Долгота" required readonly hidden>
                                                    </div>
                                                </div>
                                                <div class="d-none col-lg-9"></div>
                                                <div class="col-lg-3 col-md-12">
                                                    <button class="vl-btn1"
                                                        onclick="activateTab('#pills-contact1-tab', '#pills-contact1');"
                                                        style="width: 100%!important;">
                                                        Следующий шаг
                                                        <span class="arrow1">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </button>
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
                                                        <input type="number" name="built_year"
                                                            placeholder="Год постройки" value="2018">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Мебель</h5>
                                                        <div class="space16"></div>
                                                        <select class="nice-select" name="furniture">
                                                            <option value="0" selected>Нет</option>
                                                            <option value="1">Да</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Направление окон</h5>
                                                        <div class="space16"></div>
                                                        <select class="nice-select" name="facing" required>
                                                            <option value="Окна во двор" selected>Окна во двор</option>
                                                            <option value="Окна на дорогу">Окна на дорогу</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Всего этажей</h5>
                                                        <div class="space16"></div>
                                                        <input type="number" name="total_floors"
                                                            placeholder="Всего этажей" value="1">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Номер этажа</h5>
                                                        <div class="space16"></div>
                                                        <input type="number" name="floor_number"
                                                            placeholder="Номер этажа" value="1">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Парковочные места</h5>
                                                        <div class="space16"></div>
                                                        <input type="number" name="car_parkings"
                                                            placeholder="Парковочные места" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Тех обслуживания</h5>
                                                        <div class="space16"></div>
                                                        <input type="number" name="maintenance_month"
                                                            placeholder="Тех обслуживания" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Цена</h5>
                                                        <div class="space16"></div>
                                                        <input type="number" id="first_price" name="first_price"
                                                            placeholder="Первая цена" value="0" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Цена за кв/м</h5>
                                                        <div class="space16"></div>
                                                        <input type="number" id="second_price" name="second_price" value="0"
                                                            placeholder="Вторая цена" readonly>
                                                    </div>
                                                </div>
                                                <div class="d-none col-lg-9"></div>
                                                <div class="col-lg-3 col-md-12">
                                                    <div class="space30"></div>
                                                    <div class="space30"></div>
                                                    <button class="vl-btn1"
                                                        onclick="activateTab('#pills-profile-tab', '#pills-profile');"
                                                        style="width: 100%!important;">
                                                        Следующий шаг
                                                        <span class="arrow1">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </button>
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
                                                        <input type="file" name="overview[]"
                                                            multiple accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Фото спален</h5>
                                                        <div class="space16"></div>
                                                        <input type="file" name="bedroom[]" multiple
                                                            accept="image/*">
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
                                                    <button class="vl-btn1"
                                                        onclick="activateTab('#pills-contact2-tab', '#pills-contact2');"
                                                        style="width: 100%!important;">
                                                        Следующий шаг
                                                        <span class="arrow1">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </button>
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
                                                            placeholder="Расстояние до больницы" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Расстояние до школы</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="far_from_school"
                                                            placeholder="Расстояние до школы" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Расстояние до спортзала</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="far_from_gym"
                                                            placeholder="Расстояние до спортзала" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Расстояние до рынка</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="far_from_market"
                                                            placeholder="Расстояние до рынка" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Расстояние до АЗС</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="far_from_gasoline"
                                                            placeholder="Расстояние до АЗС" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="space28"></div>
                                                    <div class="input-area">
                                                        <h5>Расстояние до аэропорта</h5>
                                                        <div class="space16"></div>
                                                        <input type="text" name="far_from_airport"
                                                            placeholder="Расстояние до аэропорта" value="0">
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
    <!--===== DASHBOARD AREA ENDS =======-->
    <div class="space30"></div>

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

    <script>
    const firstPriceInput = document.getElementById('first_price');
    const areaInput = document.getElementById('area');
    const secondPriceInput = document.getElementById('second_price');

    function updateSecondPrice() {
        const firstPrice = parseFloat(firstPriceInput.value);
        const area = parseFloat(areaInput.value);

        if (!isNaN(firstPrice) && !isNaN(area) && area > 0) {
            const secondPrice = firstPrice / area;
            secondPriceInput.value = secondPrice.toFixed(2); // округление до 2 знаков
        } else {
            secondPriceInput.value = 0;
        }
    }

    firstPriceInput.addEventListener('input', updateSecondPrice);
    areaInput.addEventListener('input', updateSecondPrice);
</script>


    <!--===== FOOTER AREA STARTS =======-->
    @include('front.includes.footer')
    <!--===== FOOTER AREA ENDS =======-->
@endsection
