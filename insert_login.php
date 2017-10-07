<?php
session_start();
if(isset($_SESSION['username'])){
	include "koneksi.php";
?>
<?php
include ("koneksi.php");

$username=$_POST['username'];
$password=sha1($_POST['password']);
$insert="insert into user(username,password)values('$username','$password')";
$insert_query=mysql_query($insert);
if($insert_query)
{
	echo "berhasil";
}else{
	echo "gagal";
}
?>
<?php
}else{
?>
<?php
header("location:home.php");
?>
<?php
}
?>
