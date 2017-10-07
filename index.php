<?php
	$ip = array("");
	if (in_array ($_SERVER['REMOTE_ADDR'], $ip)){ 
	die('IP is blocked');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style type="text/css">
*{
	margin:0;
	paddding:0;
}
	body,html {
	background:#f1f1f1;
}
	#wrapper {
	width:1349px;
	margin:0 auto;
}
	#background {
	width:450px;
	height:200px;
	background:#21D8F8;
	margin:150px auto;
	border-top-left-radius:10px;
	border-top-right-radius:10px;
}
	.profile {
	width:240px;
	height:170px;
	border-radius:50%;
	margin-top:15px;
	margin-left:100px;
}
	#login {
	width:450px;
	height:190px;;
	margin:0 auto;
	background:#1EAFFF;
	position:relative;
	top:-150px;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
}
	#login p {
	margin-top:10px;
	margin-left:16px;
	margin-bottom:10px;
}
	.user {
	border:none;
	width:400px;
	height:32px;
	margin-bottom:13px;
	margin-left:15px;
	border-radius:5px;
	padding-left:8px;
}
	.pass {
	border:none;
	width:400px;
	height:32px;
	border-radius:5px;
	margin-left:15px;
	padding-left:8px;
}
	.sub {
	margin-top:10px;
	margin-left:13px;
}
</style>
</head>
<body>
<div id="wrapper">
<div id="background">
<?php
include ("koneksi.php");

$select="select * from profile";
$select2=mysql_query($select);
while($data=mysql_fetch_array($select2)){
	echo"<img class=\"profile\" src=\"background/".$data['profile']."\">";
}
?>
</div>
<div id="login">
<form action="login.php" method="post">
<table border="0">
<tr>
<td><p>Please Sign in</p></td>
</tr>
<tr>
<td><input type="text" class="user" name="username" placeholder="Username"/></td>
</tr>
<tr>
<td><input type="password"class="pass" name="password" placeholder="Password"/></td>
</tr>
<tr>
<td><input type="submit" class="sub" name="login" value="Login"/></td>
</tr>
</table>
</form>
</div>
</div>
</body>
<html>
