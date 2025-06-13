<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/home.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #393E46;
            font-family: "Roboto", sans-serif;
        }
        .navbar {
            background-color: rgba(34, 40, 49, 0.85) !important;
            backdrop-filter: blur(12px);
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            font-size: 1.15rem;
            transition: background 0.3s;
        }
        .navbar-brand {
            font-size: 2.2rem;
            font-weight: bold;
            color: #e94560 !important;
            letter-spacing: 2px;
            margin-left: 2rem;
            text-shadow: 1px 2px 8px rgba(0,0,0,0.12);
        }
        .navbar-nav {
            margin: 0 10rem;
            font-weight: 500;
        }
        .navbar-nav .nav-link {
            margin-right: 2rem;
            color: #fff !important;
            transition: color 0.2s;
            position: relative;
        }
        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:hover {
            color: #e94560 !important;
        }
        .navbar-nav .nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #e94560;
            transition: width .3s;
            position: absolute;
            bottom: 0;
            left: 0;
        }
        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
        }
        .profile-circle {
            width: 44px;
            height: 44px;
            background: linear-gradient(135deg, #e94560 60%, #393e46 100%);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.3rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            border: 2px solid #fff;
            transition: box-shadow 0.2s;
        }
        .profile-circle:hover {
            box-shadow: 0 4px 16px rgba(233,69,96,0.25);
        }
        .carousel {
            position: relative;
            margin-top: 56px; 
        }
        .carousel-item {
            height: 100vh;
            min-height: 300px;
        }
        .carousel-caption {
            bottom: 100px;
            z-index: 2;
        }
        .carousel-caption h5 {
            font-size: 45px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 25px;
        }
        .carousel-caption p {
            width: 60%;
            margin: auto;
            font-size: 25px;
            line-height: 1.9;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Movix</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#film">Film</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tvshows">TV Shows</a></li>
                    <li class="nav-item"><a class="nav-link" href="#series">Series</a></li>
                </ul>
                <form class="d-flex mx-auto" style="width: 300px;" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                </form>
                <div class="dropdown ms-3">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="profile-circle">
                            <i class="bi bi-person"></i>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownProfile">
                        <li><a class="dropdown-item" href="profil.php">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/logout.php">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="../assets/img/jumbo.jpg" class="d-block w-100" alt="Jumbo">
            <div class="carousel-caption">
                <h5>Jumbo</h5>
                <p>"Jumbo adalah film animasi dengan genre fantasi petualangan Indonesia tahun 2025."</p>
                <p><a href="./review/jumbo.php" class="btn btn-danger mt-3">Review</a></p>
            </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/img/fastxx.jpg" class="d-block w-100" alt="Fast X">
                <div class="carousel-caption">
                    <h5>Fast X</h5>
                    <p>"Mereka menghadapi lawan paling mematikan yang pernah mereka hadapi."</p>
                    <p><a href="#" class="btn btn-danger mt-3">Review</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/img/vina1.jpeg" class="d-block w-100" alt="Vina Sebelum 7 Hari">
                <div class="carousel-caption">
                    <h5>Vina Sebelum 7 Hari</h5>
                    <p>"Film Pabrik Gula bercerita tentang buruh musiman di sebuah pabrik gula di Jawa Timur."</p>
                    <p><a href="#" class="btn btn-danger mt-3">Review</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="film section-padding" id="film">
        <div class="container py-5">
            <h2 class="text-white mb-4">Film Populer</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 bg-dark text-white border-0 shadow">
                <img src="../assets/img/jumbo.jpg" class="card-img-top" alt="Jumbo">
                <div class="card-body">
                    <h5 class="card-title">Jumbo</h5>
                    <p class="card-text">Film animasi fantasi petualangan Indonesia tahun 2025.</p>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a href="https://id.wikipedia.org/wiki/Jumbo_(film_2025)" class="btn btn-danger w-100">Lihat Detail</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark text-white border-0 shadow">
                <img src="../assets/img/fastxx.jpg" class="card-img-top" alt="Fast X">
                <div class="card-body">
                    <h5 class="card-title">Fast X</h5>
                    <p class="card-text">Mereka menghadapi lawan paling mematikan yang pernah mereka hadapi.</p>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a href="https://en.wikipedia.org/wiki/Fast_X" class="btn btn-danger w-100">Lihat Detail</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-dark text-white border-0 shadow">
                <img src="../assets/img/vina1.jpeg" class="card-img-top" alt="Vina Sebelum 7 Hari">
                <div class="card-body">
                    <h5 class="card-title">Vina Sebelum 7 Hari</h5>
                    <p class="card-text">Film Pabrik Gula bercerita tentang buruh musiman di sebuah pabrik gula di Jawa Timur.</p>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a href="https://id.wikipedia.org/wiki/Vina:_Sebelum_7_Hari" class="btn btn-danger w-100">Lihat Detail</a>
                </div>
                </div>
            </div>
            </div>

            </section>

            <!-- TV Shows Section -->
            <section class="tvshows section-padding" id="tvshows">
                <div class="container py-5">
                    <h2 class="text-white mb-4">TV Shows Populer</h2>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100 bg-dark text-white border-0 shadow">
                                <img src="../assets/img/th.jpeg" class="card-img-top" alt="TV Show 1">
                                <div class="card-body">
                                    <h5 class="card-title">The Mandalorian</h5>
                                    <p class="card-text">Petualangan seorang pemburu hadiah di galaksi Star Wars.</p>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <a href="https://en.wikipedia.org/wiki/The_Mandalorian" class="btn btn-danger w-100">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 bg-dark text-white border-0 shadow">
                                <img src="../assets/img/R.jpeg" class="card-img-top" alt="TV Show 2">
                                <div class="card-body">
                                    <h5 class="card-title">Stranger Things</h5>
                                    <p class="card-text">Sekelompok anak-anak menghadapi kekuatan supranatural di kota kecil.</p>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <a href="https://en.wikipedia.org/wiki/Stranger_Things" class="btn btn-danger w-100">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 bg-dark text-white border-0 shadow">
                                <img src="../assets/img/m.jpg" class="card-img-top" alt="TV Show 3">
                                <div class="card-body">
                                    <h5 class="card-title">Money Heist</h5>
                                    <p class="card-text">Aksi perampokan terbesar di Spanyol yang penuh strategi.</p>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <a href="https://en.wikipedia.org/wiki/Money_Heist" class="btn btn-danger w-100">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Series Section -->
            <section class="series section-padding" id="series">
                <div class="container py-5">
                    <h2 class="text-white mb-4">Series Terbaru</h2>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100 bg-dark text-white border-0 shadow">
                                <img src="../assets/img/loki.jpg" class="card-img-top" alt="Series 1">
                                <div class="card-body">
                                    <h5 class="card-title">Loki</h5>
                                    <p class="card-text">Petualangan Loki dalam multiverse Marvel yang penuh kejutan.</p>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <a href="https://en.wikipedia.org/wiki/Loki_(TV_series)" class="btn btn-danger w-100">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 bg-dark text-white border-0 shadow">
                                <img src="../assets/img/squid.jpg" class="card-img-top" alt="Series 2">
                                <div class="card-body">
                                    <h5 class="card-title">Squid Game</h5>
                                    <p class="card-text">Permainan bertahan hidup dengan taruhan nyawa dan hadiah besar.</p>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <a href="https://en.wikipedia.org/wiki/Squid_Game" class="btn btn-danger w-100">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 bg-dark text-white border-0 shadow">
                                <img src="../assets/img/queen.jpeg" class="card-img-top" alt="Series 3">
                                <div class="card-body">
                                    <h5 class="card-title">The Queen's Gambit</h5>
                                    <p class="card-text">Kisah inspiratif pecatur wanita jenius di dunia pria.</p>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <a href="https://en.wikipedia.org/wiki/The_Queen%27s_Gambit_(miniseries)" class="btn btn-danger w-100">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Interactive Review Modal -->
            <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header border-0">
                            <h5 class="modal-title" id="reviewModalLabel">Tulis Review Anda</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="reviewForm">
                                <div class="mb-3">
                                    <label for="reviewText" class="form-label">Review</label>
                                    <textarea class="form-control" id="reviewText" rows="4" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Rating</label>
                                    <div id="starRating" class="mb-2">
                                        <i class="bi bi-star" data-value="1"></i>
                                        <i class="bi bi-star" data-value="2"></i>
                                        <i class="bi bi-star" data-value="3"></i>
                                        <i class="bi bi-star" data-value="4"></i>
                                        <i class="bi bi-star" data-value="5"></i>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger w-100">Kirim Review</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="bg-dark text-white text-center py-4 mt-5" style="letter-spacing:1px;">
                <div class="container">
                    <div class="mb-2">
                        <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
                    </div>
                    <div>
                        &copy; <?= date('Y') ?> Movix. All Rights Reserved.
                    </div>
                </div>
            </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                // Smooth scroll for navbar links
                document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                    link.addEventListener('click', function(e) {
                        const href = this.getAttribute('href');
                        if (href && href.startsWith('#')) {
                            e.preventDefault();
                            document.querySelector(href).scrollIntoView({ behavior: 'smooth' });
                        }
                    });
                });

                // Interactive star rating
                const stars = document.querySelectorAll('#starRating .bi-star');
                let selectedRating = 0;
                stars.forEach(star => {
                    star.addEventListener('mouseover', function() {
                        const val = parseInt(this.getAttribute('data-value'));
                        highlightStars(val);
                    });
                    star.addEventListener('mouseout', function() {
                        highlightStars(selectedRating);
                    });
                    star.addEventListener('click', function() {
                        selectedRating = parseInt(this.getAttribute('data-value'));
                        highlightStars(selectedRating);
                    });
                });
                function highlightStars(rating) {
                    stars.forEach(star => {
                        if (parseInt(star.getAttribute('data-value')) <= rating) {
                            star.classList.remove('bi-star');
                            star.classList.add('bi-star-fill', 'text-warning');
                        } else {
                            star.classList.remove('bi-star-fill', 'text-warning');
                            star.classList.add('bi-star');
                        }
                    });
                }

                
                document.querySelectorAll('.carousel-caption .btn, .card-footer .btn').forEach(btn => {
                    if (btn.textContent.trim().toLowerCase().includes('review')) {
                        btn.setAttribute('data-bs-toggle', 'modal');
                        btn.setAttribute('data-bs-target', '#reviewModal');
                    }
                });

                
                document.getElementById('reviewForm').addEventListener('submit', function(e) {
                    e.preventDefault();
                    const review = document.getElementById('reviewText').value;
                    if (selectedRating === 0) {
                        alert('Silakan pilih rating terlebih dahulu.');
                        return;
                    }
                    
                    alert('Terima kasih atas review Anda!\n\nRating: ' + selectedRating + ' bintang\nReview: ' + review);
                    document.getElementById('reviewText').value = '';
                    selectedRating = 0;
                    highlightStars(0);
                    var modal = bootstrap.Modal.getInstance(document.getElementById('reviewModal'));
                    modal.hide();
                });
            </script>
        </body>
        </html>
