<?php
$host="localhost";
$user="root";
$pass="";
$db="perpus";
mysql_connect($host,$user,$pass)or die("Tidak Terkoneksi");
mysql_select_db($db)or die("Tidak Terkoneksi");
?>
