<?php
include("connection.php");



if(isset($_POST["signup"])){

$uname=$_POST['uname'];
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$password=$_POST['password'];


	$res=mysqli_query($con,"insert into users(username,age,mobile,gender,password) values('$uname','$age','$mobile',
		'$gender','$password') ");

		if($res>0){
			echo $res;

			echo "<script>alert('You are Registered Now Sign In ')</script>";
			echo "<script>window.location.href='register.php'</script>";

		}
		else{
			echo "not inserted";
		}



}


?>