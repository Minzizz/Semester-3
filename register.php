<?php
// register.php
session_start();

// jika sudah login, redirect ke dashboard
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit;
}

// buat CSRF token sederhana jika belum ada
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// ambil pesan error/sukses dari query string (opsional)
$error = isset($_GET['error']) ? $_GET['error'] : '';
$success = isset($_GET['success']) ? $_GET['success'] : '';
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Daftar Akun</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.min.css" type="text/css">
  <style>
        body {
      background-image: url('img/hkBG.png');
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>
<body>
  <div class="container mt-5 bg-white border border-warning rounded p-4" style="max-width: 400px;">
    <h2>Buat Akun Baru</h2>

    <?php if ($error): ?>
      <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <?php if ($success): ?>
      <div class="success"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>

    <form action="register_process.php" method="post" autocomplete="off" novalidate>
      <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">

      <label for="username">Username</label><br>
      <input id="username" name="username" type="text" required minlength="3" maxlength="100" class="w-100 rounded">

      <label for="full_name">Nama Lengkap</label><br>
      <input id="full_name" name="full_name" type="text" maxlength="200" class="w-100 rounded">

      <label for="password">Password</label><br>
      <input id="password" name="password" type="password" required minlength="6" class="w-100 rounded">

      <label for="password_confirm">Konfirmasi Password</label><br>
      <input id="password_confirm" name="password_confirm" type="password" required minlength="6" class="w-100 rounded">

      <small>Minimal 6 karakter untuk password.</small>
      <br><br>
      <button type="submit">Daftar</button>
      &nbsp; <a href="login.php">Kembali ke Login</a>
    </form>
  </div>
</body>
</html>