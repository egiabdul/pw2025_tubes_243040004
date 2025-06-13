<?php
// Konfigurasi database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'gambar';

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}

