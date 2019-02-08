<?php
$con= mysqli_connect("localhost","root","","schoolease") or die(mysqli_error($con));
$Address=$_POST['Address'];
$Landmark=$_POST['Landmark'];
$City=$_POST['City'];
$Pincode=$_POST['Pincode'];
$State=$_POST['State'];
$Country=$_POST['Country'];
$GST=$_POST['GST'];
$Account=$_POST['Account'];
$Holder_Name=$_POST['Holder_Name'];
$IFSC=$_POST['IFSC'];
$user_name=$_POST['user_name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$confirm_password=md5($_POST['confirm_password']);
$contact=$_POST['contact'];
$user_registration_query="INSERT INTO users (Address, Landmark, City, Pincode, State, Country, GST, Account, Holder_Name, IFSC, user_name, email, password, confirm_password, contact) VALUES ('$Address','$Landmark','$City','$Pincode','$State','$Country','$GST','$Account','$Holder_Name','$IFSC','$user_name','$email','$password','$confirm_password','$contact')";

$user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "user successfully registered";
?>

