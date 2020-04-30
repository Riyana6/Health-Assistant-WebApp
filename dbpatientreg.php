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
	$bloodgroup =$_POST['bloodgroup'];
    $address	=$_POST['address'];
    $dob =$_POST['dob'];
    $telephone	=$_POST['telephone'];
    $nic =$_POST['nic'];
    $height =$_POST['height'];
	$weight =$_POST['weight'];
    $imagename=$_FILES["myimage"]["image_path"]; 
    $imagetmp=addslashes (file_get_contents($_FILES['myimage']['imgtmp_name']));
	
	$query = "INSERT INTO patientreg (fullname , bloodgroup , address , dob , telephone ,nic, height , weight,image_path,imgtmp_name)
				VALUES ('{$fname}','{$bloodgroup}','{$address}','{$dob}','{$telephone}','{$nic}','{$height}','{$weight}','{$imagename}','{$imagetmp}')";
				
	
	$result = mysqli_query($connection,$query);
	
	if($result){
		 header ('location:register.php');
		}else{
			echo "database query failed.";
        }
        

        



}





 

?>