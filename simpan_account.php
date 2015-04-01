<?php
include"library.php";  // memanggil fungsi library
if(isset($_POST['kirim'])){ // kalau di klik daftar maka diproses
  
$conn=koneksi_db(); //memanggil koneksi database menampung variabel yg di POST dari form registrasi
$nama_depan=ucwords($_POST['nama_depan']);
$nama_belakang=ucwords($_POST['nama_belakang']);
$email=$_POST['email'];
$userpass=$_POST['password'];
$kelamin=$_POST['kelamin'];
$tanggal=$_POST['tanggal'];
  
  
// Validasi jika isi registrasi kosong
if (empty($_POST['nama_depan'])) die ("<script>alert('Anda Belum Mengisikan Nama Depan');window.location='javascript:history.go(-1)';</script>"); 
if (empty($_POST['nama_belakang'])) die ("<script>alert('Anda Belum Mengisikan Nama Belakang');window.location='javascript:history.go(-1)';</script>");
if (empty($_POST['kelamin'])) die ("<script>alert('Anda Belum Mengisikan Jenis Kelamin');window.location='javascript:history.go(-1)';</script>");
if (empty($_POST['tanggal'])) die ("<script>alert('Anda Belum Mengisikan Tanggal Lahir');window.location='javascript:history.go(-1)';</script>");
if (empty($_POST['email'])) die ("<script>alert('Anda Belum Mengisikan Email');window.location='javascript:history.go(-1)';</script>");
if (empty($_POST['password'])) die ("<script>alert('Anda Belum Mengisikan Password');window.location='javascript:history.go(-1)';</script>");
  
//Proses query insert ke database. variabel yg diisi null nantinya akan di proses ketika user memilih menu edit informasi info user.
  
$query="insert into user (id_user,nama_depan,nama_belakang,email,password,kelamin,tgl_lahir,agama,foto_profil,status,alamat,hobi,level,aktif,profil_singkat)values(null,'$nama_depan','$nama_belakang','$email','$userpass','$kelamin','$tanggal',null,'default0.jpg',null,null,null,'MEMBER','Y',null)"; $exe=mysql_query($query, $conn); //eksekusi query insert ke database
  
//proses setelah eksekusi
if ($exe){
    echo "<script>location.replace('daftar_sukses.php')</script>";
}else{
    echo "<script>alert('daftar Gagal')
    location.replace('index.php')</script>";
}
  
}
else{
unset($_POST['kirim']);
}
?>
