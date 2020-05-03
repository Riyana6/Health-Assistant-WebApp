<?php
	$connection = mysqli_connect('localhost','root','','healthassistant');
	
	$pass =$_POST['password'];
	$nic	=$_POST['nic'];
    $hashed_password = sha1($pass);

  //  $email = stripcslashes ($email); 
	$hashed_password = stripcslashes ($hashed_password);
	$nic = mysqli_real_escape_string($connection,$nic);
    $hashed_password = mysqli_real_escape_string($connection,$hashed_password);
	
    
	
	$query= "select * from doctorreg where nic='$nic' and password='$hashed_password'";

	$result = mysqli_query($connection,$query);

	
	$row = mysqli_fetch_array($result);
	
	if($row['nic']==$nic && $row['password']== $hashed_password){
		header ('location:Dpatientdetails.php');
	}else {
		echo "login failed.";
	}
?>