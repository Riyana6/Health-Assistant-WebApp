<?php
	$connection = mysqli_connect('localhost','root','','healthassistant');
	
	$nic	=$_POST['nic'];
   

	$nic = mysqli_real_escape_string($connection,$nic);
    
    
	
	$query= "select * from patientreg where nic='$nic'";

	$result = mysqli_query($connection,$query);

	
	$row = mysqli_fetch_array($result);
	
	if($row['nic']==$nic){
		header ('location:Vpatientdetails.php');
	}else {
		echo "login failed.";
	}
?>