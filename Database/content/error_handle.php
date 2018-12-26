<?php
function customError($errno,$errstr) {

	echo "<br>Error: </b> [$errno] $errstr<br>";
	echo "Ending Script";
	die();
}
set_error_handler("customError");
//Trigger the error
trigger_error();

?>