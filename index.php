<?php
include ("library.php");
if(empty($_SESSION['id_user'])){ //fungsi jika session kosong belum login
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Relawan Online</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
    </head>
  
    <body>
 <?php
 //navbarindex(); //memanggil function navbar
 modallogin(); //memanggil function modal login
 ?>
 
 
        <div class="container">
            <div class="jumbotron" style="background-color:red"; >
                <h1 style="color:white"><center><b>Relawan Online</b></center></h1>
<!--                <p>Manusia butuh manusia lain <small><br>Buat perubahan</small></p>-->
            </div>
<?php  
register(); // memanggil form untuk registrasi
footer(); // memanggil footer dari web
?>
 
        </div>
    </body>
</html>

<?php
}
 
else{
 header("Location:home.php");
 }
?>
