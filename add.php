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

$queryValidate="SELECT * FROM `unitsallocation` WHERE `Unitid`='$unit' ";
$validateResult=mysqli_query($conn, $queryValidate);
if (mysqli_num_rows($validateResult)>0) {
	
	echo "unit already added!";
}else{
	$q ="INSERT INTO `unitsallocation`(`id`, `Unitid`, `Unitname`, `course`, `year`, `semsester`) VALUES (NULL,'$unit', '$name', '$course', '$year', '$semester')";
	if (mysqli_query($conn, $q)) {
	echo "<script>alert('Unit added successfully')</script>";
	 echo "<script>window.open('modules/lecturers/unitsAllocation.php','_self')</script>";
	}else{
		echo "an error occurred".mysql_errno();
	}


}

}


?>