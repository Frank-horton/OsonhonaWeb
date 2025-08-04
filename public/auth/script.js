document.addEventListener('DOMContentLoaded', () => {
    // Form elements
    const phoneForm = document.getElementById('phone-form');
    const otpForm = document.getElementById('otp-form');
    const successStep = document.getElementById('success-step');
    const phoneInput = document.getElementById('phone-input');
    const displayPhone = document.getElementById('display-phone');
    const backToPhone = document.getElementById('back-to-phone');
    const errorMessage = document.getElementById('error-message');
    const otpInputs = document.querySelectorAll('.otp-inputs input');
    const resendBtn = document.getElementById('resend-btn');
    const countdownEl = document.getElementById('countdown');

    let countdownInterval;
    let currentPhone = '';

    // Phone number formatting and validation
    function formatPhoneNumber(value) {
        const digits = value.replace(/\D/g, '');
        if (digits.length <= 3) return digits;
        if (digits.length <= 6) return `${digits.slice(0, 3)} ${digits.slice(3)}`;
        return `${digits.slice(0, 3)} ${digits.slice(3, 6)} ${digits.slice(6, 10)}`;
    }

    function validatePhone(phone) {
        return /^\+?[0-9]{10,15}$/.test(phone.replace(/\s+/g, ''));
    }

    // Phone input handling
    phoneInput.addEventListener('input', (e) => {
        if (e.target.value.length < phoneInput.value.length) {
            phoneInput.value = e.target.value;
        } else {
            phoneInput.value = formatPhoneNumber(e.target.value);
        }
    });

    // Phone form submission
    phoneForm.addEventListener('submit', async(e) => {
        e.preventDefault();
        const phone = phoneInput.value.replace(/\s+/g, '');

        if (!validatePhone(phone)) {
            showError('Please enter a valid phone number');
            return;
        }

        showLoading(phoneForm);

        try {
            // Mock API call - replace with actual API call
            await new Promise(resolve => setTimeout(resolve, 1000));

            currentPhone = phoneInput.value;
            displayPhone.textContent = currentPhone;

            // Switch to OTP step
            phoneForm.classList.remove('active');
            phoneForm.classList.add('hidden');
            otpForm.classList.remove('hidden');
            otpForm.classList.add('active');

            // Focus first OTP input
            otpInputs[0].focus();

            // Start countdown
            startCountdown();
        } catch (error) {
            showError('Failed to send verification code. Please try again.');
        } finally {
            hideLoading(phoneForm);
        }
    });

    // OTP input handling
    otpInputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            if (e.target.value.length > 1) {
                // Handle paste
                const digits = e.target.value.split('').slice(0, 6);
                digits.forEach((digit, idx) => {
                    if (otpInputs[idx]) {
                        otpInputs[idx].value = digit;
                    }
                });
                const nextEmpty = Array.from(otpInputs).findIndex(input => !input.value);
                if (nextEmpty !== -1) {
                    otpInputs[nextEmpty].focus();
                } else {
                    otpInputs[5].focus();
                }
            } else if (e.target.value) {
                // Move to next input
                if (index < 5) otpInputs[index + 1].focus();
            }

            updateOtpSubmitButton();
        });

        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && !e.target.value && index > 0) {
                otpInputs[index - 1].focus();
            }
        });
    });

    // OTP form submission
    otpForm.addEventListener('submit', async(e) => {
        e.preventDefault();
        const otp = Array.from(otpInputs).map(input => input.value).join('');

        showLoading(otpForm);

        try {
            // Mock API call - replace with actual API call
            await new Promise(resolve => setTimeout(resolve, 1500));

            // Show success step
            otpForm.classList.remove('active');
            otpForm.classList.add('hidden');
            successStep.classList.remove('hidden');
            successStep.classList.add('active');

            // Mock redirect
            setTimeout(() => {
                // Replace with actual redirect
                console.log('Redirecting to dashboard...');
            }, 2000);
        } catch (error) {
            showError('Invalid verification code. Please try again.');
        } finally {
            hideLoading(otpForm);
        }
    });

    // Back button handling
    backToPhone.addEventListener('click', () => {
        otpForm.classList.remove('active');
        otpForm.classList.add('hidden');
        phoneForm.classList.remove('hidden');
        phoneForm.classList.add('active');
        clearCountdown();
        resetOtpInputs();
    });

    // Resend OTP handling
    resendBtn.addEventListener('click', async() => {
        showLoading(otpForm);

        try {
            // Mock API call - replace with actual API call
            await new Promise(resolve => setTimeout(resolve, 1000));

            resetOtpInputs();
            startCountdown();
            otpInputs[0].focus();
        } catch (error) {
            showError('Failed to resend code. Please try again.');
        } finally {
            hideLoading(otpForm);
        }
    });

    // Helper functions
    function showError(message) {
        errorMessage.textContent = message;
        errorMessage.classList.remove('hidden');
        setTimeout(() => {
            errorMessage.classList.add('hidden');
        }, 5000);
    }

    function showLoading(form) {
        const btn = form.querySelector('.submit-btn');
        btn.disabled = true;
        btn.querySelector('.btn-text').classList.add('hidden');
        btn.querySelector('.loader').classList.remove('hidden');
    }

    function hideLoading(form) {
        const btn = form.querySelector('.submit-btn');
        btn.disabled = false;
        btn.querySelector('.btn-text').classList.remove('hidden');
        btn.querySelector('.loader').classList.add('hidden');
    }

    function updateOtpSubmitButton() {
        const isComplete = Array.from(otpInputs).every(input => input.value);
        otpForm.querySelector('.submit-btn').disabled = !isComplete;
    }

    function resetOtpInputs() {
        otpInputs.forEach(input => input.value = '');
        updateOtpSubmitButton();
    }

    function startCountdown() {
        let timeLeft = 30;
        resendBtn.classList.add('hidden');
        countdownEl.classList.remove('hidden');

        clearCountdown();

        countdownInterval = setInterval(() => {
            timeLeft--;
            countdownEl.querySelector('span').textContent = timeLeft + 's';

            if (timeLeft <= 0) {
                clearCountdown();
                countdownEl.classList.add('hidden');
                resendBtn.classList.remove('hidden');
            }
        }, 1000);
    }

    function clearCountdown() {
        if (countdownInterval) {
            clearInterval(countdownInterval);
            countdownInterval = null;
        }
    }
});