<?php
include "connection.php";
    $reqid=$_GET['reqid'];
	$status = "Accepted";
	$sql = "update bloodrequest SET status = '$status' WHERE reqid = '$reqid'";
    if (mysqli_query($conn, $sql)) {
	$msg="You have accepted the request.";
	header("location:../reqblood.php?msg=".$msg );
    } else {
    $error= "Error changing status: " . mysqli_error($conn);
    header("location:../reqblood.php?error=".$error );
    }
    mysqli_close($conn);
?>