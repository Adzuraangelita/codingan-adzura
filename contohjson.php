<?php
//--parsing json ke dalam objek php
//$json = '{
 // "nama": "Nurul Huda",
 // "domisili": "Surabaya",
 // "usia": 23,
  //"wni": true,
  //"hobi": [
   // "Berenang", "Berlari", "Bertamasya"
 // ]
//}';

//$mahasiswa = json_decode($json);

//echo "Nama: {$mahasiswa->nama} <br>";
//echo "Domisili: {$mahasiswa->domisili} <br>";

//echo "Hobi: " . implode(", ", $mahasiswa->hobi);

//--array terindeks

//$nilaiUjian = [70, 80, 50, 90];
//echo json_encode($nilaiUjian);

//--perulangan json


$listMahasiswaJSON = '[
  { "nama": "Nurul Huda" },
  { "nama": "Renza Ilhami Risqi" },
  { "nama": "Taufan Aji" },
  { "nama": "Rahmad Dwi Oktanto" }
]';

$listMahasiswa = json_decode($listMahasiswaJSON);

foreach ($listMahasiswa as $key => $mahasiswa) {
  echo "{$key}. Nama: {$mahasiswa->nama} <br>";
}
//--kesimpulan
//JSON adalah struktur data bawaan dalam bahasa pemrograman javascript.
 //Akan tetapi karena ia memiliki struktur yang sederhana dan mudah, 
 //ia dijadikan sebagai standar untuk perturakan data antar 2 aplikasi yang berbeda bahkan antar 2 bahasa pemrograman yang berbeda.
//Dalam PHP: kita bisa mem-parsing JSON dengan perintah json_decode dan kita bisa membuat JSON dengan perintah json_encode.
?>
