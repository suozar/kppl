<?php
session_start();// memulai/membuat file Session
include ("library.php");// memanggil fungsi library
  
$link=koneksi_db();//membuat koneksi ke database
//menampung variabel yg dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];
  
//cek query
$cek = mysql_query("SELECT * FROM user WHERE email ='$email' AND password ='$password'");
  
if(mysql_num_rows($cek)==1){//jika ada yang cocok akan bernilai 1
$hasil=mysql_fetch_array($cek);
$_SESSION['id_user'] = $hasil['id_user'];// membuat variabel session['id_user']
$_SESSION['nama_depan'] = $hasil['nama_depan'];// membuat variabel session['nama_depan']
$_SESSION['nama_belakang'] = $hasil['nama_belakang'];// membuat variabel session['nama_belakang']
  
header("location:home.php");// jika sukses masuk ke home.php
}
else
{
header("location:gagallogin.php");// jika login gagal maka masuk ke halaman gagallogin.php
}
?>
