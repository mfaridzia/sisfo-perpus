<?php
session_start();
if(isset($_SESSION['username'])){
	include "../koneksi.php";
?>
<?php
include ("../koneksi.php");

$id=$_GET['id'];

$delete="delete from buku where id='$id'";
$delete_query=mysql_query($delete);
if($delete_query)
{
	header("location:tampil_buku.php");
}else{
	echo "gagal";
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
