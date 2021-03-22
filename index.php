<?php

//memulai session 
session_start();
//menghubungkan ke file koneksi
require 'koneksi.php';

//tombol submit ditekan
if(isset($_POST['submit'])){
    //dapatkan data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//get data
$acount = mysqli_query($conn,"SELECT * FROM masyarakat WHERE username ='$username'");

//cek username
if(mysqli_num_rows($acount) === 1){
    $data = mysqli_fetch_assoc($acount);
    if($password == $data['password']){
        //create session
        $_SESSION['login'] = true;
        $_SESSION['nik'] = $data['nik'];
        $_SESSION['level'] = '';
        $_SESSION['username'] = $data['username'];

        //pindah halaman
        header('location:view/masyarakat/index.php');

        exit;
    }
}

}else if(isset($_POST['registrasi'])){
    header('location:view/masyarakat/registrasi.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Custom fonts for this template-->
    <!-- <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom styles for this template-->
    <!-- <link href="assets/css/sb-admin-2.min.css" rel="stylesheet"> -->
</head>
<body class="bg-gradient-primary">

<div class="container">

<div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
    <div class="card-body p-0">
        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                    </div>
                    <form class="registrasi" method="post" action="">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="inputUsername" placeholder="Username" name="username">
                             </div>
                             <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                                                                    </div>
                            <button name="submit" type="submit" class="btn btn-primary form-control">LOGIN</button>
                            </form>
                            <hr>
                            <div class="text-center">
                            <a class="small" href="view/masyarakat/registrasi.php">Registrasi</a>
                            <br>
                            <a class="small" href="view/administrator/login.php">Login Sebagai Admin</a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
    
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>