<?php

$nilai=[
        ["judul" =>"Belajar PHP & MySQL untuk pemula", "penulis" => "Petanikode"],
        ["judul" =>"Tutorial PHP dari nol hingga mahir", "penulis" => "Dunia ilkom"],
        ["judul" =>"Membuat aplikasi web dengan PHP", "penulis" => "Jago koding"],
        ["judul" =>"Belajar android", "penulis" => "Programer"],
        ["judul" =>"Tutorial belajar mikrotik", "penulis" => "Dunia cyber"],
       ];

       echo "artikel<br>";
       echo "</br>";
       echo $nilai[2]['judul']." = ".$nilai[2]['penulis']."<br>";
       echo $nilai[4]['judul']. " = ".$nilai[3]['penulis'];


       ?>