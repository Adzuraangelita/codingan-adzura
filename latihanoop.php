
<?php

class penggajihan{
public $totalgaji;
public $totalpengeluaran;
 
    
  public function gaji($jabatan,$pendidikan){
      echo "<table>";
      echo "<b>Pendapatan</b><br>";
      if($jabatan == "Direktur"){
        $gaji = 10000000;
        echo "<tr>";
        echo "<td>jabatan : $jabatan<br></td>";
        echo "</tr>";
         echo "<tr>";
        echo "<td>gaji : Rp.$gaji<br></td>";
        echo "</tr>";
    }
    
    else if($jabatan == "Manager"){
        $gaji = 5000000;
        echo "<tr>";
        echo "<td>jabatan</td> <td>:</td> <td>$jabatan<br></td>";
        echo "</tr>";
         echo "<tr>";
        echo "<td>gaji</td> <td>:</td> <td>Rp.$gaji<br></td>";
        echo "</tr>";
    
        
    }
    else if($jabatan == "Karyawan"){
        $gaji = 3000000;
        
        echo "<tr>";
        echo "<td>jabatan : $jabatan<br></td>";
        echo "</tr>";
         echo "<tr>";
        echo "<td>gaji : Rp.$gaji<br></td>";
        echo "</tr>";
        
    }else {
        
        echo "ERROR";
        
    }
      echo "<tr>";
        
        echo "</tr>";
        if($pendidikan == "S1"){
            $tunjangan = 2000000;
           
            echo "<td>Pendidikan <td>:</td> $pendidikan</td><br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tunjangan <td>:</td> Rp.$tunjangan</td><br>";
            echo "</tr>";
        }
        else if($pendidikan == "SMP"){
            $tunjangan = 500000;
            echo "<tr>";
            echo "<td>Pendidikan</td> <td>:</td> <td>$pendidikan</td></br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tunjangan</td>  <td>:</td> <td>Rp.$tunjangan</td><br>";
            echo "</tr>";
        }
        else if($pendidikan == "SMK"){
            $tunjangan = 1000000;
            echo "<tr>";
            echo "<td>Pendidikan <td>:</td> $pendidikan</td></br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tunjangan <td>:</td> Rp.$tunjangan<br></td>";
            echo "</tr>";
        }
      $this->totalgaji=$gaji+$tunjangan;
      echo "<tr>";
      echo "<td>Total Gaji </td>
      <td>:</td> <td> $this->totalgaji <br></td>";
      echo "</tr>";
      echo "</table>";
     echo "<hr>";
  }


    public function pengeluaran($listrik,$kontrakan,$kendaraan){
        echo "<table>";
        echo "<b>Pengeluaran</b></br>";
        echo "<tr>";
        echo "<td>Bayar listrik</td> 
        <td>:</td> <td>$listrik<br></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Bayar kontrakan </td>
        <td>:</td> <td>$kontrakan<br></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Cicilan Kendaraan</td>
        <td> : </td> <td>$kendaraan<br></td>";
        echo "</tr>";
        echo "<tr>";
        $this->totalpengeluaran = $listrik+$kontrakan+$kendaraan;
        echo "<tr>";
        echo "<td>Total Bayar</td>
        <td>:</td> 
        <td>$this->totalpengeluaran </td><br>";
        echo "</tr>";
        echo "</table>";
        echo "<hr>";
    }
  
 function sisa(){
     $total= $this->totalgaji-$this->totalpengeluaran;
     echo "<b>Sisa : $total</b>";
    
 }
}
$oop = new penggajihan();
echo $oop->gaji("Manager","SMP");
echo $oop->pengeluaran(200000,1000000,600000);
echo $oop->sisa();
?>