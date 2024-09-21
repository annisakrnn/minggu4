<?php
$harga = 120000;
$diskon = 20/100;

$totalHargaDiskon = $harga * $diskon;
$totalPembayaran = $harga-$totalHargaDiskon;
echo "Total Pembayaran = $totalPembayaran<br>";
?>