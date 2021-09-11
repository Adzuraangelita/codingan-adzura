<?php
//$mahasiswa = [
    //'nama'=> 'nurul huda',
    //'domisili' =>'surabaya'
//];
//echo json_encode($mahasiswa);
//$nilaiUjian = [70, 80, 50, 90];
//echo json_encode($nilaiUjian);

$listMahasiswaJSON = '[
    { "nama": "Nurul Huda" },
    { "nama": "Renza Ilhami Risqi" },
    { "nama": "Taufan Aji" },
    { "nama": "Rahmad Dwi Oktanto" }
  ]';
  // dikonversikan ke json
  $listMahasiswa = json_decode($listMahasiswaJSON);
  //tampilkan  datanya
  foreach ($listMahasiswa as $key => $mahasiswa) {
    echo "Nama ke - {$key} : {$mahasiswa->nama} <br>";
  }
?>