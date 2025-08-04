<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Authentication with OTP</title>
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
                <h1>Авторизацияdsadasd</h1>
            </div>

            <div id="error-message" class="error-message hidden"></div>

            <!-- Phone Input Step -->
            <form id="phone-form" class="active">
                <div class="input-group">
                    <div class="float-label">
                        <input type="tel" id="phone-input" required>
                        <label for="phone-input">Номер телефона</label>
                    </div>
                    <p class="hint-text">Мы отправим код подтверждения на этот номер</p>
                </div>
                <button type="submit" id="phone-submit" class="submit-btn">
                    <span class="btn-text">Отправить код подтверждения</span>
                    <span class="loader hidden"></span>
                </button>
            </form>

            <!-- OTP Verification Step -->
            <form id="otp-form" class="hidden">
                <button type="button" class="back-btn" id="back-to-phone">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                    Назад
                </button>

                <h2>Верификация номера</h2>
                <p class="phone-display">Мы отправили вам 6 - значный код подтверждения на номер <span
                        id="display-phone"></span></p>

                <div class="otp-inputs">
                    <input type="text" maxlength="1" pattern="[0-9]" inputmode="numeric">
                    <input type="text" maxlength="1" pattern="[0-9]" inputmode="numeric">
                    <input type="text" maxlength="1" pattern="[0-9]" inputmode="numeric">
                    <input type="text" maxlength="1" pattern="[0-9]" inputmode="numeric">
                    <input type="text" maxlength="1" pattern="[0-9]" inputmode="numeric">
                    <input type="text" maxlength="1" pattern="[0-9]" inputmode="numeric">
                </div>

                <div class="resend-container">
                    <p id="countdown" class="countdown">Повторно отправить через <span>30 сек</span></p>
                    <button type="button" id="resend-btn" class="resend-btn hidden">Сбросить код подтверждения</button>
                </div>

                <button type="submit" id="otp-submit" class="submit-btn" disabled>
                    <span class="btn-text">Подтвердить и войти</span>
                    <span class="loader hidden"></span>
                </button>
            </form>

            <!-- Success Step -->
            <div id="success-step" class="hidden">
                <div class="success-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                        <polyline points="22 4 12 14.01 9 11.01" />
                    </svg>
                </div>
                <h2>Авторизация успешна</h2>
                <p>Переход на нужную страницу...</p>
            </div>
        </div>
        <p class="footer-text">© 2025 Osongroup, Inc. All Rights Reserved.</p>
    </div>
    <script src="script.js"></script>
</body>

</html>
