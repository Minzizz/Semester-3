<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d + $c;

echo "variable a: {$a} <br>";
echo "variable a: {$b} <br>";
echo "variable a: {$c} <br>";
echo "variable a: {$d} <br>";
echo "variable a: {$e} <br>";

var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$ratarata = ($nilaiBahasaIndonesia * $nilaiIPA * $nilaiMatematika)/3;

echo "<br>Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$ratarata} <br>";

var_dump($ratarata);
echo"<br>";
$apakahSiswaLulus = true;
$apakahSiswaSudahLulus = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahLulus);

$namaDepan = "Ibnu";
$namaBelakang = "Jakarta";

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "<br>Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>