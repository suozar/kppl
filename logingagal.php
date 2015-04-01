<?php
include("library.php");
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
<?php
//navbarindex();
modallogin();
?>
  
        <div class="container">
            <div class="jumbotron">
                <h2><center>Relawan Online</center></h2>
<!--                <p>Manusia butuh manusia lain <small><br>Buat perubahan</small></p>-->
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h3><center>Password &amp; Email Anda Salah. Silahkan Ulangi Login!</center></h3>
                    <form name="login" method="post" action="login.php">
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                        </div>
     
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                        </div>
    
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
<?php  
footer();
?>
        </div>
    </body>
</html>
