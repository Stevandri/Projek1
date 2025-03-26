<?php
session_start(); // Memulai sesi
session_destroy(); // Menghancurkan semua data sesi
header('Location: ../index.php'); // Mengarahkan pengguna kembali ke halaman login atau halaman utama
exit(); // Menghentikan eksekusi script
?>