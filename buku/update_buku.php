<?php
session_start();
if(isset($_SESSION['username'])){
	include "../koneksi.php";
?>
<?php
include ("../koneksi.php");

$id=$_POST['id'];
$nama_buku=$_POST['nama_buku'];
$kode_buku=$_POST['kode_buku'];
$penerbit=$_POST['penerbit'];
$tahun_terbit=$_POST['tahun_terbit'];
$pengarang=$_POST['pengarang'];

$update="update buku set nama_buku='$nama_buku' , kode_buku='$kode_buku' , penerbit='$penerbit' , tahun_terbit='$tahun_terbit' , pengarang='$pengarang' where id='$id'";
$update2=mysql_query($update);
if($update2)
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
header('location:../home.php');
?>
<?php
}
?>
