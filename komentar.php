<?php
session_start();// memulai Session
include "library.php";// menggunakan library

if (empty($_POST['komentar'])) die ("<script>alert('Anda Belum Mengisikan Komentar');window.location='javascript:history.go(-1)';</script>");  // kalau komentar kosong maka kembali lagi
$id_status= $_GET['id_status']; //mengambil nilai id_status dari url
$link=koneksi_db();// membuat koneksi ke database
$id_user=$_SESSION['id_user'];//menampung id_user yang login
$komen=$_POST['komentar'];// menamppung isi komentar pada variabel $komen
$query="insert into komentar values(null,'$id_status','$id_user','$komen',now(),'t')";// query insert ke database, perhatikan atribut tabel
$exe=mysql_query($query,$link);//eksekusi query
 
if($exe){
 echo "<script>
    location.replace('home.php')</script>";
 }
 else {
 echo "gagal".mysql_error();
 }
 ?>
