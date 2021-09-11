<?php 

function luasLingkaran($jari,$phi=3.14)
{
    $luas = $phi * $jari * $jari;
    return $luas;
}

function luassegitiga($alas,$tinggi)
{
    $luas=($alas*$tinggi)/2;
    return $luas;
}
function luasPersegi($panjang,$lebar,$tinggi)
{
    $luas=$panjang*$lebar*$tinggi;
    return $luas;
}
echo "Luas lingkaran : " .luasLingkaran(20);
echo "<br>";
echo "Luas Segitiga : " . luassegitiga(10,4);
echo "Luas persegi panjang : " .luasPersegi(40);
echo "<br>";
?>