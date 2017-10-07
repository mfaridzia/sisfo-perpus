<?php
session_start();
include "koneksi.php";

$username=$_POST['username'];
$password=sha1($_POST['password']);

$query=mysql_query("select * from user where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
if($cek){
$_SESSION['username']=$username;
?>
<?php
header("location:home.php");
?>
<?php
}else{
?>
<?php
header("location:index.php");
?>
<?php
}
?>
