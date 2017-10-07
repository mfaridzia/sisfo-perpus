<?php
session_start();
if(isset($_SESSION['username'])){
	include "../koneksi.php";
?>
<?php
include "../koneksi.php";

$nama_anggota=$_POST['nama_anggota'];
$kelas=$_POST['kelas'];
$jk=$_POST['jk'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$foto=$_FILES['foto']['name'];
$up="../foto_siswa/";
$src=$up.$foto;
$upload=move_uploaded_file($_FILES['foto']['tmp_name'],$src);
$sql="insert into anggota(nama_anggota,kelas,jk,tgl_lahir,alamat,foto)values('$nama_anggota','$kelas','$jk','$tgl_lahir','$alamat','$foto')";
$query=mysql_query($sql);
if($query)
{
header("location:tampil_anggota2.php");
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
