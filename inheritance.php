<?php
// class parent
class manusia{
    protected $teman = "maudy";
 public function persegi(){
     echo "Nama saya Adzura<br>";
 }
}
 
 
// class turunan
class teman extends manusia{
 
 	// method pada class teman
	public function berinamateman(){
        
		echo "Nama teman saya " .$this->teman;
	}
}
 
// instansiasi class teman
$malasngoding = new teman;
 
$malasngoding->berinamateman();
 ?>