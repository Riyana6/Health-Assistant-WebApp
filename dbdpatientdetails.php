<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['submitsearch']))
{
    // id to search
    $nic = $_POST['nic'];
    
    // connect to mysql
    $connection = mysqli_connect('localhost','root','','healthassistant');
    
    // mysql search query
    $query = "SELECT * FROM `patientreg` WHERE `nic` = $nic LIMIT 1";
    $query1 = "SELECT * FROM `$nic`";
    
    $result = mysqli_query($connect, $query);
    $result1 = mysqli_query($connect, $query1);
    
    // if id exist 
    // show data in inputs
    if((mysqli_num_rows($result) > 0)&&(mysqli_num_rows($result) > 0))
    {
      while (($row = mysqli_fetch_array($result))&&($row = mysqli_fetch_array($result)))
      {
        $fullname =$row['fullname'];
        $bloodgroup =$row['bloodgroup'];
        $address	=$row['address'];
        $dob =$row['dob'];
        $telephone	=$row['telephone'];
        $nic =$row['nic'];
        $height =$row['height'];
        $weight =$_POST['weight'];
        $image = $_FILES['image']['name'];
        $date = $_POST['date'];
        $symptomes = $_POST['symptomes'];
        $cause_of_the_disease =$_POST['cause_of_the_disease'];
        $solution = $_POST['solution'];
        $approved_medication = $_POST['approved_medication'];
        $attachments = $_FILES['attachments']['name'];
      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
            $fname = "";
            $lname = "";
            $age = "";
    }
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
}

// in the first time inputs are empty
else{
    $fname = "";
    $lname = "";
    $age = "";
}


?>