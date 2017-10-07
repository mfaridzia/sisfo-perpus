<?php
session_start();
if(isset($_SESSION['username'])){
	include "koneksi.php";
?>
<form action="insert_login.php" method="post">
<input type="text" name="username">
<input type="password" name="password">
<input type="submit" value="Register">
</form>
<?php
}else{
?>
<?php
header("location:home.php");
?>
<?php
}
?>
