const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

function startQRCodeScan() {
    const qrcodeReader = document.getElementById('qrcode-reader');
    qrcodeReader.style.display = 'block';

    const html5QrCode = new Html5Qrcode('qrcode-reader');

    html5QrCode.start(
        function (userEmail) {
            // Authenticate user based on QR code data (e.g., userEmail)
            // Implement the authentication logic here

            alert('QR Code Login successful');
        },
        function (error) {
            console.error('QR Code scan error: ' + error);
        }
    );
}
function showLoginForm() {
    const loginForm = document.getElementById('login-form');
    const qrcodeReader = document.getElementById('qrcode-reader');

    loginForm.style.display = 'block';
    qrcodeReader.style.display = 'none';
}
