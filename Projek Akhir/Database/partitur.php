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
    $judul = $_POST["judul"];
    $pencipta = $_POST["pencipta"];

    $target_dir = "uploads/"; // Direktori tempat file PDF akan disimpan
    $target_file = $target_dir . basename($_FILES["partitur"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Periksa apakah file PDF
    if ($fileType != "pdf") {
        echo "Maaf, hanya file PDF yang diizinkan.";
        $uploadOk = 0;
    }

    // Periksa apakah $uploadOk diatur ke 0 oleh kesalahan
    if ($uploadOk == 0) {
        echo "Maaf, file Anda tidak diunggah.";
    // Jika semuanya baik-baik saja, coba unggah file
    } else {
        if (move_uploaded_file($_FILES["partitur"]["tmp_name"], $target_file)) {
            // Simpan informasi partitur ke database
            $sql = "INSERT INTO partitur (judul, pencipta, file_path) VALUES ('$judul', '$pencipta', '$target_file')";

            if ($conn->query($sql) === TRUE) {
                echo "Partitur berhasil diunggah.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
        }
    }
}

$conn->close();
?>