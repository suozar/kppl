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
 
                <a class="navbar-brand" href = "home.php?id_user=<?php echo "$_SESSION[id_user]";?>"><span class="glyphicon glyphicon-th-large"></span> Relawan Online <span class="glyphicon glyphicon-th-large"></span></a>
 
                <form role="search" class="navbar-form navbar-left" action="cariteman.php" method="post">
 
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control">
                    </div>
                </form>
            </div>
 
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
               <ul class="nav navbar-nav navbar-right">
                 <li><a href = "memberpopular.php">Member List</a></li>
                 <li class="dropdown">
                 <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-exclamation-sign" title="Notifikasi"></span></a>
 
                    <ul role="menu" class="dropdown-menu" style="width:400px">
                        <li class="well-sm clearfix">Notifikasi</li>
                        <li class="divider"></li>
                        <li class="well-sm clearfix"><a href="#">Lihat Semua Notifikasi</a></li>
                    </ul>
                   </li> 
   
                <li><a href = "profil.php?id_user=<?php echo "$_SESSION[id_user]";?>"><span class="glyphicon glyphicon-user"></span><?php echo   ' '.$nama_depan.' '.$nama_belakang;?></a></li> 
 
                <li class="active"><a href = "home.php?id_user=<?php echo "$_SESSION[id_user]";?>"><span class="glyphicon glyphicon-log-out"></span> HOME</a></li> 
 
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu" style="width:200px">
                            <li><a href="editinfo.php">Edit Info</a></li>
                            <li><a href="gantifoto.php">Ganti Foto</a></li>
                            <li><a href="gantipassword.php">Ganti Password</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>   
                    </ul> 
                    </li>
                </ul>
            </div>
     </div>
</nav>
