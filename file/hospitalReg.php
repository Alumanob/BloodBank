<?php
require 'connection.php';
if(isset($_POST['hregister'])){
	$hname=$_POST['hname'];
	$hemail=$_POST['hemail'];
	$hpass=$_POST['hpass'];
	$hphone=$_POST['hphone'];
	$hcity=$_POST['hcity'];
	$check_email = mysqli_query($conn, "SELECT hemail FROM hospital where hemail = '$hemail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:../registration.php?error=".$error );
}else{
	$sql = "INSERT INTO hospital (hname, hemail, hpassword, hphone, hcity)
	VALUES ('$hname','$hemail', '$hpass', '$hphone', '$hcity')";
	if ($conn->query($sql) === TRUE) {
		$msg = 'You have successfully registered. Please, login to continue.';
		header( "location:../login.php?msg=".$msg );
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../registration.php?error=".$error );
	}
	$conn->close();
}
}
?>