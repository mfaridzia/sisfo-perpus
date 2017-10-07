<?php
session_start();
if(isset($_SESSION['username'])){
	include "../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Lihat Anggota</title>
<style type="text/css">
*{
	margin:0;
	padding:0;
}
	table {
	margin:20px auto;
	text-align:center;
}
</style>
</head>
<body>
<table border="1">
<tr>
<th>No</th>
<th>Foto Anggota</th>
<th>Nama Anggota</th>
<th>Kelas Anggota</th>
<th>Jk Anggota</th>
<th>Tgl Lahir Anggota</th>
<th>Alamat Anggota</th>
<th>Actions</th>
</tr>
<?php
include "../koneksi.php";

$select="select * from anggota";
$select_query=mysql_query($select);
$i=1;
while($data=mysql_fetch_assoc($select_query)){
	echo"<tr>
	<td>".$i."</td>
	<td><img style=\"width:50px; height:50px; border-radius:10px;\" src=\"../foto_siswa/".$data['foto']."\"></td>
	<td>".$data['nama_anggota']."</td>
	<td>".$data['kelas']."</td>
	<td>".$data['jk']."</td>
	<td>".$data['tgl_lahir']."</td>
	<td>".$data['alamat']."</td>
	<td><a href=\"form_edit_anggota.php?id=".$data['id']."\">Edit</a> ||
	<a href=\"delete_anggota.php?id=".$data['id']."\">Delete</a>
	</td></tr>";
	$i++;
}
?>
</table>
</body>
</html>
<?php
}else{
?>
<?php
header('location:index.php');
?>
<?php
}
?>
