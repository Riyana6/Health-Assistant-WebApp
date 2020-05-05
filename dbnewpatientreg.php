<?php


$connection = mysqli_connect('localhost','root','','healthassistant');
	
	//mysqli_connect_error(); mysqli_connect_error();
	
	//Checking the connection
    if(mysqli_connect_error())
    {
		die('Database connection failed ' . mysqli_connect_error());
	}
    else
    {
		echo "connection successful";
    }
    

    $fullname =$_POST['fullname'];
	$bloodgroup =$_POST['bloodgroup'];
    $address	=$_POST['address'];
    $dob =$_POST['dob'];
    $telephone	=$_POST['telephone'];
    $nic =$_POST['nic'];
    $height =$_POST['height'];
	$weight =$_POST['weight'];
    $image = $_FILES['image']['name'];
    $date = $_POST['date'];
    $symptomes = $_POST['symptomes'];
    $cause_of_the_disease =$_POST['cause_of_the_disease'];
    $solution = $_POST['solution'];
    $approved_medication = $_POST['approved_medication'];
    $attachments = $_FILES['attachments']['name'];


    if(isset($_POST['submit']))
    {
	
  	
        $target1 = "images/".basename($image);
      
    
        $msg = "";
	    $query1 = "INSERT INTO patientreg (fullname , bloodgroup , address , dob , telephone ,nic, height , weight,image,date)
				VALUES ('{$fullname}','{$bloodgroup}','{$address}','{$dob}','{$telephone}','{$nic}','{$height}','{$weight}','{$image}','{$date}')";
				
	
        mysqli_query($connection, $query1);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target1)) 
        {
            $msg = "query successfull";
        }
        else
        {
            $msg = "Failed to query";
        }
           
                
        $msg1 = "";
        $target2 = "files/".basename($attachments);
        $sql = "CREATE TABLE patient as SELECT *
                FROM nicno WHERE nic='$nic'";

        if(mysqli_query($connection, $sql))
            {
                $query2 = "INSERT INTO patient (nic , date , symptomes ,  cause_of_the_disease , solution ,approved_medication, attachments)
                            VALUES ('{$nic}','{$date}','{$symptomes}','{$cause_of_the_disease}','{$solution}','{$approved_medication}','{$attachments}')";
                            
                
                mysqli_query($connection, $query2);
            
                if (move_uploaded_file($_FILES['attachments']['tmp_name'], $target2)) 
                    {
                        header ('location:Dpatientdetails.php');
                    }
                    else
                    {
                        $msg1 = "Failed to query";
                    }
                } 
                else
                {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
                }
            }
    ?>