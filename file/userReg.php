<?php
if(isset($_POST['uregister'])){
	require 'connection.php';
	$uname=$_POST['uname'];
	$uemail=$_POST['uemail'];
	$upass=$_POST['upass'];
	$uphone=$_POST['uphone'];
	$ucity=$_POST['ucity'];
	$ubg=$_POST['ubg'];
	$check_email = mysqli_query($conn, "SELECT uemail FROM user where uemail = '$uemail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:../registration.php?error=".$error );
}else{
	$sql = "INSERT INTO user (uname, uemail, upassword, uphone, ucity, ubg)
	VALUES ('$uname','$uemail', '$upass', '$uphone', '$ucity', '$ubg')";
	if ($conn->query($sql) === TRUE) {
		$msg = "You have successfully registered. Please, login to continue.";
		header( "location:../login.php?msg=".$msg);
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../registration.php?error=".$error );
	}
	$conn->close();
}
}
?>