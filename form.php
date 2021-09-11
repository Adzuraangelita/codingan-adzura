<!DOCTYPE html>
<html>
    <head>
        <title>Form Biodata Diri</title>
</head>
<body>
    <h2>Form Biodata Diri</h2>
    <form method = "POST" action="">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type='text' name='nama'></td>
</tr>
<tr>
    <td>Tempat lahir</td>
    <td>:</td>
    <td><input type='text' name='tempat' ></td>
</tr>
<tr>
    <td>Tanggal lahir</td>
    <td>:</td>
    <td><input type='date' name= 'tanggal'></td>
</tr>
<tr>
    <td>Jenis kelamin</td>
    <td>:</td>
    <td>
        
    <input type='radio' name='jenis' value='laki laki'>Laki-Laki
    <input type='radio' name='jenis' value='perempuan'>Perempuan
    
</td>

</tr>
<tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type='textarea' name='alamat'></td>
</tr>
<tr>
    <td>Agama</td>
    <td>:</td>
    <td>
    <select name ='agama'>
        <option value ='islam'>Islam</option>
        <option value ='kristen'>Kristen</option>
        <option value ='budha'>Budha</option>
        <option value ='hindu'>Hindu</option>
        <option value ='katolik'>Katolik</option>
</td>
</select>
</tr>
<tr>
    <td>Pendidikan terakhir</td>
    <td>:</td>
    <td>
    <select name ='pendidikan'>
        <option value ='sd'>SD</option>
        <option value ='SMP/MTS'>SMP/MTS</option>
        <option value ='SMK/SMA/MA'>SMK/SMA/MA</option>
        <option value ='kuliah'>Kuliah</option>
</td>
</select>
</tr>
<tr>
    <td>Status</td>
    <td>:</td>
    <td>
    <select name ='status'>
        <option value ='pelajar'>Pelajar</option>
        <option value ='sudah menikah'>Sudah Menikah</option>
        <option value ='tamat'>Tamat</option>
        <option value ='cerai'>Cerai</option>
</td>
</select>
</tr>
<tr>
    <td>Hobi</td>
    <td>:</td>
    <td>
    <input type = 'checkbox' name = 'hobi' value = 'membaca'>Membaca
    <input type = 'checkbox' name = 'hobi' value = 'menulis'>Menulis
    <input type = 'checkbox' name = 'hobi' value = 'Nonton film'>Nonton film
    <input type = 'checkbox' name = 'hobi' value = 'Mendengarkan musik'>Mendengarkan musik
</td>
</tr>
<tr>
    <td>Cita-cita</td>
    <td>:</td>
    <td>
    <select name ='cita'>
        <option value ='pramugari'>Pramugari</option>
        <option value ='programmer'>Programmer</option>
        <option value ='dokter'>Dokter</option>
        <option value ='polisi'>Polisi</option>
</td>
</select>
</tr>
<tr>
    <td>Kata-Kata bijak</td>
    <td>:</td>
    <td><input type='textarea' name='kata'></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" value='kirim'></td>
</tr>
</table>
</form>

</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $nama =$_POST['nama'];
    $tempat =$_POST['tempat'];
    $tanggal =$_POST['tanggal'];
    $jenis =$_POST['jenis'];
    $alamat =$_POST['alamat'];
    $agama =$_POST['agama'];
    $pendidikan =$_POST['pendidikan'];
    $status =$_POST['status'];
    $hobi =$_POST['hobi'];
    $cita =$_POST['cita'];
    $kata =$_POST['kata'];

   

    echo "======= Biodata Diri =============<br>";
    echo "==============================<br>";
    echo "Nama Lengkap &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= &nbsp&nbsp$nama<br>";
    echo "Tempat Lahir &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= &nbsp&nbsp$tempat<br>";
    echo "Tanggal Lahir &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= &nbsp&nbsp$tanggal<br>";
    echo "Jenis Kelamin &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= &nbsp&nbsp$jenis<br>";
    echo "Alamat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= &nbsp&nbsp$alamat<br>";
    echo "Agama &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= &nbsp&nbsp$agama<br>";
    echo "Pendidikan Terakhir &nbsp&nbsp&nbsp= &nbsp&nbsp$pendidikan<br>";
    echo "Status &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= &nbsp&nbsp$status<br>";
    echo "Hobi &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= &nbsp&nbsp$hobi<br>";
    echo "Cita - Cita &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp=&nbsp&nbsp $cita<br>";
    echo "Motivasi &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= &nbsp&nbsp$kata<br>";
    

}
?>