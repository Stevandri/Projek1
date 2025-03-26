<?php
// Koneksi ke database (ganti dengan kredensial Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nama_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $email = $_POST["email"];
    $telepon = $_POST["telepon"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash kata sandi

    $sql = "INSERT INTO users (nama, nim, email, telepon, password) VALUES ('$nama', '$nim', '$email', '$telepon', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Pengguna berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>