<?php 
require 'connection.php';

if ($_POST) {
	$course = $_POST['course'];
	$year = $_POST['year'];
	$semester = $_POST['semester'];
	$unit = $_POST['unit'];

$p="SELECT `Unitname` FROM `units` WHERE `Unitid`='$unit' ";
$re = mysqli_query($conn, $p);
$row = mysqli_fetch_array($re);
$name = $row['Unitname'];


	$q ="INSERT INTO `unitsallocation`(`id`, `Unitid`, `Unitname`, `course`, `year`, `semsester`) VALUES (NULL,'$unit', '$name', '$course', '$year', '$semester')";
	if (mysqli_query($conn, $q)) {
	echo "Unit added successfully";
	header("location: modules/lecturers/unitsAllocation.php");
	}else{
		echo "an error occurred".mysql_errno();
	}

}


?>