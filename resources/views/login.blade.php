<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ __('appTitle') }}</title>
    <link rel="stylesheet" href="asset/css/app.min.css">
    <link rel="stylesheet" href="asset/bundles/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/components.css">
    <link rel="stylesheet" href="asset/css/custom.css">
    <link rel="stylesheet" href="asset/css/loginPage.css">
    <link rel='shortcut icon' type='image/x-icon' href='asset/img/favicon.ico' />
</head>

<body>
    <div class="loading">
        <div class="loader triangle">
            <svg viewBox="0 0 86 80">
                <polygon points="43 8 79 72 7 72"></polygon>
            </svg>
        </div>
    </div>
    <div class="main-login-row">
        <div class="width-40">
            <div class="main-login-two-box">
                <div class="img-full-box">
                    <div class="center-title-text">
                        <div class="bottom-blur-inner">
                            <div class="login-img">
                                <img src="{{ asset('asset/img/login.png') }}" alt="login.png" class="img-fluid">
                                <img src="{{ asset('asset/img/login2.svg') }}" alt="login.png" class="img-fluid login2">
                            </div>
                            <div class="login-page-title">
                                <h1 class="main-title">
                                    {!! Session::get('app_name') !!}
                                </h1>
                                <p>Discover - Buy - Rent <br> Dream home from Smart phone</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="width-50 ">
            <div class="main-login-one-box  center">
                <div class="center container ">
                    <div class="form-login-main-box ">
                        <!-- alert-box -->
                        @if (Session::has('message'))
                        <div class="center-h alert-err fixed-alert mb-4 ">
                            <div class="d-flex ">
                                <div class="px-2 m-0 center ">
                                    <iconify-icon icon="ep:warning-filled" class="font-alert"></iconify-icon>
                                </div>
                                <div class="center">
                                    <span class="m-0 alert-title-salon gil-reg font-16">{{ Session::get('message') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        <h2 class="">{{ __('welcomeBackTo') }}{{ __('appTitle') }}</h2>
                        <p>{{ __('signIntoYourAccount') }}</p>
                        <form method="POST" action="login" class="login-form">
                            @csrf
                            <div class="form-x-box main-card">
                                <div>
                                    <div class="d-flex flex-column mb-3 w-100">
                                        <label for="Username">{{ __('username') }}</label>
                                        <input name="user_name" type="text" id="user_name" class="form-control" required>
                                    </div>
                                    <div class="d-flex flex-column mb-3 w-100">
                                        <label for="password">{{ __('password') }}</label>
                                        <input name="user_password" type="password" id="user_password" class="form-control" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn submit-btn">
                                    {{ __('login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="asset/js/app.min.js"></script>
    <script src="asset/js/scripts.js"></script>
    <script src="asset/js/custom.js"></script>
</body>

</html>