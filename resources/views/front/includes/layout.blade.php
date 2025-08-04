<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Osonhona
    </title>
    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="/assets/icons/apple-icon-57x57.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="/assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/aos.css">
    {{-- <link rel="stylesheet" href="/assets/css/plugins/fontawesome.css"> --}}
    <link rel="stylesheet" href="/assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/plugins/owlcarousel.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/sidebar.css">
    <link rel="stylesheet" href="/assets/css/plugins/slick-slider.css">
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="/assets/css/plugins/swiper-slider.css">
    <link rel="stylesheet" href="/assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Стили миниатюр */
        .thumbnail {
            width: 150px;
            margin: 10px;
            cursor: pointer;
        }

        /* Модальное окно */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .modal-content {
            margin: auto;
            display: block;
            max-width: 90%;
            max-height: 80vh;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 30px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>

</head>

<body class="body1 b-bg1">

    @yield('preloader')

    @yield('content')

    @yield('footer')

    <div class="space32"></div>
    <!--===== JS SCRIPT LINK =======-->
    <script src="/assets/js/plugins/jquery-3-7-1.min.js"></script>
    <script src="/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/assets/js/plugins/fontawesome.js"></script>
    <script src="/assets/js/plugins/aos.js"></script>
    <script src="/assets/js/plugins/chart.js"></script>
    <script src="/assets/js/plugins/gsap.min.js"></script>
    <script src="/assets/js/plugins/ScrollTrigger.min.js"></script>
    <script src="/assets/js/plugins/textSplite-custom.js"></script>
    <script src="/assets/js/plugins/sidebar.js"></script>
    <script src="/assets/js/plugins/swiper-slider.js"></script>
    <script src="/assets/js/plugins/magnific-popup.js"></script>
    <script src="/assets/js/plugins/mobilemenu.js"></script>
    <script src="/assets/js/plugins/owlcarousel.min.js"></script>
    <script src="/assets/js/plugins/nice-select.js"></script>
    <script src="/assets/js/plugins/waypoints.js"></script>
    <script src="/assets/js/plugins/slick-slider.js"></script>
    <script src="/assets/js/plugins/circle-progress.js"></script>
    <script src="/assets/js/plugins/jquery.appear.js"></script>
    <script src="/assets/js/plugins/jquery.odometer.min.js"></script>
    <script src="/assets/js/main.js"></script>

    <!-- Модальное окно -->
    <div id="myModal" class="modal" onclick="closeModal()">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImg">
    </div>

    <script>
        function openModal(src) {
            document.getElementById("myModal").style.display = "block";
            document.getElementById("modalImg").src = src;
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>

</body>

</html>
