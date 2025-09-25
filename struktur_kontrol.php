<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <=100) {
    echo "Nilai huruf: A";
}elseif($nilaiNumerik>=80&&$nilaiNumerik<90){
    echo "Nilai huruf: B";
}elseif($nilaiNumerik >= 70 && $nilaiNumerik <80){
    echo "Nilai huruf: C";
}elseif($nilaiNumerik <70){
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
while ($jarakSaatIni < $jarakTarget) {
$jarakSaatIni += $peningkatanHarian;
$hari++;
}
echo "<br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i = 1; $i <= $jumlahLahan; $i++) {
$jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "<br>Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor) {
$totalSkor += $skor;
}
echo "<br>Total skor ujian adalah: $totalSkor";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
    echo "Nilai: $nilai (Tidak lulus) <br>";
    continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)";

$nilaiMTK = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$idxNilai = 0;
for ($i=0; $i < 2; $i++) { 
    $idxtemp=0;
    $idxtinggi=0;
    $tempNilaiTinggi=0;
    foreach($nilaiMTK as $nilairil){
    if($nilairil>$tempNilaiTinggi){
        $tempNilaiTinggi=$nilairil;
        $idxtinggi=$idxtemp;
    }
    $idxtemp++;
    }
    $nilaiMTK[$idxtinggi]=0;
}
for ($i=0; $i < 2; $i++) { 
    $idxtemp=0;
    $idxrendah=0;
    $tempNilaiRendah=100;
    foreach($nilaiMTK as $nilairil){
    if($nilairil<$tempNilaiRendah && $nilairil != 0){
        $tempNilaiRendah=$nilairil;
        $idxrendah=$idxtemp;
    }
    $idxtemp++;
    }
    $nilaiMTK[$idxrendah]=0;
}
$jumlahNilai = 0;
foreach($nilaiMTK as $nilairil){
    $jumlahNilai+=$nilairil;
}
$ratarataMTK = $jumlahNilai/6;
echo "<br>Rata-rata nilai MTK (mengabaikan 2 nilai tertinggi dan 2 nilai terendah) = {$ratarataMTK}";

$hargaProduk = 120000;
$diskon = 0.2;

if($hargaProduk>100000){
    $hargaProduk = $hargaProduk-($hargaProduk*$diskon);
}
echo "<br>Total harga = {$hargaProduk}";

$skor=902;
echo "Total skor pemain adalah: {$skor}<br>";

$menang = ($skor>500) ? "Anda menang" : "Anda kalah";

echo "Hasil terakhir menunjukkan bahwa: {$menang}"
?>