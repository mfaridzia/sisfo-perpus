<?php
session_start();
if(isset($_SESSION['username'])){
	include "../koneksi.php";
?>
<?php
include "../koneksi.php";

$id=$_POST['id'];
$nama_anggota=$_POST['nama_anggota'];
$kelas=$_POST['kelas'];
$jk=$_POST['jk'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
//untuk foto siswa
$file_name=$_FILES['foto']['name'];
$file_size=$_FILES['foto']['size'];
$file_type=$_FILES['foto']['type'];
$file=$_FILES['foto']['tmp_name'];
$dir="../foto_siswa/$file_name";
if(empty($file_name)){
$update="update anggota set nama_anggota='$nama_anggota' , kelas='$kelas' , jk='$jk' , tgl_lahir='$tgl_lahir' , alamat='$alamat' where id='$id'";
}else{
$upload=move_uploaded_file($file,$dir);
if($upload){
$update="update anggota set nama_anggota='$nama_anggota' , kelas='$kelas' , jk='$jk' , tgl_lahir='$tgl_lahir' , alamat='$alamat' , foto='$file_name' where id='$id'";
}else{
echo "Upload Gagal";
}
}
mysql_query($update) or die(mysql_error());
header("location:tampil_anggota2.php");
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
