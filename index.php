<?php
 if (isset($_POST["login"])) {
     if ($_POST["username"] == "1" && $_POST["password"] == "1") {
         header("Location: ./admin/php/home.php ");
         exit;
     } else {
         $error = true;
     }
 }

 if (isset($_POST["login"])) {
     if ($_POST["username"] == "user" && $_POST["password"] == ".") {
         header("Location: ./public/php/home.php ");
         exit;
     } else {
         $error = true;
     }
 }


?>





<!doctype html>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="./public/css/style.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Movix</title>
</head>
<style>



.navbar-brand {
  font-size: 4rem;
  font-weight: bold;
  color:rgb(255, 0, 0);
  letter-spacing: 2px;

}

span.v1 {
  color:rgb(255, 0, 0);
}


.halaman-login{
  background:rgba(17, 18, 21, 0.85);
  color: #fff;
  border-radius: 24px;
  box-shadow: 0 8px 32px 0 rgba(0,0,0,0.37);
  border: none;
  width: 400px;
  
}

.logo-logo {
  width: 80px;
  height: 80px;
  margin-bottom: 10px;

}


.container.card-shadow {
    background-color: rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(8px);
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}




.card .card-title {
  color: #fff;
  text-shadow: 0 2px 8px rgba(220,53,69,0.10);
  letter-spacing: 1.5px;
}
.card .text-danger {
  color: #8E1616 ;
}
.input-group-text {
  background: #232526;
  color: #8E1616;
  border: none;
}
.form-control {
  background: #232526;
  color: #fff;
  border: none;
  box-shadow: none ;
}
.form-control:focus {
  background: #232526;
  color: #fff;
  border: 1px solid #8E1616;
  box-shadow: 0 0 0 0.2rem rgba(220,53,69,0.15);
}
.btn-danger {
  background: #8E1616;
  border: none;
  border-radius: 30px;
  font-weight: bold;
  letter-spacing: 1px;
  transition: background 0.2s;
}
.btn-danger:hover, .btn-danger:focus {
  background: #8E1616;
}
.btn-outline-light {
  border: 1.5px solid #fff;
  color: #fff;
  background: transparent;
  transition: background 0.2s, color 0.2s;
}
.btn-outline-light:hover, .btn-outline-light:focus {
  background: #fff;
  color: #232526;
}
.rounded-circle {
  border-radius: 50% ;
}


@media (max-width: 576px) {
  .card {
    padding: 1.5rem ;
    border-radius: 16px;
  }
  .navbar-brand {
    font-size: 2rem;
  }


}

</style>

<body>


 


  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand " href="#">MoVix</a>
    </div>
  </nav>

  <!-- Halaman Login -->
  <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class=" halaman-login  card shadow-lg ">
      <div class="card-body">
        <div class="text-center mb-4">
          <div>
            <img class="logo-logo" src="./CSS/img/logo.png" alt="Movix Logo">
          </div>
          <h3 class="card-title mt-3 fw-bold">
            Login to <span class="v1">Movix</span>
          </h3>
          <p class="text-secondary small mb-0">Masuk untuk menikmati film favoritmu</p>
        </div>
        <form method="post" action="" autocomplete="off">
          <div class="mb-3">
            <label for="username" class="form-label fw-semibold">Username</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-person"></i></span>
              <input type="text" class="form-control" id="username" name="username" required autofocus placeholder="Masukkan username">
            </div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label fw-semibold">Password</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-lock"></i></span>
              <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan password">
              
            </div>
          </div>
          <button type="submit" class="btn btn-danger w-100 mb-2 fw-bold shadow-sm" name="login">Login</button>
        </form>
        <div class="text-center mt-3">
          <small class="text-secondary">Atau login dengan</small>
          <div class="d-flex justify-content-center gap-3 mt-2">
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" title="Google"><i class="bi bi-google"></i></a>
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" title="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" title="Twitter"><i class="bi bi-twitter"></i></a>
          </div>
        </div>
        <div class="text-center mt-4">
          <small>Belum punya akun? <a href="/daftar.php" class="text-danger text-decoration-none fw-semibold">Daftar di sini</a></small>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>