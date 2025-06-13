<?php
session_start();

if (isset($_POST["register"])) {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];

    // Validasi sederhana
    if ($username === "" || $email === "" || $password === "" || $confirm === "") {
        $error = "Semua field wajib diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email tidak valid!";
    } elseif ($password !== $confirm) {
        $error = "Konfirmasi password tidak cocok!";
    } else {
       
        $_SESSION['register_success'] = true;
        header("Location: ./login.php");
        exit;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./public/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Daftar | Movix</title>
    <style>
        <?php //  ?>
        * { font-family: "Roboto", sans-serif; }
        nav { background-color: rgba(17, 18, 21, 0.85); color: #fff; backdrop-filter: blur(10px); box-shadow: 0 2px 8px rgba(0,0,0,0.1); position: fixed; top: 0; left: 0; width: 100vw; z-index: 1000; margin-left: 0; padding-left: 0; padding-right: 0; display: flex; justify-content: center; }
        body { background-image: url('../assets/img/bg2.jpg') !important; background-repeat: no-repeat; background-size: cover; background-position: center; min-height: 100vh; }
        .navbar-brand { font-size: 2rem; font-weight: bold; color:rgb(255, 0, 0); letter-spacing: 2px; margin-left :30px }
        span.v1 { color:rgb(255, 0, 0); }
        .halaman-login{ background:rgba(17, 18, 21, 0.85); color: #fff; border-radius: 24px; box-shadow: 0 8px 32px 0 rgba(0,0,0,0.37); border: none; width: 400px; }
        .logo-logo { width: 80px; height: 80px; margin-bottom: 10px; }
        .card .card-title { color: #fff; text-shadow: 0 2px 8px rgba(220,53,69,0.10); letter-spacing: 1.5px; }
        .card .text-danger { color: #8E1616 ; }
        .input-group-text { background: #232526; color: #8E1616; border: none; }
        .form-control { background: #232526; color: #fff; border: none; box-shadow: none ; }
        .form-control:focus { background: #232526; color: #fff; border: 1px solid #8E1616; box-shadow: 0 0 0 0.2rem rgba(220,53,69,0.15); }
        .btn-danger { background: #8E1616; border: none; border-radius: 30px; font-weight: bold; letter-spacing: 1px; transition: background 0.2s; }
        .btn-danger:hover, .btn-danger:focus { background: #8E1616; }
        .btn-outline-light { border: 1.5px solid #fff; color: #fff; background: transparent; transition: background 0.2s, color 0.2s; }
        .btn-outline-light:hover, .btn-outline-light:focus { background: #fff; color: #232526; }
        .rounded-circle { border-radius: 50% ; }
        @media (max-width: 576px) {
            .card { padding: 1.5rem ; border-radius: 16px; }
            .navbar-brand { font-size: 2rem; }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">MoVix</a>
        </div>
    </nav>

    <!-- Halaman Daftar -->
    <div class="d-flex justify-content-center align-items-center login-bg" style="min-height: 80vh;">
        <div class="halaman-login card shadow-lg animate__animated animate__fadeInDown" style="width:320px; padding: 1.2rem 1.2rem;">
            <div class="card-body p-3">
                <div class="text-center mb-3">
                    <div>
                        <img class="logo-logo animate__animated animate__pulse animate__infinite" src="../assets/img/logo1.png" alt="Movix Logo" style="width:60px; height:60px;">
                    </div>
                    <h4 class="card-title mt-2 fw-bold" style="font-size:1.3rem;">
                        Daftar <span class="v1">Movix</span>
                    </h4>
                    <p class="text-secondary small mb-0" style="font-size:0.9rem;">Buat akun untuk menikmati film favoritmu</p>
                </div>
                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger py-2 text-center animate__animated animate__shakeX" role="alert" style="font-size:0.95rem;">
                        <?= $error ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="" autocomplete="off">
                    <div class="mb-2">
                        <label for="username" class="form-label fw-semibold" style="font-size:0.95rem;">Username</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="username" name="username" required autofocus placeholder="Masukkan username" style="font-size:0.95rem;" value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label fw-semibold" style="font-size:0.95rem;">Email</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan email" style="font-size:0.95rem;" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label fw-semibold" style="font-size:0.95rem;">Password</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password" required placeholder="Buat password" style="font-size:0.95rem;">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="confirm" class="form-label fw-semibold" style="font-size:0.95rem;">Konfirmasi Password</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control" id="confirm" name="confirm" required placeholder="Ulangi password" style="font-size:0.95rem;">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger w-100 mb-2 fw-bold shadow-sm animate__animated animate__pulse" name="register" style="font-size:1rem; padding:0.4rem 0;">Daftar</button>
                </form>
                <div class="text-center mt-3">
                    <small style="font-size:0.9rem;">Sudah punya akun? <a href="../index.php" class="text-danger text-decoration-none fw-semibold">Login di sini</a></small>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

    <footer class="text-center py-4 mt-5" style="background: rgba(17,18,21,0.85); color: #fff; backdrop-filter: blur(6px); border-top: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
      <div class="mb-2">
        <a href="#" class="text-danger me-2" style="font-size:1.3rem;"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-danger me-2" style="font-size:1.3rem;"><i class="bi bi-youtube"></i></a>
        <a href="#" class="text-danger me-2" style="font-size:1.3rem;"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="text-danger" style="font-size:1.3rem;"><i class="bi bi-tiktok"></i></a>
      </div>
      <div style="font-size:0.98rem;">
        &copy; <?= date('Y') ?> <span class="fw-bold text-danger">Movix</span>. All Rights Reserved.<br>
        <span style="font-size:0.85rem; color:#bbb;">Temukan film favoritmu hanya di Movix!</span>
      </div>
    </div>
  </footer>
</body>
</html>
