<?php
session_start();
    require 'connection.php';
    if(isset($_POST['ulogin'])){
    $uemail=$_POST['uemail'];
    $upass=$_POST['upass'];
    $sql="select * from user where uemail='$uemail' and upassword='$upass'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        $error= "Wrong email or password. Please try again.";
        header( "location:../login.php?error=".$error);
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['uemail']=$row['uemail'];
        $_SESSION['uname']=$row['uname'];
        $_SESSION['uid']=$row['id'];
        $msg= $_SESSION['uname'].' have logged in.';
        header( "location:../abs.php?msg=".$msg);
    } 
  }
?>