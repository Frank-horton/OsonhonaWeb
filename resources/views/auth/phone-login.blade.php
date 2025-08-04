{{-- @extends('front.includes.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Вход по номеру телефона') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('phone.send-otp') }}" class="needs-validation" novalidate
                            id="phoneLoginForm">
                            @csrf

                            <div class="row mb-3">
                                <label for="phone_number"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Номер телефона') }}</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text"
                                        class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                                        value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Отправить код') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.getElementById('phoneLoginForm').addEventListener('submit', function(e) {
                e.preventDefault();
                this.submit();
            });
        </script>
    @endpush
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
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
    <link rel="stylesheet" href="style.css">
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
                <h1>Авторизация</h1>
            </div>

            <div id="error-message" class="error-message hidden"></div>

            <form method="POST" action="{{ route('phone.send-otp') }}" id="phone-form" class="active">
                @csrf
                <div class="input-group">
                    <div class="float-label">
                        <input type="tel" name="phone_number" id="phone_number" required>
                        <label for="phone-input">Номер телефона</label>
                    </div>
                    <p class="hint-text">Введите номер с учетом кодом страны</p>
                </div>
                <button type="submit" id="phone-submit" class="submit-btn" disabled>
                    <span class="btn-text">Отправить код подтверждения</span>
                    <span class="loader hidden"></span>
                </button>
            </form>
        </div>

        <p class="footer-text">© 2025 Osongroup, Inc. All Rights Reserved.</p>
    </div>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', () => {
            const phoneForm = document.getElementById('phone-form');
            const phoneInput = document.getElementById('phone_number');
            const submitButton = document.getElementById('phone-submit');
            const errorMessage = document.getElementById('error-message');

            // Hidden input for storing clean phone number
            const hiddenPhoneInput = document.createElement('input');
            hiddenPhoneInput.type = 'hidden';
            hiddenPhoneInput.name = 'phone_number';
            phoneForm.appendChild(hiddenPhoneInput);
            
            // Change original input name to prevent duplicate submission
            phoneInput.name = 'phone_number_display';

            function formatPhoneNumber(value) {
                const digits = value.replace(/\D/g, '');
                if (digits.length <= 3) return digits;
                if (digits.length <= 6) return `${digits.slice(0, 3)} ${digits.slice(3)}`;
                if (digits.length <= 10) return `${digits.slice(0, 3)} ${digits.slice(3, 6)} ${digits.slice(6)}`;
                return `${digits.slice(0, 3)} ${digits.slice(3, 6)} ${digits.slice(6, 8)} ${digits.slice(8, 10)} ${digits.slice(10, 12)}`;
            }

            function validatePhone(phone) {
                const digits = phone.replace(/\D/g, '');
                return digits.length === 12;
            }

            function showError(message) {
                errorMessage.textContent = message;
                errorMessage.classList.remove('hidden');
                setTimeout(() => {
                    errorMessage.classList.add('hidden');
                }, 5000);
            }

            phoneInput.addEventListener('input', (e) => {
                if (e.target.value.length < phoneInput.value.length) {
                    phoneInput.value = e.target.value;
                } else {
                    phoneInput.value = formatPhoneNumber(e.target.value);
                }

                // Store clean number in hidden input
                const cleanNumber = phoneInput.value.replace(/\D/g, '');
                hiddenPhoneInput.value = cleanNumber;

                // Enable/disable submit button based on phone number length
                submitButton.disabled = cleanNumber.length !== 12;
            });

            phoneForm.addEventListener('submit', (e) => {
                const cleanNumber = phoneInput.value.replace(/\D/g, '');
                if (!validatePhone(cleanNumber)) {
                    e.preventDefault();
                    showError('Пожалуйста, введите корректный номер телефона');
                }
            });
        });
    </script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const phoneForm = document.getElementById('phone-form');
            const phoneInput = document.getElementById('phone_number');
            const submitButton = document.getElementById('phone-submit');
            const errorMessage = document.getElementById('error-message');

            const PREFIX = '992';

            // Hidden input for storing clean phone number
            const hiddenPhoneInput = document.createElement('input');
            hiddenPhoneInput.type = 'hidden';
            hiddenPhoneInput.name = 'phone_number';
            phoneForm.appendChild(hiddenPhoneInput);

            phoneInput.name = 'phone_number_display';

            // Устанавливаем префикс по умолчанию
            phoneInput.value = PREFIX + ' ';

            function formatPhoneNumber(value) {
                const digits = value.replace(/\D/g, '');

                // Убедиться, что всегда начинается с 992
                const fullDigits = digits.startsWith(PREFIX) ? digits : PREFIX + digits;

                if (fullDigits.length <= 3) return fullDigits;
                if (fullDigits.length <= 6) return `${fullDigits.slice(0, 3)} ${fullDigits.slice(3)}`;
                if (fullDigits.length <= 9)
                return `${fullDigits.slice(0, 3)} ${fullDigits.slice(3, 6)} ${fullDigits.slice(6)}`;
                if (fullDigits.length <= 11)
                return `${fullDigits.slice(0, 3)} ${fullDigits.slice(3, 6)} ${fullDigits.slice(6, 8)} ${fullDigits.slice(8)}`;
                return `${fullDigits.slice(0, 3)} ${fullDigits.slice(3, 6)} ${fullDigits.slice(6, 8)} ${fullDigits.slice(8, 10)} ${fullDigits.slice(10, 12)}`;
            }

            function validatePhone(phone) {
                const digits = phone.replace(/\D/g, '');
                return digits.length === 12 && digits.startsWith(PREFIX);
            }

            function showError(message) {
                errorMessage.textContent = message;
                errorMessage.classList.remove('hidden');
                setTimeout(() => {
                    errorMessage.classList.add('hidden');
                }, 5000);
            }

            phoneInput.addEventListener('input', (e) => {
                let value = e.target.value.replace(/\D/g, '');

                // Удаляем всё до 992
                if (!value.startsWith(PREFIX)) {
                    value = PREFIX + value.replace(/^9*9*2*/, '');
                }

                const formatted = formatPhoneNumber(value);
                phoneInput.value = formatted;

                hiddenPhoneInput.value = value;

                submitButton.disabled = value.length !== 12;
            });

            // Блокировка удаления префикса
            phoneInput.addEventListener('keydown', (e) => {
                const cursorPosition = phoneInput.selectionStart;
                if ((cursorPosition <= 4 && (e.key === 'Backspace' || e.key === 'Delete')) ||
                    (cursorPosition <= 3 && e.key.length === 1 && /\d/.test(e.key))) {
                    e.preventDefault();
                }
            });

            phoneForm.addEventListener('submit', (e) => {
                const cleanNumber = phoneInput.value.replace(/\D/g, '');
                if (!validatePhone(cleanNumber)) {
                    e.preventDefault();
                    showError('Пожалуйста, введите корректный номер телефона');
                }
            });
        });
    </script>

</body>

</html>
