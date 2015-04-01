<?php
session_start();
include "library.php";// menggukan library
 
if(isset($_SESSION['id_user'])){  //jika session udh ada isinya alias udh login
    if(isset($_GET['id_user'])){
//jika ada variabel get['id_user'], variabel ini dikirim ke halaman ini dengan menggunakan fungsi ?id_user= yg nantinya akan menempel pada link action. kalau bingung ntar ada contohnya :D
   
$id_user=$_GET['id_user'];
    }
 
    if(empty($_GET['id_user'])){ // jika tidak ada nilai GET yang dikirim ke halaman ini maka variabel $id_user nilainya adalah = $_SESSION

        $id_user=$_SESSION['id_user'];
    }
 
$link=koneksi_db();//buka koneksi database
 
//query eksekusi mencari data array
$query=mysql_fetch_array(mysql_query("select * from user where id_user='$id_user'",$link));
 
//menyimpan hasil query pada variabel
$nama_depan=$query['nama_depan'];
$nama_belakang=$query['nama_belakang'];
$photo=$query['foto_profil'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Relawan Online</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
 
    <body>
        <?php echo include"header.php";?>
        <div class="container">
            <br><br>
            <div class="row" style="background-color:#fff">
                <div class="col-md-2" style="background-color: #ccc"><!--mulai colmd 2-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="thumbnail">
                                <img src="foto/<?php echo $photo;?>" class="thumbnail">
                                <div class="caption">
                                    <h4><?php echo $nama_depan.' '.$nama_belakang;?></h4>
                                </div>
                            </div>
                        </div>
                        <?php include"bagiankiri.php";?>
                    </div>
                </div><!--akhir colmd 2-->
                
                <div class="col-md-6"><!--mulai colmd 6-->
                    <div class="row">
                        <div class="col-md-1"></div>               
                        <div class="col-md-9">               
                            <form action="updatestatus.php" method="post">                                                      <div class="row">
                                <div class="form-group">
                                    <textarea maxlength="255" cols="40" rows="4" name="update" class="form-control" placeholder="Tulis status.."></textarea>
                                    <button type="submit" class="btn btn-primary pull-left" value="POST" name="kirim">POST</button>
                                </div> 
                               </div>                           
                            </form>
                            <?php
 
$query1 = mysql_query("SELECT * FROM status JOIN user USING(id_user) WHERE dihapus = 't' ORDER BY id_status DESC");
 while($row=mysql_fetch_array($query1)){
    $id_status=$row['id_status'];
    $id_us=$row['id_user'];
    $isi_status=$row['isi_status'];
    $tanggal_status=$row['tanggal_status'];
    $nm_dp=$row['nama_depan'];
    $nm_blk=$row['nama_belakang'];
    $fot=$row['foto_profil']; 
?>
<?php include"tampilstatus.php"?>                           

<?php
}
?>
                        </div>
 
                        <div class="col-md-2"></div>                                       
                    </div><!--/.STATUS-->
                </div><!--akhir colmd 6-->
 
                <div class="col-md-4"><!--mulai colmd 4--></div><!--akhir colmd 4-->
            </div>
<?php  
footer();
?>
        </div> <!-- END CONTAINER -->
    </body>
</html>
 
<?php
}else{
    header("Location:index.php");
}
?>
