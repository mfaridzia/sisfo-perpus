<?php
session_start();
if(isset($_SESSION['username'])){
	include "../koneksi.php";
?>
<!doctype html>
<html>
<head>
<title>Otentikasi Data</title>
</head>
<body>
<h1>Hanya Untuk Otentikasi Saja !</h1>
</body>
</html>
<?php
}else{
?>
<?php
header('location:../home.php');
?>
<?php
}
?>
