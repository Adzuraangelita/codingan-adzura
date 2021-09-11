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
<?php
if(isset($_POST['simpan'])){
    $angka =$_POST['angka'];
$star=5;
for($a=1; $a<=$star; $a++){
    for($c=$star; $c>=$a; $c-=1){
        echo "*";
    }
    echo "<br>";
}
}
?>
<!DOCTYPE html>
<html>
    <head> 
        <title>Form Pengulangan</title>
    </head>
    <body>
        <center>
<h2>Form Pengulangan</h2>
<form method="POST" action="">
    <table>
        <p>1. Deret Bilangan Ganjil</p>
        <p>2. Segitiga Sama Kaki Terbalik</p>
        <p>3. Deret Bilangan Kelipatan 3</p>
    <tr>
         <td>Pilih</td>
            <td>:</td>
            <td><input type="number" name="pilih"></td>
        </tr>
         <tr>
         <td>Masukkan Angka</td>
            <td>:</td>
            <td><input type="number" name="angka"></td>
        </tr>
        <tr>
    <td></td>
    <td></td>
<td>
<input type="submit" name="simpan" value="KIRIM"></td>
</tr>
        </table>
</form>