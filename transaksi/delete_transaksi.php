<?php
session_start();
if(isset($_SESSION['username'])){
	include "../koneksi.php";
?>
<?php
include("../koneksi.php");

$id=$_GET['id'];

$delete="delete from transaksi where id='$id'";
$delete_query=mysql_query($delete);
if($delete_query)
{
	header("location:tampil_transaksi.php");
}else{
	echo "Gagal";
}
?>
<?php
}else{
?>
<?php
header('location:../home.php');
?>
<?php
}
?>
