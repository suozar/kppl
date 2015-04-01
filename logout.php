<html>
<head>
<title> Logout </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body   bgcolor="black">
<?php
session_start();
unset($_SESSION['id_user']);
echo "<script>
    location.replace('index.php')</script>";
?>
<center>
</center>
</body>
</html><span style="line-height: 1.428571429; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;"> </span>
