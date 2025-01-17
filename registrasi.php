<?php
require 'functions.php';

if (isset($_POST['register'])) {
    $message = registrasi($_POST); // Call the registration function

    if ($message === true) {
        // Redirect to User.html after successful registration
        header("Location: User.html");
        exit(); // Ensure no further code is executed after the redirect
    } else {
        // Display the error message
        echo "<script>
            alert('$message');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Icon" href="Assets/img/logo banua.png" type="image/x-icon" />
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        /* Full height of the viewport */
    }

    .signup-container {
        max-width: 500px;
        /* Maximum width of the form */
        width: 100%;
        /* Full width on smaller screens */
        background: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .signup-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .signup-header h2 {
        font-weight: bold;
        color: #343a40;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #6c63ff;
    }

    .btn-signup {
        background-color: #6c63ff;
        color: #fff;
        border: none;
    }

    .btn-signup:hover {
        background-color: #5750d4;
    }
    </style>
</head>

<body>
    <div class="signup-container">
        <div class="signup-header">
            <h2>Sign Up</h2>
        </div>
        <form method="POST" action="http://localhost/webyoung/registrasi.php">
            <div class="mb-3">
                <label for="username" class="form-label">Nama Lengkap</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter your full name"
                    required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email"
                    required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password"
                    placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
                <label for="password2" class="form-label">Confirm Password</label>
                <input type="password" name="password2" class="form-control" id="password2"
                    placeholder="Confirm your password" required>
            </div>
            <button type="submit" name="register" class="btn btn-signup w-100">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>