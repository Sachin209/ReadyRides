<?php 
include_once "config.php";


$Username =$_POST("username");
$MobileNo =$_POST("mobile_no");
$Email =$_POST("email");
$NIC =$_POST("nic");
$Password =$_POST("pwd");
$DrivingLicenceNo =$_POST("licencen_no");

$sql = "insert into user(User_name,Mobile_No,Email,password,NIC,Driving_Licence_No)values('$Username','$MobileNo','$Email','$Password ','$NIC','$DrivingLicenceNo')";

if(mysqli_query($conn,$sql)){
	header("Location:driver.html");
	
}
else{
echo "<script>alert ('Error in insertinh records')</script>";
}

mysqli_close($conn);

?> 
