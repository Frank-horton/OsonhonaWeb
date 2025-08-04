<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ __('appTitle') }}</title>
    {{-- Jquery --}}
    <script src="{{ asset('asset/script/jquery-3.6.0.min.js') }}"></script>
    @yield('header')
    <link rel="stylesheet" href="{{ asset('asset/css/app.min.css') }}">
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('asset/img/favicon.ico') }}" style="width: 2px !important;" />
    <link rel="stylesheet" href="{{ asset('asset/bundles/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/bundles/codemirror/theme/duotone-dark.css') }} ">
    <link rel="stylesheet" href="{{ asset('asset/bundles/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/style/app.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/cdncss/iziToast.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <script src="{{ asset('asset/cdnjs/iziToast.min.js') }}"></script>
    <script src="{{ asset('asset/cdnjs/sweetalert.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('asset/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>
    <div class="loading">
        <div class="loader triangle">
            <svg viewBox="0 0 86 80">
                <polygon points="43 8 79 72 7 72"></polygon>
            </svg>
        </div>
    </div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li>
                            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                                <svg class="svg-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M916.6 210.2H107.4c-17.7 0-32-14.3-32-32s14.3-32 32-32h809.2c17.7 0 32 14.3 32 32s-14.3 32-32 32zM714.3 544H107.4c-17.7 0-32-14.3-32-32s14.3-32 32-32h606.9c17.7 0 32 14.3 32 32s-14.3 32-32 32zM916.6 877.8H107.4c-17.7 0-32-14.3-32-32s14.3-32 32-32h809.2c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <span class="d-lg-inline-block btn btn-light"> {{ __('Log Out') }} </span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i>
                                {{ __('logOut') }}
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand" id="reloadContent">
                        <a href="{{ route('index') }}">
                            <span class="logo-name">{!! Session::get('app_name') !!}</span>
                            <span class="logo-name-small">{!! Session::get('app_name') !!}</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="sideBarli indexSideA">
                            <a href="{{ route('index') }}" class="nav-link">
                                <i data-feather="home"></i>
                                <span>{{ __('dashboard') }} </span></a>
                        </li>
                        <li class="sideBarli propertiesSideA">
                            <a href="{{ route('properties') }}" class="nav-link">
                                <i data-feather="box"></i>
                                <span> {{ __('properties') }}</span>
                            </a>
                        </li>
                        <li class="sideBarli userSideA">
                            <a href="{{ route('users') }}" class="nav-link">
                                <i data-feather="users"></i>
                                <span> {{ __('users') }}</span>
                            </a>
                        </li>
                        <li class="sideBarli reelSideA">
                            <a href="{{ route('reels') }}" class="nav-link">
                                <i data-feather="play-circle"></i>
                                <span> {{ __('reels') }}</span>
                            </a>
                        </li>
                        <li class="sideBarli notificationSideA">
                            <a href="{{ route('notification') }}" class="nav-link">
                                <i data-feather="bell"></i>
                                <span> {{ __('notifications') }} </span>
                            </a>
                        </li>
                        <li class="sideBarli supportSideA">
                            <a href="{{ route('support') }}" class="nav-link">
                                <i data-feather="archive"></i>
                                <span> {{ __('support') }} </span>
                            </a>
                        </li>
                        <li class="sideBarli reportSideA">
                            <a href="{{ route('reports') }}" class="nav-link">
                                <i data-feather="info"></i>
                                <span> {{ __('report') }} </span>
                            </a>
                        </li>
                        <li class="sideBarli faqsSideA">
                            <a href="{{ route('faqs') }}" class="nav-link">
                                <i data-feather="help-circle"></i>
                                <span> {{ __('faqs') }} </span>
                            </a>
                        </li>
                        <li class="sideBarli settingSideA">
                            <a href="{{ route('settings') }}" class="nav-link">
                                <i data-feather="settings"></i>
                                <span> {{ __('settings') }} </span>
                            </a>
                        </li>
                        <hr>
                        <li class="sideBarli  privacySideA">
                            <a href="{{ route('viewPrivacy') }}" class="nav-link">
                                <i data-feather="shield"></i>
                                <span>{{ __('privacyPolicy') }}</span></a>
                        </li>
                        <li class="sideBarli  termsSideA">
                            <a href="{{ route('viewTerms') }}" class="nav-link">
                                <i data-feather="clipboard"></i>
                                <span>{{ __('termsOfUse') }}</span></a>
                        </li>
                    </ul>
                </aside>
            </div>
            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
                <form action="">
                    <input type="hidden" id="user_type" value="{{ session('user_type') }}">
                </form>
                <!-- Reel Preview modal -->
                <div class="modal fade" id="reelPreviewModal" tabindex="-1" aria-labelledby="reelPreviewModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <button type="button" class="btn-close preview-btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="reelPreview">
                                <video src="" id="reelVideoUrl" playsinline autoplay controls type="video/mp4"></video>
                            </div>
                            <div class="reelDescription">
                                <p id="modalBottomDescription"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Media Preview modal -->
                <div class="modal fade" id="mediaPreviewModal" tabindex="-1" aria-labelledby="mediaPreviewModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <button type="button" class="btn-close preview-btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="reelPreview">
                                <video src="" id="mediaVideoUrl" playsinline autoplay controls type="video/mp4"></video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" value="{{ env('APP_URL')}}" id="appUrl">
    <script src="{{ asset('asset/script/env.js') }}"></script>

    <script src="{{ asset('asset/js/app.min.js ') }}"></script>
    <script src="{{ asset('asset/bundles/datatables/datatables.min.js') }}"></script>
    <script src=" {{asset('asset/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('asset/bundles/jquery-ui/jquery-ui.min.js ') }}"></script>
    <script src="{{ asset('asset/js/page/datatables.js') }}"></script>
    <script src="{{ asset('asset/js/scripts.js') }}"></script>
    <script src="{{ asset('asset/script/app.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('asset/bundles/summernote/summernote-bs4.js ') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
</body>

</html>