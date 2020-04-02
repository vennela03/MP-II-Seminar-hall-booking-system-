<?php

session_start();
$errors=array();

//connect to database
$db=mysqli_connect('localhost','root','','registration');

//if the register button is clicked
if (isset($_POST['confirm'])) {
	
$uname=$_POST['uname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$nameofevent=$_POST['nameofevent'];

		if (count($errors)==0) {
			 $sql = "INSERT INTO user2(username,email,phone,nameofevent) VALUES ('$uname','$email','$phone','$nameofevent')";
		mysqli_query($db,$sql);
		

	}
	
}
?>