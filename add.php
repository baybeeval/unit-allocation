<?php 
require 'connection.php';

if ($_POST) {
	$course = $_POST['course'];
	$year = $_POST['year'];
	$semester = $_POST['semester'];
	$unit = $_POST['unit'];


	$q ="INSERT INTO `unitsallocation`(`id`, `Unitid`, `course`, `year`, `semsester`) VALUES (NULL,'$unit','$course', '$year', '$semester')";
	if (mysqli_query($conn, $q)) {
	echo "Unit added successfully";
	}else{
		echo "an error occurred".mysql_errno();
	}

}


?>