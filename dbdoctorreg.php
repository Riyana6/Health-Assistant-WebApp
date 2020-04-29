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
	$nic =$_POST['nic'];
    $mbbsid	=$_POST['mbbsid'];
    $workhospital =$_POST['workhospital'];
	$position =$_POST['position'];
	$specialist =$_POST['specialist'];
    $telephone	=$_POST['telephone'];
    $address =$_POST['address'];
	$pass =$_POST['password'];
    $hashed_password = sha1($pass);
	
	$query = "INSERT INTO doctorreg (fullname , age , nic , mbbsid , workhospital , position , specialist , telephone , address , password)
				VALUES ('{$fname}','{$age}','{$nic}','{$mbbsid}','{$workhospital}','{$position}','{$specialist}','{$telephone}','{$address}','{$hashed_password}')";
				
	
	$result = mysqli_query($connection,$query);
	
	if($result){
		 header ('location:register.php');
		}else{
			echo "database query failed.";
		}
}

?>