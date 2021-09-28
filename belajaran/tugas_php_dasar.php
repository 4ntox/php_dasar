<?php

echo "Tugas materi PHP Dasar ";
echo "<br />";
echo "<br />";





// Luas Persegi

$s1 = 20;
$s2 = 20;

$luasPersegi = $s1*$s2;
echo "diketahui sisi1 = 20, sisi2 = 20, Hitunglah Luas Persegi (sisi x sisi) ?";
echo "<br />";
echo "Luas Persegi = ";
echo $luasPersegi;


echo "<br />";
echo "<br />";
echo "<br />";

// Luas Segitiga

$a = 5;
$t = 10;
define ("SPR",0.5);
$luasSegitiga = (SPR*$a*$t);
echo "diketahui Alas = 5,  Tinggi = 10, Hitunglah Luas Segitiga (1/2 x Alas x Tinggi) ?";
echo "<br />";
echo "Luas Segitiga = ";
echo $luasSegitiga;


echo "<br />";
echo "<br />";
echo "<br />";

// Luas Trapesium

$sisia = 10;
$sisib = 20;
$tinggi = 7;
define ("STG",0.5);
$luasTrapesium = STG * (($sisia + $sisib) * $tinggi);

echo "diketahui sisi a = 10, sisi b = 20, dan tinggi = 7, Hitunglah Luas trapesium (1/2 x ((sisi + sisi) x tinggi)) ?";
echo "<br />";
echo "Luas Trapesium = " ;
echo $luasTrapesium;

echo "<br />";
echo "<br />";
echo "<br />";


// Luas Permukaan Tabung
$diameter = 50;
$tgi = 66;
define ("HALF",0.5);
define ("PHI",3.14);
$r = HALF * $diameter;
$luasPermukaanTabung = PHI * ($r**2) * $tgi;
echo "diketahui diameter = 50, dan tinggi = 66, Hitunglah Luas Permukaan Tabung (22/7 x r2 x tinggi) ?";
echo "<br />";
echo "r = 1/2 x diameter = 1/2 x 50 = ";
echo $r;
echo "<br />";
echo "Jadi, Luas Permukaan Tabung = " ;
// echo $luasPermukaanTabung;
echo number_format ($luasPermukaanTabung,0,",",".");

echo "<br />";
echo "<br />";
echo "<br />";


// Luas Permukaan Bola

$diamet = 28;
define ("SBG",0.5);
define ("PHII",3.14);
$r = SBG * $diamet;
$luasPermukaanBola = 4 * PHII * ($r**2);
echo "Sebutir kelereng memiliki diameter 28 mm. Berapa luas permukaan bola tersebut (4 x 22/7 x r2) ?";
echo "<br />";
echo "r = 1/2 x diameter = 1/2 x 28 = ";
echo $r;
echo "<br />";
echo "Jadi, Luas Permukaan Bola = " ;
// echo $luasPermukaanBola;
echo number_format ($luasPermukaanBola,0,",",".");



?>


