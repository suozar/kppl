<?php
session_start();//menggunakan session
$id_user=$_SESSION['id_user'];//mengisi veriabel id_user dengan nilai id_user yang login
$folder = "foto/";//nama folder nya 'foto', sudah sama dengan folder dalam namaproject
$folder = $folder . basename( $_FILES['gmb']['name']);
$gambar        =($_FILES['gmb']['name']);//isi variabel gambar agar acak
 include"library.php";
$link=koneksi_db();//membuat koneksi
  
$query="update user set foto_profil = '$gambar' where id_user='$id_user'" ;//query update ke table user
$exe=mysql_query($query,$link);//eksekusi query

if ($exe) {
move_uploaded_file($_FILES['gmb']['tmp_name'], $folder);//memindahkan gambar ke folder foto
 header ("location:home.php");
 }
 else {
 header ("location:setting.php"); }
 ?>
