<?php
include("config.php");
	if(isset($_POST['submit']))
	{
		$id=$_POST['uid'];
		$name=$_POST['uname'];
		$email=$_POST['uemail'];
		$phone=$_POST['uphone'];
		$pass=$_POST['upass'];

		$result=mysqli_query($mysqli,"INSERT into userregistration (name, password, phoneno, email) values('$name','$pass','$phone','$email')");

		if($result)
		{
			echo "\n Data inserted successfuly";
		}

		
		else
		{
			echo "failed to insert data";
		}
		
	}
?>