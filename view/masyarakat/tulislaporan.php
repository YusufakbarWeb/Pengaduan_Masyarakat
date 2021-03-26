<?php

require '../../koneksi.php';
session_start();

if(isset($_POST['Laporkan'])){
    // var_dump($_POST);
    $directoryimage = '../../assets/image/';
    $deletespacefromimage = str_replace(' ','',$_FILES['foto']['name']);
    $imageLocation = $directoryimage.$deletespacefromimage;
    
    move_uploaded_file($_FILES['foto']['tmp_name'],$imageLocation);
    
    $query = "INSERT INTO pengaduan(tgl_pengaduan, nik, isi_laporan, foto, status) VALUES
    (now(),
    '".$_SESSION["nik"]."',
    '".$_POST["laporan"]."',
    'pengaduan_masyarakat/assets/image/".$_FILES['foto']['name']."',
    NULL);";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="tulislaporan">Laporan</label>
        <br>
        <textarea name="laporan" id=""></textarea>
        <br>
        <label for="foto">Foto/Gambar</label>
        <br>
        <input type="file" name="foto" id="">
        <br>
        <input type="submit" value="Laporkan" name="Laporkan">
        <a href="index.php">Batal</a>
    
    </form>
</body>
</html>