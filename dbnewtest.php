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
    


    $date = $_POST['date'];
    $doctor = $_POST['doctor'];
    $nic = $_POST['nic'];
    $symptomes = $_POST['symptomes'];
    $cause_of_the_disease =$_POST['cause_of_the_disease'];
    $solution = $_POST['solution'];
    $approved_medication = $_POST['approved_medication'];
    $attachments = $_FILES['attachments']['name'];


    if(isset($_POST['submit']))
    {
	
                
        $msg1 = "";
        $target2 = "files/".basename($attachments);
        
        $query2 = "insert into $nic (nic , date ,doctor, symptomes ,  cause_of_the_disease , solution ,approved_medication, attachments)
        values ('{$nic}','{$date}','{$doctor}','{$symptomes}','{$cause_of_the_disease}','{$solution}','{$approved_medication}','{$attachments}')";
        


        if(mysqli_query($connection, $query2))
            {
                
            
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
                    echo "ERROR: Could not able to execute $query2. " . mysqli_error($connection);
                }
            }
    ?>