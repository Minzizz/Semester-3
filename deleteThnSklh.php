<?php
require __DIR__ . '/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

$tahun = (int)($_POST['tahun'] ?? 0);
if ($tahun <= 0) {
    http_response_code(400);
    exit('Tahun tidak valid.');
}

try {
    qparams('DELETE FROM public.tahunsekolah WHERE "tahun_lulus"=$1', [$tahun]);
    header('Location: StaticWeb.php#artikel1');
    exit;
} catch (Throwable $e) {
    http_response_code(500);
    echo 'Gagal menghapus: ' . htmlspecialchars($e->getMessage());
}
?>

<html>
    <head>
        <title>Delete Data</title>
    </head>
    <body>
        <h2>Hapus Data Tahun dan Sekolah</h2>
        <form method="POST" action="deleteThnSklh.php">
    </body>
</html>