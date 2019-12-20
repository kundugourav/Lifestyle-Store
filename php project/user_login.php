<?php

$connect=mysqli_connect("localhost","root","","lifestyle_store") or die(mysqli_error($connect));
session_start();
$email=mysqli_real_escape_string($connect, $_POST['email']);
$password=$_POST['password'];
md5($password);
$query= "SELECT id, email, password FROM user";
$result=mysqli_query($connect,$query) or die(mysqli_error($connect));
$var=0;
if(mysqli_num_rows($result)==0){
	echo "no user found";
}else{
	while ($row=mysqli_fetch_array($result)) {
		if ($email==$row[1] && $password==$row[2]) {
			$var=1;
			$_SESSION['email']=$email;
			$_SESSION['id']=mysqli_insert_id($connect);
			if(isset($_SESSION['id'])){
			header('location: product 1.php');
			}
		}
	}
	if ($var==0) {
		echo "incorrect email or password";
	}
}

?>