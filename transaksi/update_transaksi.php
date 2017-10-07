<?php
session_start();
if(isset($_SESSION['username'])){
	include "../koneksi.php";
?>
<?php
include("../koneksi.php");

	$id=$_POST['id'];
	$nama_peminjam=$_POST['nama_peminjam'];
	$kelas=$_POST['kelas'];
	$judul_buku=$_POST['judul_buku'];
	$denda=$_POST['denda'];

$update="update transaksi set nama_peminjam='$nama_peminjam' , kelas='$kelas' , judul_buku='$judul_buku' , denda='$denda' where id='$id'";
$update_query=mysql_query($update);
if($update_query)
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
