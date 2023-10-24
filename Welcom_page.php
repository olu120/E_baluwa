<?php 
require_once 'includes/db_config.php';
require_once 'templatess/header.php';
?>

<div class="container">
        <h1 class="mt-5">Welcome to Your Site</h1>
        <p class="lead">You are logged in as [User Name]</p>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login List</h5>
                        <p class="card-text">Click to view the list of logged-in users.</p>
                        <a href="login.php" class="btn btn-primary">View List</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Register List</h5>
                        <p class="card-text">Click to view the list of registered users.</p>
                        <a href="register.php" class="btn btn-primary">View List</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-5">
            <a href="logout.php" class="btn btn-danger">Log Out</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>