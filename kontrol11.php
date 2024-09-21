<?php
$nilaiUjian = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiUjian);
$totalNilai = 0;
$jumlahNilai = 0;

for ($i = 2; $i < count($nilaiUjian) - 2; $i++) {
    $totalNilai += $nilaiUjian[$i];
    $jumlahNilai++;
}
$rataRata = $totalNilai / $jumlahNilai;
echo "jumlah nilai = $totalNilai<br>";
echo "jumlah rata-rata = $rataRata<br>";
?>