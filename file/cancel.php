<?php
include "connection.php";
    $reqid=$_GET['reqid'];
	$sql = "delete from bloodrequest where reqid='$reqid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have cancelled request for the blood.";
	header("location:../sentreq.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("location:../sentreq.php?error=".$error );
    }
    mysqli_close($conn);
?>