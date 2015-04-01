<?php
session_start();// memakai session
include "library.php";//memakai isi library
if(isset($_SESSION['id_user'])){
if(isset($_GET['id_user'])){
$id_user=$_GET['id_user'];//mengisi variabel id_user
}
 
if(empty($_GET['id_user'])){
$id_user=$_SESSION['id_user'];//mengisi variabel id_user
}
 
$link=koneksi_db();//membuat koneksi ke database
$query=mysql_fetch_array(mysql_query("select * from user where id_user='$id_user'",$link));
//mengisikan nilai tiap variabel
$nama_depan=$query['nama_depan'];
$nama_belakang=$query['nama_belakang'];
$photo=$query['foto_profil'];
?>
  
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $nama_depan. " ". $nama_belakang; ?></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    </head>
 
    <body>
    <?php include"header.php"; ?>
        <div class="container">
            <div class="jumbotron"></div>
            <div class="row" style="background-color:#0C9">
                
                <div class="col-md-2"><!--mulai colmd 2-->         
                    <div class="row">
                        <div class="col-md-12"><!-- kolom foto profil yg login -->
                            <div class="thumbnail">
                                <img src="foto/<?php echo $photo;?>" class="img-circle"> <!-- bisa diganti dengan class="img-thumbnail" untuk foto bulat-->
                                <div class="caption" style="background-color:#0C6">
                                    <center><h4><?php echo $nama_depan.' '.$nama_belakang;?></h4></center>
                                </div>
                            </div>
                        </div>   
                        <?php include"bagiankiri.php";?> <!-- menampilkan kotak pesan, galeri, dan teman -->
                    </div>
                </div><!--akhir colmd 2-->
        
                <div class="col-md-10" style="background-color: #0FF"> <!--BAGIAN KANAN-->       
                    <ul class="breadcrumb"><!-- header halaman -->
                        <li class="active"><b>Ganti Foto Profil</b></li>
                    </ul>
                    <div class="row">              
                        <div class="col-md-6"><!-- Form ganti foto -->              
                            <form enctype="multipart/form-data"method="post" action="proses_foto.php?id_user=<?php echo $_SESSION['id_user'];?> " >
                                Pilih Gambar : <input type="file" name="gmb" class="form-control">
                                <button class="btn btn-info" type="submit" name="kirim">GANTI</button>
                            </form>
                        </div>
 
                        <div class="col-md-6"></div>                                       
                    </div>
                    <hr>                                          
                </div>
            
            </div>
        </div> <!--/.CONTAINER-->
  
<?php footer(); ?>
    </body>
</html>
 
<?php
}else{
header("Location:index.php");
}
?>
