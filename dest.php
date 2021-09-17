<?php

class manusia {
    function __destruct(){
        echo "Ini adalah isi method destruct";
    }
    function nama(){
    echo "<br> Nama : Adzura angelita <br>";
    }
    function __construct(){
        echo "ini adalah method construct ";
    }
}

$cetak = new manusia();

echo $cetak->nama();
?>