<?php
session_start();
// jika sudah login, redirect ke dashboard
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.min.css" type="text/css">
</head>
<body>
    <style>
        body {
      background-image: url('img/hkBG.png');
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
    }
    #username, #password{
        border-color: rgba(18, 68, 77, 1);
    }
    #username:focus, #password:focus {
        border-color: navy;
        box-shadow: 0 0 5px rgba(17, 17, 175, 0.51);
        outline: none;
    }
    </style>
  <div class="container mt-5 bg-white border border-warning rounded p-4" style="max-width: 400px;">
    <h2>Masuk</h2>
    <?php if (!empty($_GET['error'])): ?>
      <div class="error"><?= htmlspecialchars($_GET['error']) ?></div>
    <?php endif; ?>
    <form action="authenticate.php" method="post" autocomplete="off">
      <label for="username">Username</label>
      <input id="username" name="username" type="text" class="w-100 rounded" autofocus>
        <br>
      <label for="password">Password</label>
      <input id="password" name="password" type="password" class="w-100 rounded" required>
        <br><br>
      <button type="submit">Login</button>
      <br>
      <br>

       <!-- <button type="submit">Daftar</button> -->
        <a class="btn" href="register.php">Register</a>
    </form>
  </div>
</body>
</html>