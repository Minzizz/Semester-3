<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilaiSiswa >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<br>Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(
    ', ',
    $karyawanPengalamanLimaTahun
);
echo "<br>";
$daftarNilai = [
    'Matermatika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];


foreach ($daftarNilai as $mataKuliah => $value) {
    echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
    foreach ($value as $nilai) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
}
echo "<br>";
$nilaiMTK = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;

foreach($nilaiMTK as $nilai){
    $totalNilai += $nilai[1];
}

$rata2 = $totalNilai/count($nilaiMTK);

$siswaLulus = [];

foreach($nilaiMTK as $siswa){
    if ($siswa[1] > $rata2) {
        $siswaLulus[] = $siswa[0];
    }
}

echo "Daftar siswa di atas rata-rata kelas adalah: " . implode(', ', $siswaLulus);
?>