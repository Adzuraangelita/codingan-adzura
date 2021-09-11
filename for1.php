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
for($a=5; $a>=1; $a--){
    echo "$a <br>";
}
}
?>