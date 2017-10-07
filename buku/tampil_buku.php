<?php
session_start();
if(isset($_SESSION['username'])){
	include "../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Tampil Anggota</title>
<style type="text/css">
	*{
		margin:0; 
		padding:0;
		font-family:;
	}
		body,html {
		background-color:transparent;
	}
		#wrapper {
		width:1473px;
		margin:0 auto;
	}
		#top {
		width:100%;
		height:60px;
		background:#E5E5E5;
		border-bottom:1px solid #ccc;
	}
		.lnk {
		text-decoration:none;
		color:black;
	}
		.anon {
		font-weight:bold;
		font-size:18px;
		line-height:50px;
		margin-left:15px;
	}
		.rpl {
		font-style:normal;
		font-size:11px;
	}
		.logout {
		color:black;
		text-decoration:none;
		position:relative;
		top:-34px;
		margin-left:1388px;
	}
		.logout:hover {
		color:#3B5D7E;
	}
		#sidebar {
		width:350px;
		height:790px;
		background:#E5E5E5;
		border-bottom:1px solid #ccc;
		border-right:1px solid #ccc;
		float:left;
	}
		.search {
		background:#ddd;
		height:60px;
	}
		#cari {
		position:relative;
		top:15px;
		left:20px;
		height:25px;
		width:210px;
		padding-left:10px;
	}
		#ok {
		position:relative;
		top:15px;
		left:20px;
		height:30px;
	}
		#nav {
		width:1100px;
		height:60px;
		background:#E5E5E5;
		float:right;
		border-bottom-left-radius:5px;
		border-bottom-right-radius:5px;
	}
		#nav ul {
		margin:0;
		padding:0;
		list-style:none;
	}
		#nav ul li {
		position:relative;
		float:left;
	}
		#nav li a {
		color:black;
		text-decoration:none;
		padding:19.5px 30px;
		display:block;
	}
		#nav li a:hover {
		background:red;
	}
		#nav ul li ul {
		display:none;
	}
		#nav ul li:hover ul {
		display:block;
		position:absolute;
	}
		#nav ul li:hover ul li a {
		display:block;
		background:#ccc;
		width:150px;
		border-top:1px solid #ddd;
	}
		#nav ul li:hover ul li a:hover {
		background:#ddd;
	}
		#nav ul li:hover > a {
		background:#ccc;
	}
		.row:after {
	    content:"";
	    vertical-align:middle;
		margin-top:5px;
		margin-left:11px;
		display:inline-block;
		border-top:6px solid black;
		border-left:5px solid transparent;
		border-right:6px solid transparent;
		border-bottom:6px solid transparent;
	}
		#box {
		width:1473px;
		height:691px;
		background:transparent;
	}
		#box a {
		text-decoration:none;
		color:black;
	}
		.anggota {
		margin-left:390px;
		width:1080px;
		height:640px;
		background:transparent;
		border-radius:10px;
	}
		#box table {
		width:1000px;
		margin-top:100px;
		margin-left:10px;
		border-spacing:0px;
	}
		#box th {
		height:40px;
	}
		$box td {
	}
		.view {
		background:#ccc;
		margin-top:120px;
		line-height:30px;
		text-align:center;
		border-bottom-left-radius:5px;
		border-bottom-right-radius:5px;
	}
		.view:hover {
		background:#ddd;
		color:#000;
	}
		#footer {
		width:100%;
		height:55px;
		background:#E5E5E5;
		clear:both;
	}
		.cop {
		text-align:center;
		color:black;
		line-height:55px;
	}
</style>
</head>
<body>
	<div id="wrapper">
	<div id="top">
	<p class="anon"><a class="lnk" href="home.php">Anonymous <i class="rpl">RPL</i></a></p>
	<a class="logout" href="../logout.php">Logout</a>
	</div>
	<div id="sidebar">
	<div class="search">
	<form action="../hasil_cari.php" method="get">
	<input type="search" id="cari" class="form-control" name="q" placeholder="Search..." required/>
	<input type="submit" id="ok" class="btn btn-default" name="cari" value="Cari !"/>
	</form>
	</div>
	</div>
	<div id="nav">
	<ul>
	<li><a href="../home.php">Dashboard</a></li>
	<li><a href="" class="row">Anggota</a>
	<ul>
	<li><a href="../anggota/form_anggota.php">Tambah Anggota</a></li>
	<li><a href="../anggota/tampil_anggota2.php">Lihat Anggota</a></li>
	<li><a href="../anggota/tampil_kelas.php">Lihat Kelas</a></li>
	</ul>
	</li>
	<li><a href="" class="row">Transaksi</a>
	<ul>
	<li><a href="../transaksi/form_transaksi.php">Transaksi Baru</a></li>
	<li><a href="../transaksi/tampil_transaksi.php">Lihat Transaksi</a></li>
	</ul>
	</li>
	<li><a href="" class="row">Buku</a>
	<ul>
	<li><a href="form_tambah_buku.php">Tambah Buku</a></li>
	<li><a href="tampil_buku.php">Lihat Buku</a></li>
	<li><a href="kel_buku.php">Kelasifikasi Buku</a></li>
	</ul>
	</li>
	<li><a href="../about.php">About</a></li>
	</ul>
	</div>
	<div id="box">
	<div class="anggota">
	<table style="border:1px; text-align:center;" border="1">
	<tr>
	<th>No</th>
	<th>Nama Buku</th>
	<th>Kode Buku</th>
	<th>Penerbit</th>
	<th>Tahun Terbit</th>
	<th>Pengarang</th>
	<th>Actions</th>
	</tr>
<?php
include "../koneksi.php";

$per_page=5;
$page_query=mysql_query("select count(*)from buku");
$pages=ceil(mysql_result($page_query,0)/$per_page);
$page=(isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start=($page-1) * $per_page;

$query=mysql_query("select * from buku order by nama_buku limit $start,$per_page");
$i=1;
while($data=mysql_fetch_assoc($query)){
	echo "<tr>
		 <td>".$i."</td>
		 <td>".$data['nama_buku']."</td>
		 <td>".$data['kode_buku']."</td>
		 <td>".$data['penerbit']."</td>
		 <td>".$data['tahun_terbit']."</td>
		 <td>".$data['pengarang']."</td>
		 <td>
		 <a href=\"form_edit_buku.php?id=".$data['id']."\">Edit</a> ||
		 <a href=\"delete_buku.php?id=".$data['id']."\">Delete</a>
		 </td></tr>";
		$i++;
	 }
		if($pages >= 1 && $page <= $pages){
		for($x=1;$x<=$pages;$x++){
			
		echo ($x==$page)?  '<a href="?page='.$x.'">'.$x.'</a>'   :  '<a href="?page='.$x.'">'.$x.'</a>';
	}
	}
	?>
</table>
	</div>
	</div>
	<div id="footer">
	<p class="cop"> Copyright &copy; 2014 Design And Sistem By Muh Farid Zia </p>
	</div>
	</div>
</body>
</html>
<?php
}else{
?>
<?php
header('location:../home.php');
?>
<?php
}
?>
