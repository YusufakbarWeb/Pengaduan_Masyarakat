<?php

require '../../koneksi.php';

// if($_SESSION['level'] != 'masyarakat'){
//     header('location:../')
// }

echo $_POST['laporan'];
var_dump($_FILES['foto']);
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
        <input type="submit" value="Laporkan">
    
    </form>
</body>
</html>