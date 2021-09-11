<?php
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang) 
{
$umur = $thn_sekarang - $thn_lahir;
return $umur;

}
function perkenalan ($nama, $salam = "Assalamualaikum")
{
    echo $salam . ",  ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    //mrngambil fungsi lain
    echo "Saya berusia " . hitungUmur(2003, 2021) . " tahun <br/>";
    echo "senang berkenalan dengan anda <br/>";
}
//memanggil fungsi perkenalan
echo perkenalan("Adzura");