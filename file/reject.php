<?php
include "connection.php";
    $reqid=$_GET['reqid'];
	$status = "Rejected";
	$sql = "update bloodrequest SET status = '$status' WHERE reqid = '$reqid'";
    if (mysqli_query($conn, $sql)) {
	$msg="You have Rejected the request.";
	header("location:../reqblood.php?msg=".$msg );
    } else {
    $error= "Error changing status: " . mysqli_error($conn);
    header("location:../reqblood.php?error=".$error );
    }
    mysqli_close($conn);
?>