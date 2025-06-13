<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'gambar'; // Ganti dengan nama database Anda

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}

// Ambil data review dari tabel 'reviews'
$sql = "SELECT nama, foto, review FROM reviews";
$result = mysqli_query($conn, $sql);

$reviews = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $reviews[] = $row;
    }
} else {
    // Jika query gagal, $reviews tetap array kosong
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Review</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f7f7f7; }
        .container { max-width: 700px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);}
        .review { display: flex; align-items: flex-start; margin-bottom: 24px; border-bottom: 1px solid #eee; padding-bottom: 16px;}
        .review:last-child { border-bottom: none; }
        .foto { width: 64px; height: 64px; border-radius: 50%; object-fit: cover; margin-right: 18px; }
        .nama { font-weight: bold; margin-bottom: 6px; }
        .teks { color: #333; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Review Pengunjung</h2>
        <?php foreach($reviews as $r): ?>
            <div class="review">
                <img src="<?= htmlspecialchars($r['foto']) ?>" alt="<?= htmlspecialchars($r['nama']) ?>" class="foto">
                <div>
                    <div class="nama"><?= htmlspecialchars($r['nama']) ?></div>
                    <div class="teks"><?= htmlspecialchars($r['review']) ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>