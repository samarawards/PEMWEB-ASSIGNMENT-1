<?php
// koneksi database

session_start();

require_once 'db_config.php';

// ambil data dari form
$name     = $_POST['name'];
$email    = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$telepon  = $_POST['telepon'];
$gender   = $_POST['gender'] ?? '';

// checkbox (array)
$hobbies = "";
if (isset($_POST['hobby'])) {
    $hobbies = implode(", ", $_POST['hobby']);
}

$address = $_POST['address'];


// insert ke database
$sql = "INSERT INTO users (name, email, password, telepon, gender, hobbies, address)
        VALUES ('$name', '$email', '$password', '$telepon', '$gender', '$hobbies', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registrasi Berhasil! Silakan Login.'); window.location.href='../frontend/assets/login.php';</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>