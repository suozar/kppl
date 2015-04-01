<?php
session_start();
$id_user=$_SESSION['id_user']; //memanggil variabel id_user yg login dari Session
$isi_status = $_POST['update'];//menampung isi status dari textarea 
 
if (empty($_POST['update'])) die ("<script>alert('Anda Belum Mengisikan status');window.location='javascript:history.go(-1)';</script>");//kalau isi textarea updatestatus kosong maka ga bisa update
include"library.php"; // memanggil file library
 $link=koneksi_db();// membuat link koneksi ke database, koneksi_db adalah function yang ada dalam library
 $eksekusi=mysql_query("INSERT INTO status VALUE(NULL,'$id_user','$isi_status',NOW(),'t')",$link) ; //eksekusi query insert ke dalam database tabel status. Kalau sudah di hosting hati2 nama tabelnya case sensitive
 
 if($eksekusi){//jika eksekusi berhasil, maka 
     echo "<script>location.replace('home.php')</script>";//pindah ke home.php(refresh halaman)
}else { //kalau gagal update
     echo "gagal bro".mysql_error();// tampilkan errornya knpa..
}
?>
