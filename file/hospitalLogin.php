<?php
session_start();
    require 'connection.php';
    if(isset($_POST['hlogin'])){
    $hemail=$_POST['hemail'];
    $hpass=$_POST['hpass'];
    $sql="select * from hospital where hemail='$hemail' and hpassword='$hpass';";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        $error= "Wrong email or password. Please try again.";
        header( "location:../login.php?error=".$error);
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['hemail']=$row['hemail'];
        $_SESSION['hname']=$row['hname'];
        $_SESSION['hid']=$row['id'];
        $msg= $_SESSION['hname'].' have logged in.';
        header( "location:../reqblood.php?msg=".$msg);
    } 
  }
?>