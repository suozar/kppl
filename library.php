<?php
function navbarindex(){
?>
 
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> Relawan Online </a>
            </div>
 
            <!-- Collect the nav links, forms, and other content for toggling -->
             <!--<div class="collapse navbar-collapse" id="navbarCollapse">           
                 <ul class="nav navbar-nav navbar-right">         
                     <li><a href="#myModal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Daftar </a></li>
                 </ul>
            </div>-->
        </div>
 </nav>
 
    <?php
 }
 
function modallogin(){
 ?>
     <div id="myModal" class="modal fade"> <!-- Modal Login -->
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Daftar Disini</h4>
                 </div>
                                          
                 <form action="simpan_account.php" enctype="multipart/form-data"  method="post" name="postform">
                    <div class="col-md-3"></div>
                     <div class="row">
                        <div class="col-md-6"  style="background-color:#fff">
                            <div class="form-group">
                                <label for="namadepan"> Nama Depan : </label>
                                <input type="text" class="form-control" name="nama_depan"/>
                            </div>
                        </div>
                    </div>
 
                    <div class="col-md-3"></div>
                     <div class="row">
                        <div class="col-md-6" style="background-color:#fff">
                            <div class="form-group">
                                <label for="namabelakang"> Nama Belakang : </label>
                                <input type="text" class="form-control" name="nama_belakang"/>
                            </div>
                        </div>
                    </div>
      
                    <div class="col-md-3"></div>
                     <div class="row">
                        <div class="col-md-6"  style="background-color:#fff">
                            <div class="form-group">
                                <label for="inputemail"> Email : </label>
                                <input type="email" class="form-control" name="email"/>    
                            </div>
                        </div>
                    </div>
 
                    <div class="col-md-3"></div>
                     <div class="row">
                        <div class="col-md-6"  style="background-color:#fff">
                            <div class="form-group">
                                <label for="inputpassword"> Password : </label>
                                <input type="password" class="form-control" name="password"/>    
                            </div>
                        </div>
                    </div>
 
                    <div class="col-md-3"></div>
                     <div class="row">
                        <div class="col-md-6"  style="background-color:#fff">
                            <div class="form-group">
                                <label for="inputjk"> Jenis Kelamin : </label>
                                <select name="kelamin" class="form-control">
                                    <option value="0"class="form-control">--Pilih Jenis Kelamin--
                                    <option value="Pria" class="form-control">Pria
                                    <option value="Wanita" class="form-control">Wanita
                                </select>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-3"></div>
                     <div class="row" >
                        <div class="col-md-6" style="background-color:#fff">
                            <div class="form-group">
                                <label for="inputtanggal"> Tanggal Lahir : </label>
                                <input type="date" class="form-control" name="tanggal"/>
                            </div>
                        </div>
                    </div>
                     
                    <div class="col-md-3"></div>
                     <div class="row">
                        <div class="col-md-6"  style="background-color:#fff">
                            <div class="form-group">
                                <label for="inputminat"> Minat : </label>
                                <select name="minat" class="form-control">
                                    <option value="0"class="form-control">--Pilih Minat--
                                    <option value="Pria" class="form-control">Pendidikan
                                    <option value="Wanita" class="form-control">Sosial
                                    <option value="Wanita" class="form-control">Kesehatan
                                    <option value="Wanita" class="form-control">Lingkungan    
                                </select>
                            </div>
                        </div>
                    </div> 
 
                    <div class="col-md-3"></div>
                     <div class="row" >
                        <div class="col-md-6" style="background-color:#fff"> 
                            <center>
                            <button type="submit" class="btn btn-primary" value="DAFTAR"    onclick="return confirm('Apakah Anda yakin akan daftar?')" name="kirim">DAFTAR</button>                                     </center>
                        </div>
                    </div>
                 </form>
                 
                 <div class="modal-footer">
                    <p class="text-warning"><small><center>
                        </center></small></p>
                 </div>
             </div>
         </div>
 </div><!-- Akhir Modal Login -->
  
<?php
 }
 function register(){
 ?>
    <hr>
<div class="col-md-8"></div>
<div class="col-md-3">
    <h2> MASUK DISINI</h2>
    <div class="modal-body"><!-- Modal body  Login -->
        <p>Masukkan Email dan Password Anda dengan Benar</p>
        <form name="login" method="post" action="login.php"><!--Pastikan nama file tujuan action benar -->
            <div class="row">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">  
                </div>
            </div>
                    
            <div class="row">
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                </div>
            </div>
 
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="#myModal" data-toggle="modal"> 
                <button type="button" class="btn btn-warning" >Daftar</button>
            </a>
        </form>
    </div><!-- Akhir Modal body Login -->
</div>
 
<?php
}
function footer(){
?>
 
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <hr>
                 <center> <p>&copy; Copyright 2014 Mataharicode Tutorialjaco</p></center>
             </div>
         </div>
    </div>
 
<?php
}
function koneksi_db(){
    $host = "localhost";
    $database = "test";//sesuaikan nama db kamu
    $user = "root";//sesuaikan usernya
    $password="";// sesuaikan password kamu, kalau di cpanel ganti juga, biasanya password akun cpanel
    $link = mysql_connect($host,$user,$password);//koneksi ke db
    mysql_select_db($database,$link);//pilih nama db
 
    if(!$link)
        echo "Error : ".mysql_error();
        return $link;
 }
?>
