<?php

//class utama
class bangundatar{
    public $luas;
  
}

class persegi extends bangundatar{ 
    public function luaspersegi($sisi){
        echo "Menghitung luas Persegi<br>";
        echo "Sisi =".$sisi;
        echo "<br>";
        $this->luaspersegi=$sisi*$sisi;
        echo "Luas =".$this->luaspersegi. "<br>" ;
        echo "Menghitung keliling persegi<br>";
        $this->persegi= 4*$sisi;
        echo "Keliling =" .$this->persegi;
        echo "<br><hr>";
        
}
}
class persegipanjang extends bangundatar{ 
    public function luaspersegipanjang($panjang,$lebar){
        echo "Menghitung luas Persegi Panjang<br>";
        echo "Panjang =".$panjang;
        echo "<br>";
        echo "Lebar =".$lebar;
        echo "<br>";
        $this->luaspersegipanjang=$panjang*$lebar;
        echo "Luas =".$this->luaspersegipanjang. "<br>";
        echo "Menghitung keliling Persegi Panjang<br>";
        $this->persegipanjang=2* $panjang+$lebar;
        echo "Keliling =".$this->persegipanjang;
        echo "<br><hr>";
        
}
}
class segitiga extends bangundatar{ 
    public function luassegitiga($alas,$tinggi){
        echo "Menghitung luas segitiga<br>";
        echo "Alas =".$alas;
        echo "<br>";
        echo "tinggi =".$tinggi;
        echo "<br>";
        $this->luassegitiga= 1/2*$alas*$tinggi;
        echo "Luas =".$this->luassegitiga ."<br>";
        echo "Menghitung keliling segitiga<br>";
        $this->segitiga=$alas*3;
        echo "Keliling = " .$this->segitiga;
        echo "<br><hr>"; 
    }
}
class lingkaran extends bangundatar{ 
    public function luaslingkaran($jari,$phi=3.14){
        echo  "Menghitung Luas lingkaran<br>";
        echo  "phi = $phi<br>";
        echo  "jari jari = $jari <br>";
      $this->luas= $phi* $jari *$jari;
      echo  "Luas = $this->luas <br>";
      echo "Menghitung keliling lingkaran<br>";
      $this->lingkaran= 2*$phi*$jari;
      echo "Keliling = $this->lingkaran";
      echo "<hr>";
    }
}
//instansiasi class teman
$luas= new persegi;
$luas->luaspersegi(6);
$luas1= new persegipanjang;
$luas1->luaspersegipanjang(6,5);
$luas2=new segitiga;
$luas2->luassegitiga(10,2);
$luas3=new lingkaran;
$luas3->luaslingkaran(2);