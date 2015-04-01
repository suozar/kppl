<?php
session_start();//memulai dan menggunakan variabel session
$id_user=$_SESSION['id_user'];//mengisi id_user yang login
  
//mengambil isi variabel yang di POST dari form ganti password
$password=$_POST['password'];
$password_baru=$_POST['password_baru'];
$password_baru_ulang=$_POST['password_baru_ulang'];
  
//validasi jika isi kosong
if (empty($_POST['password'])) die ("<script>alert('Anda Belum Mengisikan Password');window.location='javascript:history.go(-1)';</script>");
if (empty($_POST['password_baru'])) die ("<script>alert('Anda Belum Mengisikan Password Baru');window.location='javascript:history.go(-1)';</script>");
if (empty($_POST['password_baru_ulang'])) die ("<script>alert('Anda Belum Mengisikan Ulangi Password Baru');window.location='javascript:history.go(-1)';</script>");
  
include"library.php";//gunakan library
 
$link=koneksi_db();//membuat koneksi ke database
$query=mysql_fetch_array(mysql_query("select * from user where id_user='$id_user'",$link));
$password_user=$query['password'];//menyimpan password user yg asli(sedang login)
  
 if($password_user!=$password)  die ("<script>alert('Password Lama Salah');window.location='javascript:history.go(-1)';</script>");
 if($password_baru!=$password_baru_ulang)  die ("<script>alert('Ulangi Password Baru Tidak Sesuai');window.location='javascript:history.go(-1)';</script>");
  
 $query1="update user set password= '$password_baru' where id_user='$id_user'";//
 $exe=mysql_query($query1,$link);
 if ($exe) {
 header ("location:home.php");
 }
 else {
 header ("location:gantipassword.php"); }
 ?>
