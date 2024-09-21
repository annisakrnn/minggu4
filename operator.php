<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Variabel a {$a} <br>";
echo "Variabel b {$b} <br>";
echo " hasil tambah a + b: {$hasilTambah} <br>";
echo " hasil kurang a - b: {$hasilKurang} <br>";
echo " hasil kali a * b: {$hasilKali} <br>";
echo " hasil bagi a / b: {$hasilBagi} <br>";
echo " sisa bagi  a % b: {$sisaBagi} <br>";
echo " pangkat a ** b: {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
$hasilPenjumlahan = $a += $b;
$hasilPengurangan = $a -= $b;
$hasilPerkalian = $a *= $b;
$hasilPembagian = $a /= $b;
$hasilModulus = $a %= $b;
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "hasil Sama a == b: {$hasilSama} <br>";
echo "hasil Tidak Sama a != b: {$hasilTidakSama} <br>";
echo "hasil Lebih Kecil a < b: {$hasilLebihKecil} <br>";
echo "hasil Lebih Besar a > b: {$hasilLebihBesar} <br>";
echo "hasil Lebih Kecil Sama a <= b: {$hasilLebihKecilSama} <br>";
echo "hasil Lebih Besar Sama a >= b: {$hasilLebihBesarSama} <br>";
echo "hasil Lebih Besar Sama a >= b: {$hasilLebihBesarSama} <br>";
echo "hasil dari operator logika tersebut adalah a && b: {$hasilAnd} <br>";
echo "hasil dari operator logika tersebut adalah a || b: {$hasilOr} <br>";
echo "hasil dari operator logika tersebut adalah !a: {$hasilNotA} <br>";
echo "hasil dari operator logika tersebut adalah !b: {$hasilNotB} <br>";
echo "hasil Penjumlahan a += b: {$hasilPenjumlahan} <br>";
echo "hasil Pengurangan a -= b: {$hasilPengurangan} <br>";
echo "hasil Perkalian a * b: {$hasilPerkalian} <br>";
echo "hasil Pembagian a / b: {$hasilPembagian} <br>";
echo "hasil Modulus a % b: {$hasilModulus} <br>";
echo "hasil Identik a === b: {$hasilIdentik} <br>";
echo "hasil Tidak Identik a !== b: {$hasilTidakIdentik} <br>";
?>