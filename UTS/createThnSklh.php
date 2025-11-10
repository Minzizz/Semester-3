<?php
require __DIR__ . '/koneksi.php';

$err = $ok = '';
$tahun = $sekolah = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tahun = trim($_POST['tahun'] ?? '');
    $sekolah = trim($_POST['sekolah'] ?? '');

    if ($tahun === '' || $sekolah === '') {
        $err = 'Tahun dan Sekolah wajib diisi.';
    } else {
        try {
            qparams(
                "INSERT INTO tahunsekolah (tahun_lulus, sekolah) VALUES ($1, $2)",
                [$tahun, $sekolah]
            );

            header('Location: StaticWeb.php');
            exit;
        } catch (Throwable $e) {
            $err = "Gagal menyimpan data: " . $e->getMessage();
        }
    }
}
?>

<html>

<head>
    <title>Insert Data</title>
    <style>
        body {
            background-image: url('img/hkBG.png');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.min.css" type="text/css">
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