<?php
require 'koneksi.php';

function registrasi($data) {
    global $conn; // Ensure you have a database connection

    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
    $password2 = $data['password2'];

    // Validate passwords
    if ($password !== $password2) {
        return "Passwords do not match!";
    }

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    // Execute the statement
    if ($stmt->execute()) {
        return true; // Return true on success
    } else {
        return "Error: " . $stmt->error; // Return error message
    }
}
?>