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
	$gender =$_POST['gender'];
	$nic =$_POST['nic'];
    $mbbsid	=$_POST['mbbsid'];
    $workhospital =$_POST['workhospital'];
	$position =$_POST['position'];
	$specialist =$_POST['specialist'];
    $telephone	=$_POST['telephone'];
    $address =$_POST['address'];
	$pass =$_POST['password'];
    $hashed_password = sha1($pass);
    $image = $_FILES['image']['name'];
    // Get text
    

    // image file directory
    $target = "images/".basename($image);
  
 
 
  $msg = "";
	
	$query = "INSERT INTO doctorreg (nic, fullname , age ,gender, mbbsid , workhospital , position , specialist , telephone , address , password,image)
				VALUES ('{$nic}','{$fname}','{$age}','{$gender}','{$mbbsid}','{$workhospital}','{$position}','{$specialist}','{$telephone}','{$address}','{$hashed_password}','{$image}')";
				
	
	$result = mysqli_query($connection,$query);
	
	
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header ('location:register.php');
    }else{
        $msg = "Failed to upload";
    }

}

?>