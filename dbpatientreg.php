<?php


$connection = mysqli_connect('localhost','root','','healthassistant');
	
	//mysqli_connect_error(); mysqli_connect_error();
	
	//Checking the connection
	if(mysqli_connect_error()){
		die('Database connection failed ' . mysqli_connect_error());
	}
	else{
		echo "connection successful";
	}

if(isset($_POST['submit']))
{
	$fname =$_POST['fullname'];
	$age =$_POST['age'];
	$bloodgroup =$_POST['bloodgroup'];
    $address	=$_POST['address'];
    $nic =$_POST['nic'];
	$dob =$_POST['dob'];
    $telephone	=$_POST['telephone'];
    $height =$_POST['height'];
	$weight =$_POST['weight'];
  
	
	$query = "INSERT INTO doctorreg (fullname , age , nic , mbbsid , workhospital , position , specialist , telephone , address , password)
				VALUES ('{$fname}','{$age}','{$nic}','{$mbbsid}','{$workhospital}','{$position}','{$specialist}','{$telephone}','{$address}','{$hashed_password}')";
				
	
	$result = mysqli_query($connection,$query);
	
	if($result){
		 header ('location:doctorreg.php');
		}else{
			echo "database query failed.";
		}
}

?>