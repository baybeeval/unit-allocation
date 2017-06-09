<?php 
require'connection.php';

if ($_POST) {
	$firstname=$_POST['firstname'];
	$surname=$_POST['surname'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$q="INSERT INTO `users`(`Id`, `Firstname`, `Surname`, `Username`, `Password`) VALUES (NULL,'$firstname','$surname','$username','$password')";
if (mysqli_query($conn,$q)) {
	echo "Register successfully";
	//header("location: index.php");
}else{
	echo "sorry could not add the user";
	header("loction: index.php");
}

}else{
	echo "nothing was posted!";
}

?>