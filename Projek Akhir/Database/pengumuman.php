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
    $subjek = $_POST["subjek"];
    $konten = $_POST["konten"];
    $pengirim = $_POST["pengirim"];
    $tanggal = $_POST["tanggal"];

    $sql = "INSERT INTO pengumuman (subjek, konten, pengirim, tanggal) VALUES ('$subjek', '$konten', '$pengirim', '$tanggal')";

    if ($conn->query($sql) === TRUE) {
        echo "Pengumuman berhasil dikirim.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>