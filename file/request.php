<?php
session_start(); 
require 'connection.php';
if(!isset($_SESSION['uid']))
{
	header('location:../login.php');
}
else {
	if(isset($_POST['request'])){
		$hid = $_POST['hid'];
		$uid = $_SESSION['uid'];
		$bg = $_POST['bg'];
		$check_data = mysqli_query($conn, "SELECT reqid FROM bloodrequest where hid='$hid' and uid='$uid'");
		if(mysqli_num_rows($check_data) > 0){
			$error= 'You have already requested for blood sample from this Hospital.';
			header( "location:../abs.php?error=".$error );
}else{
		$sql="INSERT INTO bloodrequest (bg, hid, uid) VALUES ('$bg', '$hid', '$uid')";
		if ($conn->query($sql) === TRUE) {
			$msg = 'You have requested for blood group '.$bg.'. Our team will contact you soon.';
			header( "location:../sentreq.php?msg=".$msg);
		} else {
			$error = "Error: " . $sql . "<br>" . $conn->error;
            header( "location:../abs.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>