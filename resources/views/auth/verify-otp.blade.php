{{-- @extends('front.includes.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтверждение номера телефона') }}</div>

                <div class="card-body">
                    <p class="text-center">
                        Код подтверждения отправлен на номер {{ $phone }}
                    </p>

                    <form method="POST" action="{{ route('phone.verify') }}">
                        @csrf
                        <input type="hidden" name="phone_number" value="{{ $phone }}">
                        <input type="hidden" name="device_type" value="1">
                        <input type="hidden" name="device_token" value="{{ Str::random(32) }}">

                        <div class="row mb-3">
                            <label for="otp_code" class="col-md-4 col-form-label text-md-end">{{ __('Код подтверждения') }}</label>

                            <div class="col-md-6">
                                <input id="otp_code" type="text" class="form-control @error('otp_code') is-invalid @enderror" name="otp_code" required autofocus>

                                @error('otp_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Подтвердить') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подтверждение</title>
    <link rel="shortcut icon" href="/assets/icons/apple-icon-57x57.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/icons/apple-icon-57x57.png">
    <!-- остальные иконки... -->
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <div class="container">
        <div class="auth-form">
            <div class="form-header">
                <div class="icon-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                        <polyline points="10 17 15 12 10 7" />
                        <line x1="15" y1="12" x2="3" y2="12" />
                    </svg>
                </div>
                <h1>Подтверждение номера</h1>
            </div>
            <div class="info-text">
                Код отправлен на номер <strong>{{ $phone }}</strong>
            </div>
            <form method="POST" action="{{ route('phone.verify') }}">
                @csrf
                <input type="hidden" name="phone_number" value="{{ $phone }}">
                <input type="hidden" name="device_type" value="1">
                <input type="hidden" name="device_token" value="{{ Str::random(32) }}">

                <div class="input-group">
                    <div class="float-label">
                        {{-- <input id="otp_code" type="text" name="otp_code" required> --}}
                        <input id="otp_code" type="text" name="otp_code" required inputmode="numeric" maxlength="6"
                            pattern="\d{6}" oninput="this.value = this.value.replace(/\D/g, '').slice(0, 6)">

                        <label for="otp_code">Код подтверждения</label>
                    </div>
                    @error('otp_code')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="submit-btn">
                    <span class="btn-text">Подтвердить</span>
                    <span class="loader hidden"></span>
                </button>
            </form>
        </div>
        <p class="footer-text">© 2025 Osongroup, Inc. All Rights Reserved.</p>
    </div>
</body>

</html>
