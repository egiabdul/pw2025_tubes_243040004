<?php
session_start();

$settings = [
    'theme' => $_SESSION['theme'] ?? 'light',
    'notifications' => $_SESSION['notifications'] ?? 'on',
    'language' => $_SESSION['language'] ?? 'id'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['theme'] = $_POST['theme'];
    $_SESSION['notifications'] = $_POST['notifications'];
    $_SESSION['language'] = $_POST['language'];
    header('Location: pengaturan.php?success=1');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengaturan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body[data-theme="dark"] {
            background-color: #181c24;
            color: #e0e6ed;
            transition: background 0.3s, color 0.3s;
        }
        .setting-card {
            max-width: 500px;
            margin: 40px auto;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0,0,0,0.15);
        }
        .profile-header {
            background: linear-gradient(90deg, #0d6efd 60%, #6c63ff 100%);
            padding: 32px 0 24px 0;
            text-align: center;
            color: #fff;
        }
        .profile-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 4px solid #fff;
            margin-bottom: 12px;
            object-fit: cover;
            background: #fff;
        }
        .form-label i {
            margin-right: 8px;
            color: #0d6efd;
        }
        .btn-success {
            background: linear-gradient(90deg, #0d6efd 60%, #6c63ff 100%);
            border: none;
            transition: background 0.2s;
        }
        .btn-success:hover {
            background: linear-gradient(90deg, #0b5ed7 60%, #5548c8 100%);
        }
    </style>
</head>
<body data-theme="<?= htmlspecialchars($settings['theme']) ?>">
    <div class="setting-card card shadow">
        <div class="profile-header">
            <img src="https://ui-avatars.com/api/?name=User&background=0d6efd&color=fff" class="profile-avatar" alt="Avatar">
            <h5 class="mb-0">Akun Anda</h5>
            <small>Ubah pengaturan sesuai preferensi</small>
        </div>
        <div class="card-body">
            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success">Pengaturan berhasil disimpan!</div>
            <?php endif; ?>
            <form method="post" id="settingsForm">
                <div class="mb-3">
                    <label class="form-label"><i class="bi bi-palette"></i>Tema</label>
                    <select name="theme" class="form-select" id="themeSelect">
                        <option value="light" <?= $settings['theme'] === 'light' ? 'selected' : '' ?>>Terang</option>
                        <option value="dark" <?= $settings['theme'] === 'dark' ? 'selected' : '' ?>>Gelap</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label"><i class="bi bi-bell"></i>Notifikasi</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="notifications" id="notifOn" value="on" <?= $settings['notifications'] === 'on' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="notifOn">Aktif</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="notifications" id="notifOff" value="off" <?= $settings['notifications'] === 'off' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="notifOff">Nonaktif</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label"><i class="bi bi-translate"></i>Bahasa</label>
                    <select name="language" class="form-select">
                        <option value="id" <?= $settings['language'] === 'id' ? 'selected' : '' ?>>Indonesia</option>
                        <option value="en" <?= $settings['language'] === 'en' ? 'selected' : '' ?>>English</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success w-100"><i class="bi bi-save"></i> Simpan Pengaturan</button>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('themeSelect').addEventListener('change', function() {
            document.body.setAttribute('data-theme', this.value);
        });
    </script>
</body>
</html>