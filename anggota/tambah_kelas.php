<?php
session_start();
if(isset($_SESSION['username'])){
	include "../koneksi.php";
?>
<?php
include("../koneksi.php");

$kls=$_POST['kls'];
$insert="insert into kls(kls)values('$kls')";
$insert_query=mysql_query($insert);
if($insert_query)
{
	header("location:tampil_kelas.php");
}else{
	echo "Gagal";
}
?>
<?php
}else{
?>
<?php
header('location:index.php');
?>
<?php
}
?>
