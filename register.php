<body>
<div class="container" id="container">
<div class="form-container sign-in">

<?php

require_once 'includes/db_config.php';
require_once 'templatess/header.php';


  // Function to safely redirect
function redirectToLogin() {
    header("Location: login.php");
    exit();
}

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert user data into the 'users' table
    $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        // Registration successful, redirect to login page
        $stmt->close(); // Close the statement here
        $conn->close(); // Close the connection here
        redirectToLogin();
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $stmt->error . '</div>';
        $stmt->close(); // Close the statement
        $conn->close(); // Close the connection
    }

}

?>

<h1>e**Baluwa</h1>
<form action="register.php" method="POST">
    <form action="register.php" method="POST">
        <input type="text" name="name" class="form-control" placeholder="Name">
        <input type="email" name="email" class="form-control" placeholder="email" required>
        <input type="password" name="password" class="form-control" placeholder="password" required>
        <button type="submit" name="register" class="btn btn-primary">Register</button>
    </form>
</div>
</div>
</div>
<script src="script.js"></script>
<!-- Include Bootstrap JS (Popper.js and Bootstrap JS) for certain Bootstrap features -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>