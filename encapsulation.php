<?php

//class manusia
class manusia{
    //prop
    //public $nama;
    //private $nama = "Adzura";
    protected function nama(){
      return "nama saya adzura angelita";
    }
    public function keluarkan(){
      return $this->nama();
    }
    // protected $nama ="malas ngoding";
    //  public function nama(){
    //  return "Nama saya "  . $this->nama;
    //  }
     // public function tampilkan_nama(){
     //   return $this->nama;
     // }
    }
    $manusia = new manusia();
    echo $manusia->keluarkan();
    //public function tampilkan_nama(){
       // return "Nama saya" .$this->nama;
    //}
    //public function output(){
       // echo $this->tampilkan_nama();
   // }
    //}
    //method manusia
    //public function tampilkan_nama(){
      //  echo "Nama saya zura <br/>";
    //}
    //public function biodata(){
      //  echo $this->tampilkan_nama();
    //}
    

//instansiasi class manusia
//$manusia = new manusia();
 
//memanggil method tampilkan_nama dari class manusia
//echo $manusia->output();
?>