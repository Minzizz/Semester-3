<?php
require __DIR__ . '/koneksi.php';

$err = '';
$tahun = (int)($_GET['tahun'] ?? 0);

if ($tahun <= 0) {
    http_response_code(400);
    exit('tahun tidak valid.');
}

// Ambil data lama
try {
    $res = qparams('SELECT tahun_lulus, sekolah FROM public.tahunsekolah WHERE tahun_lulus=$1', [$tahun]);
    $row = pg_fetch_assoc($res);
    if (!$row) {
        http_response_code(404);
        exit('Data tidak ditemukan.');
    }
} catch (Throwable $e) {
    exit('Error: ' . htmlspecialchars($e->getMessage()));
}

$tahun_lulus = $row['tahun_lulus'];
$sekolah = $row['sekolah'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tahun_lulus = trim($_POST['tahun'] ?? '');
    $sekolah = trim($_POST['sekolah'] ?? '');

    if ($tahun_lulus === '' || $sekolah === '') {
        $err = 'Tahun Lulus dan Sekolah wajib diisi.';
    }else {
        try {
            qparams(
                'UPDATE public.tahunsekolah
                   SET tahun_lulus=$1, sekolah=$2
                 WHERE tahun_lulus=$3',
                [$tahun_lulus, $sekolah, $tahun]
            );
            header('Location: StaticWeb.php');
            exit;
        } catch (Throwable $e) {
            $err = $e->getMessage();
        }
    }
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Ubah Mahasiswa</title>
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
  <div class="container mt-5 bg-white border border-warning rounded p-4">
        <h2 class="mb-4">Insert Tahun dan Sekolah</h2>

        <?php if ($err) : ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($err); ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo htmlspecialchars($tahun); ?>">
            </div>
            <div class="mb-3">
                <label for="sekolah" class="form-label">Sekolah</label>
                <input type="text" class="form-control" id="sekolah" name="sekolah" value="<?php echo htmlspecialchars($sekolah); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>