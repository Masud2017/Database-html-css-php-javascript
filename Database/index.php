<!DOCTYPE html>
<html>
<head lang = "EN-US">
<title>Max power | DATA BASE</title>
<link rel = "stylesheet" type = "text/css" href = "style.css">
<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
<meta name = "charset" content = "utf-8">
<script>
if($_SERVER["REQUEST_METHOD"] == '0')
{
document.getElementById("demo").innerhtml("This document is now under construction");
}
</script>
</head>
<body>
<center><h1 class = "heading">Data base login panel</h1></center>
<div class = "frame">
<form method = "post" action = "log.php">
<label><h3><center>Please log in</center></h3><br><br></label>
<b>Input your user name: </b><br>
<input type = "text" name = "user" class = "widthe" placeholder = "Enter your username"><br>
<b>Input your pass : </b> <br>
<input type = "password" name = "pass" class = "widthe" placeholder = "Enter password"><br><br><br>
<b><input type = "submit" value = "Authorize" class = "width" color ="white"></b>
 <br>
 </form>
 </div>

<div class = "footer">
	This website is created by Md.Masud karim. Copyright &copy from 2018-<?php echo date("Y");?>
</div>
<script>
window.alert("Welcome to this website");
</script>
</body>
</html>