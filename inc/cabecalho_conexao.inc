<?php
	$con = mysqli_connect("localhost", "Jhenifer", "teste");
	if(!$con) {
		echo mysqli_connect_error($con);
	}

	$db = mysqli_select_db($con, "animais");
	if(!$db) {
		echo mysqli_error($con);
	}
?>