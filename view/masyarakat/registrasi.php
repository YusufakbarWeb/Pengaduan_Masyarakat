<?php

//menguhubungkan ke file function.php
require '../../function.php';

//submit
if(isset($_POST['submit'])){
    if(daftar($_POST) > 0){
        header('location:../../index.php');
    }else{
        //error
        echo mysqli_error($conn);
    }
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
<body class="bg-gradient-primary">
<div class="container">

<div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
    <div class="card-body p-0">
        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru</h1>
                    </div>
                    <form class="registrasi" method="post" action="">
                        <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama" placeholder="Nama Anda" name="nama" required autofocus>
                                                            </div>
                        <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="username" placeholder="Username Anda" name="username" required>
                                                            </div>
                        <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nik" placeholder="NIK Anda" name="nik" required>
                                                            </div>
                        <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="telephone" placeholder="no.Telp Anda" name="telephone" required>
                                                            </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="password2" placeholder="Ulangi Password" name="password2">
                            </div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>


                        <div class="text-center">
                            <a class="small" href="../../index.php">Sudah Punya Akun? Silahkan Login!</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<script src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>