<?php 
session_start();
require 'connection.php';
if (isset($_SESSION['uid'])) {
if(isset($_POST['update'])){
    $id=$_SESSION['uid'];
    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $uphone = $_POST['uphone'];
    $ubg = $_POST['bg'];
    $ucity = $_POST['ucity'];
    $upassword = $_POST['upassword'];
    $update = "UPDATE user SET uname='$uname', uemail='$uemail', upassword='$upassword', uphone='$uphone', ubg='$ubg',ucity='$ucity' WHERE id='$id'";
    if ($conn->query($update) === TRUE) {
        $msg = "Your profile is updated successfully.";
        header( "location:../uprofile.php?msg=".$msg);
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../uprofile.php?error=".$error );
    }
    $conn->close();
}


}elseif (isset($_SESSION['hid'])) {
    if(isset($_POST['update'])){
    $id=$_SESSION['hid'];
    $hname = $_POST['hname'];
    $hemail = $_POST['hemail'];
    $hphone = $_POST['hphone'];
    $hcity = $_POST['hcity'];
    $hpassword = $_POST['hpassword'];
    $update = "UPDATE hospital SET hname='$hname', hemail='$hemail', hpassword='$hpassword', hphone='$hphone', hcity='$hcity' WHERE id='$id'";
    if ($conn->query($update) === TRUE) {
        $msg= "Your profile is updated successfully.";
        header( "location:../hprofile.php?msg=".$msg);
    } else {
        $error= "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../hprofile.php?error=".$error);
    }
    $conn->close();
}
}else{
    header("location:../login.php");
}
?>