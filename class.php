<?php
//class
//class laptop{
    //property/atribut
    //var $pemilik;
    //var $merk;
    //var $ukuran_layar;

    //method/ function
    //function hidupkan_laptop(){
      //  return "hidupkan laptop";
        //... isi dari method hidupkan_laptop
   // }
   // function matikan_laptop(){
     //   return "matikan laptop";
        //...isi dari matikan_laptop
   // }
    //isi dari class laptop
//}
//$laptop_andi = new laptop();
//echo $laptop_andi->hidupkan_laptop();
//echo "<br>";
//echo $laptop_andi->matikan_laptop();

class bunga{
    var $warna;
    var $jenis;
    var $ciri_khas;

    function jenis_bunga($jenis){
        return $jenis;
        
    }
    //function warna(){
       // return "Warna bunga adalah merah";
    //}
    //function ciri_khas(){
    //    return "Ciri khas bunga cantik dan indah";
   // }
}
$bungaa = new bunga();

//$bungaa->warna="MERAH";
//$bungaa->jenis="MAWAR";
//$bungaa->ciri_khas="CANTIK & INDAH";

//echo "Warna bunga " . $bungaa->warna;
//echo "<br>";
//echo "Jenis bunga  " . $bungaa->jenis;
//echo "<br>";
//echo "Ciri khas bunga  " . $bungaa->ciri_khas;
echo $bungaa->jenis_bunga("BUNGA MAWAR !");
//echo "<br>";
//echo $bungaa->warna();
//echo "<br>";
//echo $bungaa->ciri_khas();

?>
