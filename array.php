<?php
$nilaiSiswa = [ 85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach($nilaiSiswa as $nilai){
    if($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: <br>" . implode(', ', $nilaiLulus);

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
$karyawanPengalamanLimaTahun = [];
foreach($daftarKaryawan as $karyawan){
    if ($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "<br> Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: <br>"
.implode(',',$karyawanPengalamanLimaTahun ) ;

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
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
$nilaiLulus = [];
$mataKuliah = 'Matematika';
echo "<br> Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach($daftarNilai[$mataKuliah] as $nilai){
    if($nilai[1] > 65){
        $nilaiLulus[] = $nilai;
}
}
if (!empty($nilaiLulus)) {
    echo "Daftar nilai siswa yang lulus: <br>";
    foreach ($nilaiLulus as $mahasiswaLulus) {
        echo "Nama: {$mahasiswaLulus[0]}, Nilai: {$mahasiswaLulus[1]}<br>";
    }
} else {
    echo "Tidak ada mahasiswa yang lulus.";
}
?>