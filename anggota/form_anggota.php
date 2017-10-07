<?php
session_start();
if(isset($_SESSION['username'])){
	include "../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Form Anggota</title>
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
		margin-left:375px;
		width:900px;
		height:0 auto;
		background:#E5E5E5;
		border-radius:10px;
	}
		#box table {
		margin-top:100px;
		margin-left:10px;
		border-spacing:40px;
	}
		.nm {
		width:412px;
		height:33px;
		border:none;
		padding-left:8px;
		border-radius:5px;
		border:1px solid #ccc;
	}
		.alamat {
		width:412px;
		height:70px;
		border:none;
		border:1px solid #ccc;
		resize:none;
		padding-top:10px;
		padding-left:8px;
		border-radius:5px;
	}
		.sub {
		width:150px;
		height:30px;
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
	<li><a href="form_anggota.php">Tambah Anggota</a></li>
	<li><a href="tampil_anggota2.php">Lihat Anggota</a></li>
	<li><a href="tampil_kelas.php">Lihat Kelas</a></li>
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
	<li><a href="../buku/form_tambah_buku.php">Tambah Buku</a></li>
	<li><a href="../buku/tampil_buku.php">Lihat Buku</a></li>
	<li><a href="../buku/kel_buku.php">Kelasifikasi Buku</a></li>
	</ul>
	</li>
	<li><a href="../about.php">About</a></li>
	</ul>
	</div>
	<div id="box">
	<div class="anggota">
	<form action="tambah_anggota.php" method="post" enctype="multipart/form-data">
	<table class="table" border="0">
	<tr>
	<td>Nama Anggota</td>
	<td>:</td>
	<td><input class="nm" type="text" name="nama_anggota" placeholder="Nama Anggota" required/></td>
	</tr>
	<tr>
	<td>Kelas Anggota</td>
	<td>:</td>
	<td>
	<select name="kelas">
	<option value="BLANK">--Pilih Kelas--</option>
	<?php
			include "../koneksi.php";
            $sql="select * from kls order by kls";
            $query=mysql_query($sql);
            while($select_result=mysql_fetch_assoc($query)){
                echo "<option value='".$select_result['kls']."'>".$select_result['kls']."</option>";    
            }
        ?>
	</select>
	</td>
	</tr>
	<tr>
	<td>Jenis Kelamin</td>
	<td>:</td>
	<td><input class="nm" type="text" name="jk" placeholder="Jenis Kelamin" required/></td>
	</tr>
	<tr>
	<td>Tgl Lahir Anggota</td>
	<td>:</td>
	<td><input class="nm" type="date" name="tgl_lahir" placeholder="Tgl Lahir Anggota" required/></td>
	</tr>
	<tr>
	<td>Alamat Anggota</td>
	<td>:</td>
	<td><textarea class="alamat" name="alamat" placeholder="Alamat Anggota"></textarea></td>
	</tr>
	<tr>
	<td>Foto Anggota</td>
	<td>:</td>
	<td><input class="foto" type="file" name="foto" required/></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td><input class="sub" type="submit" name="tambah" value="Tambah"/></td>
	</tr>
	</table>
	</form>
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
header('location:index.php');
?>
<?php
}
?>
