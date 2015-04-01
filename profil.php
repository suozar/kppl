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
     
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Profil</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
 
    <body  background="foto/website-backgrounds-free.jpg">
        <li><a href = "profil.php?id_user=<?php echo "$_SESSION[id_user]";?>">
            <span class="glyphicon glyphicon-user"></span><?php echo' '.$_SESSION['nama_depan'].' '.$_SESSION['nama_belakang'];?></a>
        </li>
    
<?php echo include"header.php";?> 
        
        <div class="container">
        <br><br>
           <div class="row" style="background-color: #CCC">
               <p></p><!-- jarak doank -->
               <div class="col-md-6"><!--mulai div clas md 6 -->
                <div class="row">
                    <div class="col-sm-4"><!-- tampilkan foto profil -->            
                        <a href="#myModalfoto"  data-toggle="modal">
                            <img src="foto/<?php echo $photo;?>" class="img-rounded" width="125" height="125"></a>
                    </div>
                    
                    <div class="col-sm-8"><!-- tampilkan Nama User -->
                        <div style="margin-top:50px"><!-- Jika klik nama user maka akan menuju ke halaman profil user -->
                        <h3> <a href = "profil.php?id_user=<?php $query2=mysql_fetch_array(mysql_query("select * from user where id_user='$id_user'"));
$id=$query2['id_user'];
if($query2){ echo $id; }else{ echo $_SESSION['id_user'];}?>"> <?php echo $nama_depan.' '.$nama_belakang;?></a><br>
                        </h3>
                        </div>
                    </div>
                 </div> <br>
                </div><!-- end div clas md 6 -->
  <!-- ISIKAN KODE KIRIM PESAN DAN ADD FRIEND DIBAWAH KOMENTAR INI -->
               <div class="col-md-6"><!--mulai div clas md 6 -->
                   <div class="row">
                       <div class="pull-right" style="margin-top: 50px; width:50%">
                           <div class="row">
                               <div class="col-sm-6">
                                   <a href="#myModalteman" data-toggle="modal" class="btn btn-primary btn-block"><center>Add Teman</center></a>
                                   <a href="#myModalkonfirmasi" data-toggle="modal" class="btn btn-primary btn-block"><center>Konfrimasi</center></a>
                                   <a href="#myModalbatal" data-toggle="modal" class="btn btn-primary btn-block"><center>Batal Add</center></a>
                               </div>
                               
                               <div class="col-sm-5">
                                   <div class="navbar navbar-static">
                                       <div class="navbar-inner">
                                           <ul role="navigation" class="nav" style="background-color:#FFF">
                                               <li><a href="#myModalpesan" data-toggle="modal" style="text-decoration:none"><center>Kirim Pesan</center></a></li>
                                               <li class="dropdown" style="background-color:#FFF">
                                                   <a href="#" data-toggle="dropdown" class="dropdown-toggle">Teman <b class="caret"></b></a>
                                                   <ul class="dropdown-menu">
                                                       <a href="#myModalhapusteman" data-toggle="modal" style="text-decoration:none"><center>Hapus Teman</center></a>
                                                   </ul>
                                               </li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>           
                   </div>              
               </div><!-- end div clas md 6 -->
            </div><!-- end row -->        
        </div><!-- end container profil foto dan nama -->
        <div class="container"><br> <!-- container isi status dan info -->
            <div class="row" style="background-color:#FFF">
                <div class="col-md-6">
                    <ul class="nav nav-pills nav-justified" id="myTab">
                        <li class="active"><a href="#sectionA">Status</a></li>
                        <li><a href="#sectionB">Galery</a></li>                  
                    </ul>
                    
                    <div class="tab-content">
                        <div id="sectionA" class="tab-pane fade in active"> 
                            <br>
                            <div class="row">
                                <div class="col-md-1 col-sm-1 col-xs-1"></div>
                                <div class="col-md-11 col-sm-11 col-xs-11">
<?php if(($id_user == $_SESSION['id_user'])){ ?>
                                    <form action="updatestatus.php" method="post">   <!-- form update status -->                                            
                                        <div class="row">
                                            <div class="form-group">
                                                <textarea maxlength="255" cols="40" rows="4" name="update" class="form-control" placeholder="Tulis status.."></textarea>
                                                <p></p><!-- JARAK DOANK -->
                                                <button type="submit" class="btn btn-primary pull-left" value="POST" name="kirim">POST</button>
                                            </div> 
                                        </div>                            
                                    </form><!-- end form update status -->
<?php } ?> <!-- KETIKKAN KODE tampil status dibawah sini --> 

<?php
$query1 = mysql_query("SELECT * FROM status JOIN user USING(id_user) WHERE id_user='$id_user' AND dihapus = 't' ORDER BY id_status DESC");
while($row=mysql_fetch_array($query1)){
  $id_status=$row['id_status'];
  $id_us=$row['id_user'];
  $isi_status=$row['isi_status'];
  $tanggal_status=$row['tanggal_status'];
  $nm_dp=$row['nama_depan'];
  $nm_blk=$row['nama_belakang'];
  $fot=$row['foto_profil'];
?>
<?php include"tampilstatus.php";?>
<?php
}
?>
<br>                                    
                                </div>
                            </div>
                            <br>
                        </div>
                        
                        <div id="sectionB" class="tab-pane fade">
                            <p>Dalam Tahap Pengembangan</p>
                        </div>      
                    </div>          
                </div> <!-- end div-col-md-6 -->

                <div class="col-md-6">
                    <ul class="nav nav-pills nav-justified" id="myTab">
                        <li class="active"><a href="#sectionC">INFO</a></li>
                        <li><a href="#sectionD">TEMAN</a></li>                  
                    </ul>
                    <div class="tab-content">
                        <div id="sectionC" class="tab-pane fade in active">
                            <div class=" row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10"> 
                                    <div class="row">
                                        <div class=" col-md-12" style="background-color: #CCC">
                                            <h4> 
<?php
$query3=mysql_fetch_array(mysql_query("select * from user where id_user='$id_user'"));
$profil=$query3['profil_singkat'];
if($profil){ echo $profil; }else{ echo " Profil belum diisi ";}?>
                                            </h4>
                                        </div>
                                    </div>                         
                                    
                                    <div class="row">
                                        <div class=" col-md-12" style="background-color: #CCC">
                                            <h4>
<?php
$query4=mysql_fetch_array(mysql_query("select * from user where id_user='$id_user'"));
$tanggal=$query4['tgl_lahir'];
$kelamin=$query4['kelamin'];
$agama=$query4['agama'];
$status=$query4['status'];
$alamat=$query4['alamat'];
$hobi=$query4['hobi'];
$minat=$query4['minat'];
if($query4){ echo "Nama Lengkap :   ";echo $nama_depan.' '.$nama_belakang; ?> <br> <?php
echo "Tanggal Lahir  :  ";echo $tanggal; ?> <br> <?php
echo "Gender :      ";echo $kelamin; ?> <br> <?php
echo "Agama :       ";echo $agama; ?> <br> <?php
echo "Alamat  :     ";echo $alamat; ?> <br> <?php
echo "Status :      ";echo $status; ?> <br> <?php
echo "Hobi :        ";echo $hobi; ?> <br> <?php
echo "Minat :       ";echo $minat;
}else{ echo " Profil masih belum diisi lengkap ";}
?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-1"></div>
                            </div>
                        </div>

                        <div id="sectionD" class="tab-pane fade">
                            <p>Dalam Tahap Pengembangan</p>
                        </div>
                    </div>
                </div><!-- end div-col-md6 ke-2 -->
            </div><!-- end row -->
        </div><!-- end container -->
        
<?php   
footer();
?>
    </body>
    <div id="myModalfoto" class="modal fade"> <!-- modal untuk pop up img -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <center>
                        <img src="foto/<?php echo $photo;?>" class="img-responsive">
                    </center>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
$(document).ready(function(){
    $("#myTab a").click(function(e){
        e.preventDefault();
        $(this).tab('show');
    });
});
</script>    
</html>
 
<?php
}else{
header("Location:index.php");
}
 
?>
