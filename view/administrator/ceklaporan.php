<?php
require '../../koneksi.php';
$query = "SELECT * FROM pengaduan";
$pengaduan = mysqli_query($conn,$query);

$data = [];
while ($pgdn = mysqli_fetch_assoc($pengaduan)) {
    $data[] = $pgdn;
}
// var_dump($data);
$_pengaduan = $data;
// var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek laporan</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tanggal Pengaduan</th>
            <th>Isi</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach($_pengaduan as $item) { ?>
        <tr>        
            <td><?= $i++ ?></td>
            <td><?= $item['tgl_pengaduan'] ?></td>
            <td><?= $item['isi_laporan'] ?></td>
            <td>
            <a href="tanggapan.php" class="btn btn-succes btn-sm">tanggapi</a>
            </td>
    
        </tr>
        <?php } ?>
    </table>
    <script src="../../assets/js/bootstrap.min.js"></script>
</body>

</html>