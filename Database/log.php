<?php
/*********************************************************************************************************
Author: Md.Masud karim

Description: This script is for check the user input (login information) and redirect to the home page if the informaiton is true

License: Creative common license from 2018-<?php echo date(h); ?>
E-mail: msmasud578@gmail.com
Website: https://www.techtrickpedia.org/
My github: https://www.github.com/master-forbiddenmasud

*********************************************************************************************************/

session_start();
setcookie("file_type","https","/");
if ($_SERVER["REQUEST_METHOD"] == "POST"){

$user = $_POST['user'];
$pass = $_POST['pass'];
if (empty($user) || empty($pass)) {
	echo "<strong>Please fill this form compeletely</strong>";
}else
{
	if($user == "Jibon" && $pass == "jibon169"){
		echo "<center><h4>Your account matched Please wait ..</h4></center>";
		header("Location: content/home.php") or die("Can't redirect the form page");
	} 
	else {
		echo "<strong>Your information are not matched</strong>";
		
	}
}}

session_unset();

?>