<?php
// movies.php

// Contoh data film (bisa diganti dengan data dari database)
$movies = [
    [
        'title' => 'Inception',
        'year' => 2010,
        'genre' => 'Sci-Fi',
        'director' => 'Christopher Nolan'
    ],
    [
        'title' => 'The Matrix',
        'year' => 1999,
        'genre' => 'Action',
        'director' => 'Lana Wachowski, Lilly Wachowski'
    ],
    [
        'title' => 'Interstellar',
        'year' => 2014,
        'genre' => 'Adventure',
        'director' => 'Christopher Nolan'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Film</title>
    <style>
        table { border-collapse: collapse; width: 70%; margin: 20px auto; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background: #f4f4f4; }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Daftar Film</h1>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Tahun</th>
                <th>Genre</th>
                <th>Sutradara</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movies as $movie): ?>
            <tr>
                <td><?= htmlspecialchars($movie['title']) ?></td>
                <td><?= htmlspecialchars($movie['year']) ?></td>
                <td><?= htmlspecialchars($movie['genre']) ?></td>
                <td><?= htmlspecialchars($movie['director']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>