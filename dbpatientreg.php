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
    $image = $_FILES['image']['name'];
  	// Get text
  	

  	// image file directory
  	$target = "images/".basename($image);
    
   
   
    $msg = "";
	$query = "INSERT INTO patientreg (fullname , bloodgroup , address , dob , telephone ,nic, height , weight,image,image_text)
				VALUES ('{$fname}','{$bloodgroup}','{$address}','{$dob}','{$telephone}','{$nic}','{$height}','{$weight}','{$image}','{$image_text}')";
				
	
                mysqli_query($connection, $query);

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    header ('location:register.php');
                }else{
                    $msg = "Failed to upload";
                }

	
        

        



}





 

?>