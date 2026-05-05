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

// upload file
$photoName = "";
if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
    $targetDir = "uploads/";
    
    // buat folder kalau belum ada
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $photoName = time() . "_" . basename($_FILES["photo"]["name"]);
    $targetFile = $targetDir . $photoName;

    move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);
}

// insert ke database
$sql = "INSERT INTO users (name, email, password, telepon, gender, hobbies, address, photo)
        VALUES ('$name', '$email', '$password', '$telepon', '$gender', '$hobbies', '$address', '$photoName')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registrasi Berhasil! Silakan Login.'); window.location.href='login.php';</script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>