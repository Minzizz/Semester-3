<?php
function perkenalkan($nama,$salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/> ";
    echo "Senang berkenalan dengan adna<br/>";
}
perkenalkan("Hamdana","Halo");

echo"<hr/>";

$saya = "Elok";
$ucapanSalam="Selamat pagi";

perkenalkan($saya);
?>