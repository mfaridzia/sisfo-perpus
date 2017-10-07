<?php
session_start();
if(isset($_SESSION['username'])){
	include "../koneksi.php";
?>
<?php
include("../koneksi.php");

$nama_buku=$_POST['nama_buku'];
$kode_buku=$_POST['kode_buku'];
$penerbit=$_POST['penerbit'];
$tahun_terbit=$_POST['tahun_terbit'];
$pengarang=$_POST['pengarang'];

$insert="insert into buku(nama_buku,kode_buku,penerbit,tahun_terbit,pengarang)values('$nama_buku','$kode_buku','$penerbit','$tahun_terbit','$pengarang')";
$insert_query=mysql_query($insert);
if($insert_query)
{
	header("location:tampil_buku.php");
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
