<?php

$connect=mysqli_connect("localhost","root","","lifestyle_store") or die(mysqli_error($connect));
session_start();
$name=mysqli_real_escape_string($connect, $_POST['name']);
$email=mysqli_real_escape_string($connect, $_POST['email']);
$password=$_POST['password'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$address=$_POST['address'];
$var1=0;
$var2=0;
$query= "SELECT email FROM user";
$result=mysqli_query($connect,$query) or die(mysqli_error($connect));
if(mysqli_num_rows($result)==0){
	$user_registration="INSERT INTO user (name,email,password,phone,city,address) VALUES ('$name', '$email', '$password', '$phone', '$city', '$address')";
	$user_registration_submit=mysqli_query($connect, $user_registration) or die(mysqli_error($connect));
	$_SESSION['id']=mysqli_insert_id($connect);
			if(isset($_SESSION['id'])){
			$_SESSION['email']=$email;
			$_SESSION['id']=mysqli_insert_id($connect);
			header('location: product 1.php');
			}
	// echo "successfully registered";
	$var2=1;
}else{
	while ($row=mysqli_fetch_array($result)) {
		if ($email==$row[0]) {
			echo "email already exists";
			die(mysqli_error($connect));
			$var1=1;
			}
		}
	}
if($var1==0&&$var2==0){
$user_registration="INSERT INTO user (name,email,password,phone,city,address) VALUES ('$name', '$email', '$password', '$phone', '$city', '$address')";
$user_registration_submit=mysqli_query($connect, $user_registration) or die(mysqli_error($connect));
$_SESSION['id']=mysqli_insert_id($connect);
			if(isset($_SESSION['id'])){
			$_SESSION['email']=$email;
			$_SESSION['id']=mysqli_insert_id($connect);
			header('location: product 1.php');
			}
// echo "successfully registered";
}

?>