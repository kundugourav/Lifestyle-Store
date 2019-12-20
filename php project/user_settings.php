<?php

$connect=mysqli_connect("localhost","root","","lifestyle_store") or die(mysqli_error($connect));
// if (!isset($_SESSION['email'])){
//  header('location: index 1.php');
// }
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$password3=$_POST['password3'];
$query= "SELECT email,password,id FROM user";
$result=mysqli_query($connect,$query) or die(mysqli_error($connect));
$row=mysqli_fetch_array($result);
if($password1==$row[1] && $password2==$password3){
	 $update="UPDATE user SET password = '$password2' WHERE email='$row[0]'";
	 $update_result=mysqli_query($connect, $update) or die(mysqli_error($connect));
	 if($update_result){
	 	echo "updation successful";
	 }else{
	 	echo "error";
	 }
}else{
	echo "updation failed";
}

?>