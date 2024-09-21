<?php
$skorPemain = 510;
echo"Total skor pemain adalah: $skorPemain <br>";
if ($skorPemain > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? Ya <br>";
}elseif($skorPemain < 500){
    echo "Apakah pemain mendapatkan hadiah tambahan? Tidak <br>";
}
?>