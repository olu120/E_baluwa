<?php
require_once 'includes/db_config.php';
require_once 'templatess/header.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve user data from the 'users' table
    $query = "SELECT id, name, email, password FROM users WHERE email = ?";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $stmt->bind_result($id, $name, $db_email, $db_password);
    $stmt->fetch();

    if (password_verify($password, $db_password)) {
        echo "Login successful. Welcome, $name!";
    } else {
        echo "Login failed. Please check your credentials.";
    }

    $stmt->close();
    $conn->close();
}


?>

<body>

    <div class="container" id="container">
        <div class="form-container sign-in">
            <form action="login.php" method="POST">
                <h1>e**Baluwa</h1>
                <div id="qrcode-container">
                    <img id="qrcode-image" src="assets/images/qr_2.png" alt="QR Code Scanner">
                </div>
                <button onclick="startQRCodeScan()">Scan to Login</button>
                <span>or use your email and password</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#"><l>Forget Your Password?</l></a>
                <button type="submit" name="login">Sign In</button>

                <button onclick="showLoginForm()">Login with Email/Password</button>
                <div id="qrcode-reader" style="display: none;"></div>
            </form>
        </div>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/qrcode.js"></script>
</body>

</html>