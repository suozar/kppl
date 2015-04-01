<?php
session_start();// memulai menggunakan/memanggil variabel session
//kode dibawah ini adalah kode untuk mengambil isi dari variabel $_GET['id_user'] yang dikirim dari halaman home
  
if(isset($_GET['id_status'])){//jika $_GET['id_status'] ada isisnya maka
$id_status=$_GET['id_status']; //menyimpan nilai $_GET
}
$id_user=$_SESSION['id_user'];//variabel id_user nilainya adalah id_user yang login
  
 include"library.php";//menggunakan library.php
  $link=koneksi_db();//membuat koneksi ke database
//eksekusi query update nilai dari atribut dihapus
 $exe=mysql_query("UPDATE status set dihapus='y' where id_user='$id_user' AND id_status='$id_status'",$link) ;
  
 if($exe)//jika sukses
 {
 echo "<script>
    location.replace('home.php')</script>";
 }
 else { //jika gagal
 echo "<script>
    location.replace('home.php')</script>";
 }
 ?>
