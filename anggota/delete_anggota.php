<?php
session_start();
if(isset($_SESSION['username'])){
	include "../koneksi.php";
?>
<?php
include ('../koneksi.php');

$id=$_GET['id'];

$delete="delete from anggota where id='$id'";
$delete2=mysql_query($delete);
if($delete2)
{
	header("location:tampil_anggota2.php");
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
