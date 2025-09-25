<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Var a + Var B (Jumlah)= {$hasilTambah} <br>";
echo "Var a - Var B (Kurang)= {$hasilKurang} <br>";
echo "Var a * Var B (Kali)= {$hasilKali} <br>";
echo "Var a / Var B (Bagi)= {$hasilBagi} <br>";
echo "Var a % Var B (Sisa Bagi)= {$sisaBagi} <br>";
echo "Var a ** Var B (Pangkat)= {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Var a == Var b? {$hasilSama}<br>";
echo "Var a != Var b? {$hasilTidakSama}<br>";
echo "Var a < Var b? {$hasilLebihKecil}<br>";
echo "Var a > Var b? {$hasilLebihBesar}<br>";
echo "Var a <= Var b? {$hasilLebihKecilSama}<br>";
echo "Var a >= Var b? {$hasilLebihBesarSama}<br>";

$hasiland = $a && $b;
$hasilor = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Var a %% Var b {$hasiland}<br>";
echo "Var a || Var b {$hasilor}<br>";
echo "Not Var a {$hasilNotA}<br>";
echo "Not Var b {$hasilNotB}<br>";

echo "$a += $b <br>";
$a += $b;
echo "Var a = {$a}<br>";
echo "$a -= $b <br>";
$a -= $b;
echo "Var a = {$a}<br>";
echo "$a *= $b <br>";
$a *= $b;
echo "Var a = {$a}<br>";
echo "$a /= $b <br>";
$a /= $b;
echo "Var a = {$a}<br>";
echo "$a %= $b <br>";
$a %= $b;
echo "Var a = {$a}<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah var a dan var b Identik? $hasilIdentik <br>";
echo "Apakah var a dan var b Tidak Identik? $hasilTidakIdentik<br>";

echo "Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. Berapa persen kursi yang masih kosong di restoran tersebut?";
$banyakKursi = 45;
$kursiDitempati = 28;

$persentaseKursiKosong = (($banyakKursi-$kursiDitempati)/$banyakKursi)*100;

echo "<br>Persen kursi yang masih kosong adalah {$persentaseKursiKosong}%"
?>