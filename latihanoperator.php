<?php
$a = 45;
$b = 28;
$c = 100;

$hasilPengurangan = $a - $b;
$hasilPembagian = $hasilPengurangan / $a;
$hasilPerkalian = $hasilPembagian * $c;
echo "Hasil Pengurangan = {$hasilPengurangan} <br>";
echo "Hasil Pembagian = {$hasilPembagian} <br>";
echo "Hasil Perkalian sisa kursi = {$hasilPerkalian} <br>";
echo "Hasil Perkalian sisa kursi = " . number_format($hasilPerkalian, 2) . "% <br>";
?>