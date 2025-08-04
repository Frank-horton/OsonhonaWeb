 <!--=====HEADER START=======-->
 <header class="homepage1-body">
     <div id="vl-header-sticky" class="vl-header-area vl-transparent-header">
         <div class="container-fluid">
             <div class="row align-items-center">
                 <div class="col-lg-2 col-md-6 col-6">
                     <div class="vl-logo">
                         <a href="/">
                             <img src="/assets/icons/logo.svg" alt="housa" style="object-fit: cover !important"></a>
                     </div>
                 </div>
                 <div class="col-lg-9 d-none d-lg-block">
                     <div class="vl-main-menu text-center">
                         <nav class="vl-mobile-menu-active">
                             <ul>
                                 {{-- <li>
                                     <a href="/">
                                         Главная
                                         <span>
                                             <i class="fa-solid fa-angle-down d-lg-inline d-none"></i>
                                         </span>
                                     </a>
                                     <div class="vl-mega-menu">
                                         <div class="vl-home-menu">
                                             <div class="row gx-3 row-cols-1 row-cols-md-1 row-cols-lg-4">
                                                 <div class="col">
                                                     <div class="vl-home-thumb">
                                                         <div class="img1">
                                                             <img src="/assets/img/all-images/demo/demo-img1.png"
                                                                 alt="housa">
                                                         </div>
                                                         <a href="/">Домашная страница вариант №1</a>
                                                         <div class="btn-area1">
                                                             <a href="/" class="vl-btn1">Перейти<span
                                                                     class="arrow1"><i
                                                                         class="fa-solid fa-arrow-right"></i></span><span
                                                                     class="arrow2"><i
                                                                         class="fa-solid fa-arrow-right"></i></span></a>
                                                         </div>
                                                         <div class="space20 d-lg-none d-block"></div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </li> --}}
                                 {{-- <li class="has-dropdown">
                                     <a href="#">
                                         Страницы
                                         <span>
                                             <i class="fa-solid fa-angle-down d-lg-inline d-none"></i>
                                         </span>
                                     </a>
                                     <ul class="sub-menu">
                                         <li><a href="/about">О нас</a></li>
                                         <li><a href="/our_service">Наши сервисы</a></li>
                                         <li><a href="/pricing">Тарификация</a></li>
                                         <li><a href="/contact">Контакты</a></li>
                                         <li><a href="/faq">FAQ's</a></li>
                                         <li><a href="/privacy_policy">Политика конфиденциальности</a></li>
                                     </ul>
                                 </li> --}}
                                 <li><a href="/search_grid">Список объектов</a></li>
                                 {{-- <li>
                                    <a href="#">Поиск недвижимости <span><i
                                                 class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>
                                     <ul class="sub-menu">
                                         <li><a href="/search_grid">Список объектов</a></li>
                                         <li><a href="/property_halfmap_list">Property Half Map List</a></li>
                                         <li><a href="/search_grid">Property Top Map Grid</a></li>
                                         <li><a href="/topmap_list">Property Top Map List</a></li>
                                         <li><a href="/sidebar_grid">Find Sidebar Grid</a></li>
                                         <li><a href="/sidebar_list">Find Sidebar List</a></li>
                                     </ul>
                                 </li> --}}
                                 {{-- <li><a href="#">Properties <span><i
                                                 class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>
                                     <ul class="sub-menu">
                                         <li><a href="/property_details_v1">Property Details 01</a></li>
                                         <li><a href="/property_details_v2.html">Property Details 02</a></li>
                                         <li><a href="/property_details_v3.html">Property Details 03</a></li>
                                         <li><a href="/property_details_v4.html">Property Details 04</a></li>
                                     </ul>
                                 </li> --}}
                                 {{-- <li><a href="#">Dashboard <span><i
                                                 class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>
                                     <ul class="sub-menu">
                                         <li><a href="/dashboard">Dashboard</a></li>
                                         <li><a href="/my_property">My Properties</a></li>
                                         <li><a href="/message">Message</a></li>
                                         <li><a href="/my_favorites">My Favourites</a></li>
                                         <li><a href="/reviews">Reviews</a></li>
                                         <li><a href="/my_profile">My Propfile</a></li>
                                         <li><a href="/add_property">Add Property</a></li>
                                     </ul>
                                 </li> --}}
                                 {{-- <li>
                                     <a href="#">
                                         Блог
                                         <span>
                                             <i class="fa-solid fa-angle-down d-lg-inline d-none"></i>
                                         </span>
                                     </a>
                                     <ul class="sub-menu">
                                         <li><a href="/blog">Блог</a></li>
                                         <li><a href="/blog_grid">Блог карточный режим</a></li>
                                         <li><a href="/blog_detail">Детали блога</a></li>
                                     </ul>
                                 </li> --}}
                                 @auth
                                     <li>
                                         <a href="#">
                                             Профиль
                                             <span>
                                                 <i class="fa-solid fa-angle-down d-lg-inline d-none"></i>
                                             </span>
                                         </a>
                                         <ul class="sub-menu">
                                             <li><a href="/profile">Мой профиль</a></li>
                                             <li><a href="/my_properties?start=1&limit=5">Мои объявление</a></li>
                                             <li>
                                                 <a href="#" id="logout-button2">
                                                     Выход
                                                 </a>
                                             </li>

                                             {{-- <li><a href="/blog_grid">Блог карточный режим</a></li>
                                             <li><a href="/blog_detail">Детали блога</a></li> --}}
                                         </ul>
                                     </li>
                                 @endauth
                             </ul>
                         </nav>
                     </div>
                 </div>
                 <div class="col-lg-1 col-md-6 col-6">
                     <div class="vl-hero-btn d-none d-lg-block text-end">
                         <div class="btn-area1 dashboard">
                             {{-- <a href="/add_property" class="vl-btn1" style="width: 240px; right: 30px">
                                Добавить объявление
                                <span class="arrow1">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                                <span class="arrow2">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a> --}}
                             <button class="hamburger_menu">
                                 @auth
                                     <img src="https://osonhona.tj/avatar.jpg"
                                         alt="housa">
                                 @endauth
                                 @guest
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                         <path d="M3 4H21V6H3V4ZM7 19H21V21H7V19ZM3 14H21V16H3V14ZM7 9H21V11H7V9Z"></path>
                                     </svg>
                                 @endguest
                             </button>

                         </div>
                     </div>
                     <div class="vl-header-action-item d-block d-lg-none">
                         <button type="button" class="vl-offcanvas-toggle">
                             <i class="fa-solid fa-bars-staggered"></i>
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!--=====HEADER END =======-->
 <!--===== MOBILE HEADER STARTS =======-->
 <div class="homepage1-body">
     <div class="vl-offcanvas">
         <div class="vl-offcanvas-wrapper">
             <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                 <div class="vl-offcanvas-logo" style="filter: none !important;">
                     <a href="/">
                         <img src="/assets/icons/logo.svg" alt="housa">
                     </a>
                 </div>
                 <div class="vl-offcanvas-close">
                     <button class="vl-offcanvas-close-toggle"><i class="fa-solid fa-xmark"></i></button>
                 </div>
             </div>
             <div class="vl-offcanvas-menu d-lg-none mb-40">
                 <nav></nav>
             </div>
             <div class="space20"></div>
             <div class="vl-offcanvas-info">
                 @guest
                     <a href="/login" style="color: white;">
                         <span class="icon">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                 <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                 <polyline points="10 17 15 12 10 7"></polyline>
                                 <line x1="15" y1="12" x2="3" y2="12"></line>
                             </svg>
                         </span>
                         <span class="text">Авторизоватся</span>
                     </a>
                 </div>
             @endguest
         </div>
         <div class="space20"></div>
         <div class="vl-offcanvas-info">
             <h3 class="vl-offcanvas-sm-title">Контакты</h3>
             <div class="space20"></div>
             <span><a href="#"><i class="fa-solid fa-phone"></i>+992 112 33 19 99</a></span>
             <span><a href="#"><i class="fa-regular fa-envelope"></i> hello@osongroup.com</a></span>
             <span><a href="#"><i class="fa-solid fa-location-dot"></i> Dushanbe Tajikistan</a></span>
         </div>
         <div class="space20"></div>
         <div class="vl-offcanvas-social">
             <h3 class="vl-offcanvas-sm-title">Подписываетесь</h3>
             <div class="space20"></div>
             {{-- <a href="#"><i class="fab fa-facebook-f"></i></a> --}}
             {{-- <a href="#"><i class="fab fa-twitter"></i></a> --}}
             {{-- <a href="#"><i class="fab fa-linkedin-in"></i></a> --}}
             <a href="https://www.instagram.com/osonhona.tj?igsh=MXF0MDZhZDRremRsZA%3D%3D&utm_source=qr"><i
                     class="fab fa-instagram"></i></a>
         </div>
     </div>
 </div>
 <div class="vl-offcanvas-overlay"></div>
 </div>
 <!--===== MOBILE HEADER STARTS =======-->
 <div class="space20"></div>

 <!--===== SIDEBAR STARTS=======-->
 <div class="header-site-icon">
     <div class="slide-bar slide-bar1" style="border-radius: 24px 0px 0px 24px;">
         <div class="sidebar-info">
             <div class="sidebar-logo">
                 <div class="close-mobile-menu">
                     <a style="background: transparent !important;">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             style="color: white">
                             <path
                                 d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z">
                             </path>
                         </svg>
                     </a>
                 </div>
             </div>
             <h3>Профиль</h3>

             <div class="space20"></div>
             @auth
                 <div class="personal-info">
                     <div class="img1">
                         <img src="https://osonhona.tj/avatar.jpg"
                             alt="housa">
                     </div>
                     <div class="content">
                         <div class="space10"></div>
                         <a href="#">{{ Auth::user()->fullname . "\n" . Auth::user()->mobile_no }}</a>
                     </div>
                 </div>
                 <div class="space28"></div>

                 {{-- <h3>Наше меню</h3>
                 <div class="space8"></div>
                 <div class="boxarea">
                     <a href="/">
                         <span class="icon">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                 <path
                                     d="M14 21C13.4477 21 13 20.5523 13 20V12C13 11.4477 13.4477 11 14 11H20C20.5523 11 21 11.4477 21 12V20C21 20.5523 20.5523 21 20 21H14ZM4 13C3.44772 13 3 12.5523 3 12V4C3 3.44772 3.44772 3 4 3H10C10.5523 3 11 3.44772 11 4V12C11 12.5523 10.5523 13 10 13H4ZM9 11V5H5V11H9ZM4 21C3.44772 21 3 20.5523 3 20V16C3 15.4477 3.44772 15 4 15H10C10.5523 15 11 15.4477 11 16V20C11 20.5523 10.5523 21 10 21H4ZM5 19H9V17H5V19ZM15 19H19V13H15V19ZM13 4C13 3.44772 13.4477 3 14 3H20C20.5523 3 21 3.44772 21 4V8C21 8.55228 20.5523 9 20 9H14C13.4477 9 13 8.55228 13 8V4ZM15 5V7H19V5H15Z">
                                 </path>
                             </svg>
                         </span>
                         <span class="text">Дашборд</span>
                     </a>
                 </div> --}}
                 <div class="boxarea">
                     <a href="/profile">
                         <span class="icon">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                 <path
                                     d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z">
                                 </path>
                             </svg>
                         </span>
                         <span class="text">Мой профиль</span>
                     </a>
                 </div>
                 <div class="boxarea">
                     <a href="/my_properties?start=1&limit=5">
                         <span class="icon">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                 <path
                                     d="M10 3V5H5V19H19V14H21V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H10ZM17.5858 5H13V3H21V11H19V6.41421L12 13.4142L10.5858 12L17.5858 5Z">
                                 </path>
                             </svg>
                         </span>
                         <span class="text">
                             Мои объявления
                         </span>
                     </a>
                 </div>
                 <div class="boxarea">
                     <a href="/add_property">
                         <span class="icon">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                 <path
                                     d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z">
                                 </path>
                             </svg>
                         </span>
                         <span class="text">Добавить объявление</span>
                     </a>
                 </div>
                 <div class="boxarea">
                     <a id="logout-button">
                         <span class="icon">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                 <path
                                     d="M4 18H6V20H18V4H6V6H4V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V18ZM6 11H13V13H6V16L1 12L6 8V11Z">
                                 </path>
                             </svg>
                         </span>
                         <span class="text">Выход</span>
                     </a>
                 </div>
             @endauth
             @guest
                 <div class="boxarea">
                     <a href="/login">
                         <span class="icon">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                 <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                 <polyline points="10 17 15 12 10 7"></polyline>
                                 <line x1="15" y1="12" x2="3" y2="12"></line>
                             </svg>
                         </span>
                         <span class="text">Авторизоватся</span>
                     </a>
                 </div>
             @endguest
         </div>
     </div>
     <div class="body-overlay"></div>
 </div>
 <!--===== SIDEBAR ENDS STARTS=======-->

 <meta name="csrf-token" content="{{ csrf_token() }}">

 <script>
     document.getElementById('logout-button').addEventListener('click', function() {
         fetch('/logout', {
                 method: 'POST',
                 headers: {
                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                         'content'),
                     'Accept': 'application/json',
                     'Content-Type': 'application/json',
                 }
             })
             .then(response => {
                 if (response.ok) {
                     window.location.href = '/'; // или другой URL после выхода
                 } else {
                     alert('Ошибка выхода');
                 }
             })
             .catch(error => {
                 console.error('Ошибка:', error);
                 alert('Ошибка выхода');
             });
     });

     document.getElementById('logout-button2').addEventListener('click', function() {
         fetch('/logout', {
                 method: 'POST',
                 headers: {
                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                         'content'),
                     'Accept': 'application/json',
                     'Content-Type': 'application/json',
                 }
             })
             .then(response => {
                 if (response.ok) {
                     window.location.href = '/'; // или другой URL после выхода
                 } else {
                     alert('Ошибка выхода');
                 }
             })
             .catch(error => {
                 console.error('Ошибка:', error);
                 alert('Ошибка выхода');
             });
     });
 </script>


 <script>
     function formatTJS(value) {
         const number = Number(value);
         if (isNaN(number)) return 'Invalid number';

         return number
             .toString()
             .replace(/\B(?=(\d{3})+(?!\d))/g, ' ') + ' TJS';
     }
 </script>
