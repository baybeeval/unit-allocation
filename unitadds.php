<?php 
require'connection.php';

if ($_POST['unitid'] && $_POST['Unitname']) {
	$unitid=$_POST['unitid'];
	$unitname=$_POST['Unitname'];
	$course=$_POST['Course'];
	$year=$_POST['Year'];
	$semester=$_POST['Semester'];

	$q="INSERT INTO `units`(`id`,`Unitid`, `Unitname` ,`Course`, `Year`, `Semester`) VALUES (NULL,'$unitid','$unitname','$course','$year','$semester' )";
if (mysqli_query($conn,$q)) {
	echo "Units added successfully";
	header("location: units.php");
}else{
	echo "sorry could not add the unit";
	header("location: units.php");
}

}else{
	echo "nothing was posted!";
}

?>
 