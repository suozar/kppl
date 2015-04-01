<hr>
     <div class="row" style="background-color: #0c6"><!-- Mulai Row Status warna pink pastel-->
        <br/>
          <div class="col-sm-10">
              <div class="media"><!--start media status -->
                  <a href="#" class="pull-left">
                      <img src="<?php echo'foto/'.$fot;?>" class="media-object img-rounded" width="50" height="50" alt="Sample Image"></a>
                  
                  <div class="media-body">
                      <h4 class="media-heading"> <a href = "profil.php?id_user=<?php echo $id_user;?>"><?php echo $nm_dp.' '.$nm_blk;?></a> <small><i><?php echo $tanggal_status; ?></i></small></h4>
                      <p><?php echo $isi_status; ?></p>
                  </div>
              </div><!--end media status -->
         </div><!--end col-sm-10 -->
         
         <div class="col-sm-2">
             <?php if ($row['id_user']==$id_user) { ?><!-- Jika id yg punya status sama dengan yang login bisa ngehapus -->
             <div class="collapse navbar-collapse" id="navbarCollapse"><!-- dropdown menu hapus -->
                 <ul class="nav navbar-nav">                        
                     <li class="dropdown">
                         <a data-toggle="dropdown" class="dropdown-toggle" href="#"><b class="caret"></b></a>
                         <ul role="menu" class="dropdown-menu" style="width:50px">
                             <li> <a href="hapus_status.php?id_status=<?php echo $row['id_status'];?>">Hapus</a></li>
                         </ul>
                     </li>                                   
                 </ul>
             </div> <!-- END dropdown menu hapus -->

<?php } ?>
         </div><!-- End div col-sm-2 -->
        </div><!-- End row status warna pink pastel-->
 
    <div class="row" style="background-color:#9C6"><!-- Mulai row Komentar -->
        <hr />
              <!-- Tempat tampilkan KOMENTAR -->
 <?php
  $query3 = mysql_query("SELECT * FROM komentar join status using(id_status)JOIN user USING(id_user) where id_status = '$id_status' ORDER BY id_status DESC");
 
 while($row1=mysql_fetch_array($query3)){
 $id_komentar_status=$row1['id_komentar'];//id_komentar
 $isi_komentar_status=$row1['isi_komen'];//isi dari komentar
 $id_komentator=$row1['id_komentator'];//id_komentator
 $tgl_komen=$row1['tanggal_status'];//tgl komentar
 $query4=mysql_fetch_array(mysql_query("select * from user where id_user='$id_komentator'"));// query untuk mendapatkan data komentator
 $nama_depan4=$query4['nama_depan'];//nama_depan Komentator
 $nama_belakang4=$query4['nama_belakang'];//nama belakang komentator
 $foto4=$query4['foto_profil'];//foto komentator
 ?>
        <div class="col-sm-12">
            <div class="media"><!--start media komentar -->
                <a href="<?php echo'foto/'.$foto4;?>" class="pull-left">
                    <img src="<?php echo'foto/'.$foto4;?>" class="img-rounded" width="30" height="30"></a>
                <div class="media-body">
                    <h4 class="media-heading"><a href = "profil.php?id_user=<?php echo $id_komentator;?>"><?php echo $nama_depan4.' '.$nama_belakang4;?></a> <small><i><?php  echo $tgl_komen;?></i></small></h4>
                    <p> <?php echo$isi_komentar_status; ?></p>
                </div>
            </div><!--end media komentar-->
        </div><!--end col-sm-12-->
<?php
  }
?>
               <!-- FORM ISI KOMENTAR -->
        <div class="col-sm-1"></div>
        <div class="col-sm-1"><!-- menampilkan foto kecil user yang login -->
            <img src="<?php echo'foto/'.$photo;?>" class="media-object img-rounded" width="30" height="30" alt="Sample Image">
        </div>
        
        <div class="col-sm-10"><!-- menampilkan form untuk beri komentar -->
            <form action="komentar.php?id_status=<?php echo $row['id_status'];?>" method="post">
                <input class="form-control" type="text" name="komentar" placeholder="Komentar..."></textarea>
            </form>
        <br>
        </div>
        <br />
    </div><!--end row Komentar-->
