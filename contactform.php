<?php
include("config.php");
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phno=$_POST['phno'];
		$msg=$_POST['message'];
	

		$result=mysqli_query($mysqli,"INSERT into contactform(name, email, phoneno, message) values('$name','$email','$phno','$msg')");

		if($result)
		{
			echo "\n Data inserted into contact form table successfuly";
		}

		
		else
		{
			echo "failed to insert data";
		}
		
	}
?>