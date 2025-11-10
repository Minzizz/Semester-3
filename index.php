<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
$host = 'localhost';
$port = '5433';
$user = 'postgres';
$pass = 'Azizsudjud101';
$dbname = 'dataDiri';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");

if (!$conn) {
  die("Connection failed: " . pg_last_error());
}
$sql = 'select
        "tahun_lulus" as "Tahun",
        "sekolah" as "Sekolah"
    from "tahunsekolah"
    order by "tahun_lulus"';

$result = pg_query($conn, $sql);
if (!$result) {
  die("Error in SQL query: " . pg_last_error());
}
?>
<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.min.css" type="text/css">
  <title>First Static Website</title>
  <style>
    body {
      background-image: url('img/hkBG.png');
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
  <script src="bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      $("nav a").on("click", function(e) {
        e.preventDefault();
        $("article").hide();
        const target = $(this).attr("href");
        $(target).fadeIn();
        $("nav a").removeClass("active");
        $(this).addClass("active");
      });
      const audio = document.getElementById('hoverAudio');
      const img = document.querySelector('#hoverImage img');

      img.addEventListener('click', () => {
        audio.currentTime = 0;
        audio.play();
      });
    });
  </script>
</head>

<body class="container-fluid">

  <nav class="navbar navbar-expand-sm bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand active" href=""><img src="img/header2.png" alt="Img Header"
          style="width: 50px; padding-bottom: 7px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#artikel1">Riwayat Pendidikan</a></li>
              <li><a class="dropdown-item" href="#artikel2">Prestasi</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <a href="logout.php" class="btn btn-success rounded">
        Logout <img src="img/patpatYharon.gif" alt="patpatYharon" style="width: 25px; padding-bottom: 7px;">
      </a>

    </div>
  </nav>

  <header>
    <div class="d-flex justify-content-center" style="margin-top : 50px;"><img src="img/header.png" alt="Img Header"
        style="height: 120px;"></div>
  </header>
  <main class="container mt-4 mb-4 ps-0 pe-0">
    <div class="sidebar bg-light p-2 border-start rounded-start-2">
      <h4>Sidebar</h4>
      <ul class="list-unstyled">
        <li><a href="https://calamitymod.wiki.gg/" target="_blank" class="btn btn-danger">Wiki Calamity</a></li>
        <li><a href="dataDiri.html" class="btn btn-success" style="margin-top: 10px;">WOW</a></li>
    </div>
    <article id="beranda" class="border border-warning bg-white bg-opacity-75 mb-4 p-3 border rounded">
      <h2 class="p-1 bg-white border border-primary">Selamat Datang di Profil Saya</h2>
      <p class="d-flex p-2 bg-white border border-primary">Nama saya adalah Amin Aziz Sudjud. Di sini saya sebagai
        mahasiswa POLINEMA</p>
      <div class="infobox bg-white border border-primary p-2">
        <strong>Info Singkat:</strong>
        <p>Saya masuk POLINEMA sejak tahun 2024, sekarang berada di semester 3 dan saya berada di kelas TI2D.</p>
      </div>
    </article>

    <article id="artikel1" class="border border-warning bg-white bg-opacity-75 mb-4 p-3 border rounded">
      <h2 class="p-1 bg-white border border-primary">Riwayat Pendidikan</h2>
      <div class="d-flex p-2 bg-white border border-primary ">
        <p>Saya sekolah dari dari SD di Bogor.</p>
      </div>
      <br>
      <div class="d-flex p-2 bg-white border border-primary  position-relative">

        <table class="table align-middle w-100">
          <thead>
            <tr>
              <th>Tahun</th>
              <th class="ps-2">Sekolah</th>
              <th class="text-end"></th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php while ($row = pg_fetch_assoc($result)) : ?>
              <tr>
                <td><?= htmlspecialchars($row['Tahun'], ENT_QUOTES, 'utf-8'); ?></td>
                <td class="ps-2"><?= htmlspecialchars($row['Sekolah'], ENT_QUOTES, 'utf-8'); ?></td>
                <td class="text-end">
                  <form action="editThnSklh.php" method="GET" class="d-inline">
                    <input type="hidden" name="tahun" value="<?= htmlspecialchars($row['Tahun']); ?>">
                    <button type="submit" class="btn btn-warning btn-sm">
                      Edit
                    </button>
                  </form>
                  <form action="deleteThnSklh.php" method="POST">
                    <input type="hidden" name="tahun" value="<?= htmlspecialchars($row['Tahun']); ?>">
                    <button type="submit" class="btn btn-danger btn-sm">
                      Hapus
                    </button>
                  </form>
                </td>
              </tr>
            <?php $i++;
            endwhile; ?>
            </form>
          </tbody>
        </table>
        <a class="btn btn-success btn-sm position-absolute top-1 end-0 me-3" id="tambahBtn" href="createThnSklh.php">
          <strong>+ Tambah</strong>
        </a>
      </div>
    </article>

    <article id="artikel2" class="border border-warning bg-white bg-opacity-75 mb-4 p-3 border rounded">
      <h2 class="p-1 bg-white border border-primary">Prestasi</h2>
      <p class="p-1 bg-white border border-primary">Ini adalah prestasi yang saya dapatkan selama ini</p>
      <div class="p-1 bg-white border border-primary"></div>
    </article>

    <style>
      .sidebar {
        position: fixed;
        top: 102px;
        right: 0;
        height: 80vh;
        width: 20px;
        background-color: #212529;
        transition: width 0.3s ease;
        overflow: hidden;
        z-index: 1000;
      }

      .sidebar:hover {
        width: 220px;
      }

      article {
        margin-right: 20px;
        transition: margin-right 0.3s ease;
      }

      .sidebar:hover~article {
        margin-right: 220px;
      }
    </style>
  </main>

  <footer class="d-flex justify-content-center border border-warning bg-white rounded-top p-2 position-relative"
    style="margin-bottom: 0%; height: 80px;">
    <p class="mb-0">© Halaman Punya Sendiri.</p>
    <a href="https://www.newgrounds.com/art/view/lecorpy/the-devourer-of-gods-dancing" target="_blank">
      <img src="img/dancingDog.gif"
        alt="dancingDog"
        class="position-absolute top-0 start-0"
        style="width: 50px;">
    </a>
    <a href="https://www.reddit.com/r/CalamityMod/comments/132ma9m/i_havent_played_terraria_but_my_friend_does_and/" target="_blank">
      <img src="img/dancingYharon.gif"
        class="position-absolute top-50 start-50 translate-middle-x"
        alt="dancingYharon"
        style="width: 60px;">
    </a>
    <div id="hoverImage">
      <img src="img/dancingOmen.gif"
        alt="dancingOmen"
        class="position-absolute top-0 end-0"
        style="width: 60px; cursor:pointer;">
    </div>
  </footer>
</body>

</html>