<!DOCTYPE html>
<html>
    <head>
        <tittle></tittle>
</head>
<body>
    <h2>Switch case</h2>
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

    switch ($angka) {
        case 1:
            echo "Isi variabel angka satu";
            break;
        case 2:
             echo "Isi variabel angka dua";
             break;
         case 3:
             echo "Isi variabel angka tiga";
             break;
         case 4:
             echo "Isi variabel angka empat";
             break; 
         case 5:
             echo "Isi variabel angka lima";
             break;
         case 6:
             echo "Isi variabel angka enam";
             break;
         default :
             echo "Isi variabel tidak ditemukan";
             break;      
    }
}
?> 