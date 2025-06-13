<?php
// deskripsi.php

// Contoh data deskripsi, bisa diganti dengan data dari database
$judul = "Deskripsi Produk";
$deskripsi = "Ini adalah halaman deskripsi untuk produk yang tersedia di website kami. 
Silakan baca detail produk sebelum melakukan pembelian.";

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($judul); ?></title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h1><?= htmlspecialchars($judul); ?></h1>
    <p><?= nl2br(htmlspecialchars($deskripsi)); ?></p>
</body>
</html>