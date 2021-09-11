<?php
$kelas = "XI";
$nilai = 76;

if($kelas =="X" || $kelas == "x")
{
    if($nilai >= 75 )
    {
      echo "Selamat anda lulus";
    }
    else
    {
      echo "Selamat anda tidak lulus";
    }
}
else if ($kelas == "XI" || $kelas == "xi" ) 
{
 if ($nilai >= 78) 
 {
     echo "Selamat anda lulus";
 }
  else 
  {
      echo "Selamat anda tidak lulus";
  }
}
else if ($kelas == "XII" || $kelas == "xii" ) 
{
 if ($nilai >= 80) 
 {
     echo "Selamat anda lulus";
 }
  else 
  {
      echo "Selamat anda tidak lulus";
  }
}
else 
{
    echo "Tidak ada kelas";
}
?>