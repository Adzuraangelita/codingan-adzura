<?php

class manusia {
    function __construct(){
        echo "Ini adalah isi method construct <br/>";
    }
    function tampilkan_nama(){
        return " Nama : Adzura angelita <br/>";
    }
    function kelas(){
        return " Kelas : XII RPL 1 <br/>";
    }
    function hobi(){
        return " Hobi : Mendengarkan musik <br/>";
    }
}

$manusia = new manusia();

echo $manusia->tampilkan_nama();
echo $manusia->kelas();
echo $manusia->hobi();
?>