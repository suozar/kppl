<?php
session_start();
include "library.php";

if(isset($_SESSION['id_user'])){
if(isset($_GET['id_user'])){
$id_user=$_GET['id_user'];
}
 
if(empty($_GET['id_user'])){
$id_user=$_SESSION['id_user'];
}
 
$link=koneksi_db();
$query=mysql_fetch_array(mysql_query("select * from user where id_user='$id_user'",$link));
$nama_depan=$query['nama_depan'];
$nama_belakang=$query['nama_belakang'];
$photo=$query['foto_profil'];
?>
 
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title><?php echo $nama_depan." ".$nama_belakang;?></title>
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
                                       
                <div class="col-md-10" style="background-color: #CCC"> <!--BAGIAN KANAN-->       
                    <ul class="breadcrumb">
                        <li class="active">Ganti Password</li>
                    </ul>
                    <div class="row">              
                        <div class="col-md-6">               
                            <form method="post" class="form-horizontal" action="password_proses.php">   
                                <div class="form-group">
                                    <label for="inputPassword" class="control-label col-xs-4">Password Lama</label> 
                                    <div class="col-xs-8">
                                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password Lama">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputPasswordbaru" class="control-label col-xs-4">Password Baru</label>  
                                    <div class="col-xs-8">
                                        <input type="password" name="password_baru" class="form-control" id="inputPassword" placeholder="Password Baru">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputPasswordulang" class="control-label col-xs-4">Ulangi</label>    
                                    <div class="col-xs-8">
                                        <input type="password" name="password_baru_ulang" class="form-control" id="inputPassword" placeholder="Ulangi Password Baru">
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <div class="col-xs-offset-2 col-xs-10">
                                        <button type="submit" class="btn btn-success" name="kirim" value="Simpan">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
 
                        <div class="col-md-6"></div>                                       
                    </div><!--/.STATUS-->
 
                    <hr>                                          
                </div><!--/.BAGIAN KANAN-->
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
