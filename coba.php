<!DOCTYPE html>
<html>
    <head>
        <tittle></tittle>
</head>
<body>
  
        <h2>Perulangan</h2>
    <!-- form -->
    <form method = "POST" action="">
        <table>
            <tr>
               <td>Masukan angka</td>
                <td>:</td>
                <td><input type='text' name='angka'></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" value="KIRIM"></td>
</tr>
</table>
</form>
</body>
</html>
<!-- php -->
<?php
if(isset($_POST['simpan'])){
    $angka =$_POST['angka'];
    echo "BILANGAN TERBALIK :<br>";
    for($a=5; $a>=1; $a--){
        echo "$a ";
    }
    echo "<br>BILANGAN GENAP : <br>";
    for($x =2; $x <= 10; $x++){
        $x % 2 ==0;
        echo "$x ";
        $x++;

    }
    echo "<br>SEGITIGA SETENGAH :<br>";
    for ($a=5; $a>0;$a--){
        for($c=5;$c>=$a;$c--){
            echo "*";
     
       }
       echo "<br>";
}
$star=5;
echo "<br>SEGITIGA :<br>";
for($a=1; $a<=$star; $a++){
    for($c=$star; $c>=$a; $c-=1){
        echo "*";
    }
    echo "<br>";
}
$star=5;
echo "<br>SEGITIGA SAMA KAKI:<br>";
for($a=$star; $a>0; $a--){
    for($i=1; $i<=$a; $i++){
        echo "&nbsp";
    }
    for($a1=$star; $a1>=$a; $a1--){
        echo "*";
    }
    echo "<br>";
}
}

?>