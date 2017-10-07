<?php
session_start();
if(isset($_SESSION['username'])){
	include "koneksi.php";
?>
<?php
include "koneksi.php";

$profile=$_FILES['profile']['name'];
$up="background/";
$src=$up.$profile;
$upload=move_uploaded_file($_FILES['profile']['tmp_name'],$src);
$sql="insert into profile(profile)values('$profile')";
$query=mysql_query($sql);
if($query)
{
		echo "sukses";
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
