<?php
require 'koneksi.php';

function daftar($data){
    global $conn;
    $nik = $data['nik'];
    $nama = $data['nama'];
    $username = $data['username'];
    $telephone = $data['telephone'];
    $password = $data['password'];
    $password2 = $data['password2'];

    //menge-cek akun
    $cek = mysqli_query($conn,"SELECT * FROM masyarakat WHERE username ='$username'");
    if(mysqli_fetch_all($cek)){
        echo "<script> alert('Akun telah terdaftar')</script>";
        return false;
    }

    //menge-cek password
    if($password != $password2){
        echo "<script> alert('Password tidak sama')</script>";
    }

    $sql = "INSERT INTO masyarakat(nik,nama,username,password,telp) VALUES ('$nik','$nama','$username','$password','$telephone')";
    $execute = mysqli_query($conn,$sql);

    header('location:../../index.php');
}


?>