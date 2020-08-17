<?php
session_start();
require('conn.php');

$username=$_POST['username'];
$password=$_POST['password'];
$password=$_POST['nama'];
$password=$_POST['email'];
$password=$_POST['alamat'];

if($username == "" || $password == ""){
    header("location:index.php?pesan=gagal");
    //Menghentikan proses kebawah
    exit;
}
//Mengubah password menjadi sha1
$password_new = sha1($password);

// Cari data ke dalam db dengan username dan password yang sama
$data = mysqli_query($mysqli,"select * from akun where username='$username' and password='$password_new'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:home.php");
}else{
	header("location:index.php?pesan=tidak_cocok");
}

?>


