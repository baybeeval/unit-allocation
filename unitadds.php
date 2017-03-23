<?php 
require'connection.php';

if ($_POST['Unitid'] && $_POST['Unitname']) {
	$unitid=$_POST['Unitid'];
	$unitname=$_POST['Unitname'];

	$q="INSERT INTO `units`(`id`,`Unitid`, `Unitname`) VALUES (NULL,'$unitid','$unitname')";
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
 