<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['submitsearch']))
{
    // id to search
    $nic = $_POST['nic'];
    
    // connect to mysql
    $connection = mysqli_connect('localhost','root','','healthassistant');
    
    // mysql search query
   $query = "select nic, fullname , bloodgroup , address, dob ,gender ,telephone, height, weight , image from patientreg where nic = '$nic' ";
    
    
    
    $result = mysqli_query($connection, $query);
    
    
    
   
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $fullname =$row['fullname'];
        $bloodgroup =$row['bloodgroup'];
        $address	=$row['address'];
        $dob =$row['dob'];
        $gender = $row['gender'];
        $telephone	=$row['telephone'];
        $nic =$row['nic'];
        $height =$row['height'];
        $weight =$row['weight'];
        $image = $row['image'];
       
      }  
    }
    $query1 = "select * from $nic order by date desc limit 1";
    $result1 = mysqli_query($connection, $query1);
    if (!$result1) {
        echo("Error description: " . mysqli_error($connection));
      }
    
    if(mysqli_num_rows($result1) > 0)
    {
      while($row = mysqli_fetch_array($result1))
      {
      
        $date = $row['date'];
        $doctor = $row['doctor'];
        $symptomes = $row['symptomes'];
        $cause_of_the_disease =$row['cause_of_the_disease'];
        $solution = $row['solution'];
        $approved_medication = $row['approved_medication'];
        $attachments = $row['attachments'];
      }  
    }

    $sql1="select date from $nic order by date desc";

    $result0 =mysqli_query($connection, $sql1);


    if($result0 == FALSE) {
    die(mysqli_error());  
    }
    

    
    
    mysqli_close($connection);
    
}

// in the first time inputs are empty
else{
    $fullname ="";
        $bloodgroup ="";
        $address	="";
        $dob ="";
        $gender = "";
        $telephone	="";
        $nic ="";
        $height ="";
        $weight ="";
        $image = "";
        $date = "";
        $doctor = "";
        $symptomes = "";
        $cause_of_the_disease ="";
        $solution = "";
        $approved_medication = "";
        $attachments = "";
}





?>











<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    body {
        background-image: url(Health-Insurance-Quotes-1920x1080.jpg);
        opacity: 90%;
    }

    #category {
        width: 95%;
        height: 10%;
        margin-left: 2.5%;
        color: rgb(164, 164, 209);
    }

    #button {
        margin-left: 85%;
        width: 5%;
    }


    h5 {
        font-style: inherit;
        color: rgb(255, 255, 255);
        margin-left: 2.5%;
    }

    h3 {
        color: rgb(255, 255, 255);
        text-align: center;

    }

    .centerTable {
        margin: 0px auto;
    }
    </style>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <frameset rows="*,*">
        <frame src="frame_1.php">
            <form action="Dpatientdetails.php" method="POST" enctype="multipart/form-data">

                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="hospital-medicine-icon-png-favpng-r1z9JHyesUSmRqNn7WL3xkb7Q.png"
                            class="d-inline-block align-top" alt="" style="width:75px;height:90px;">
                        Patient profile
                    </a>
                    <table class="centerTable">
                        <tr>
                            <td><input class="center-block" type="text" name="nic"
                                    placeholder="Enter patient NIC number."
                                    style="height:50px; width:300px;opacity:0.5;"></td>
                            <td><input class="center-block" type="submit" name="submitsearch" value="Search"
                                    style="height:25px; width:70px;"></td>
                        </tr>
                    </table>



                    <img src="doctor-icon-medical-icon-people-icon-black-symbol-cross-logo-circle-png-clip-art.png"
                        class="d-inline-block align-top" alt="" style="width:75px;height:90px;">


                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="newpatient.php">New Patient</a>
                            <a class="dropdown-item" href="#">Help&Contact</a>
                            <a class="dropdown-item" href="login.php">LogOut</a>
                        </div>
                    </div>
                </nav>
            </form>

            <frame src="index.php?action_type=top" name="topframe" scrolling="no" noresize="noresize" id="topframe"
                title="" />
            <!--<fram src ="index.php?action_type=content" name="maiframe" scrolling="no" noresize="noresize" id="mainframe" />-->

            <frameset cols="225,*" frameborder="no" border="0" framespacing="0">

                <frame src="index.php?action_type=menu" name="menuframe" scrolling="no" noresize="noresize"
                    id="menuframe" title="" />
                <form name='form' id='' action='Dpatientdetails.php' method='POST' enctype="multipart/form-data">



                    <div class="col">
                        <table cellpadding="5">
                            <tr>

                                <td>
                                    <img
                                        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                                </td>

                            </tr>
                            <tr>
                                <td><label>NIC: </label></td>
                                <td><input type="text" class="form-control" disabled name="nic"
                                        value="<?php echo $nic;?>"></td>
                            </tr>
                            <tr>
                                <td><label>Full Name: </label></td>
                                <td><input type="text" class="form-control" disabled name="fullname"
                                        value="<?php echo $fullname;?>"></td>
                            </tr>
                            <tr>
                                <td><label>Telephone: </label></td>
                                <td><input type="text" class="form-control" disabled name="telephone"
                                        value="<?php echo $telephone;?>"></td>
                            </tr>
                            <tr>
                                <td><label>Address: </label></td>
                                <td><input type="text" class="form-control" disabled name="address"
                                        value="<?php echo $address;?>"></td>
                            </tr>

                            <tr>
                                <td><label>DOB: </label></td>
                                <td><input type="text" class="form-control" disabled name="dob"
                                        value="<?php echo $dob;?>"></td>
                            </tr>
                            <tr>
                                <td><label>Gender: </label></td>
                                <td><input type="text" class="form-control" disabled name="gender"
                                        value="<?php echo $gender;?>"></td>
                            </tr>
                            <tr>
                                <td><label>Blood Group: </label></td>
                                <td><input type="text" class="form-control" disabled name="bloodgroup"
                                        value="<?php echo $bloodgroup;?>"></td>
                            </tr>
                            <tr>
                                <td><label>Height(m): </label></td>
                                <td><input type="text" class="form-control" disabled name="height"
                                        value="<?php echo $height;?>"></td>
                            </tr>
                            <tr>
                                <td><label>Weight(kg): </label></td>
                                <td><input type="text" class="form-control" disabled name="weight"
                                        value="<?php echo $weight;?>"></td>
                            </tr>
                        </table><br>
                        <a href="newtest.php"><input class="btn btn-danger btn-lg" type="button" value="newtest"></a>
                        <br>
                        <br>
                        Old Dates <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                            data-placement="right">
                        <td><?php
                            echo "<select name='old_date'>";
                            while ($row = mysqli_fetch_array($result0)) {

                            echo "<option value='" . $row['old_date'] ."'>" . $row['date']."</option>";
                            }
                            echo "</select>";
                            ?></td><td><input class="center-block" type="submit" name="searchdate" value="Search"
                            style="height:25px; width:70px;"></td><br><br>
                        Date <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

                        <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded"
                            style="height:40px; width:200px;" disabled name="date" value="<?php echo $date;?>"><br>
                        Doctor <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

                        <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded"
                            style="height:40px; width:200px;" disabled name="doctor" value="<?php echo $doctor;?>"><br>

                        Syptomes <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                            data-placement="right">

                        <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" disabled
                            name="symptomes" value="<?php echo $symptomes;?>"><br>

                        Causes of the disease <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                            data-placement="right">

                        <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" disabled
                            name="cause_of_the_disease" value="<?php echo $cause_of_the_disease;?>"><br>


                        Solution <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                            data-placement="right">

                        <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" disabled
                            name="solution" value="<?php echo $solution;?>"><br>

                        Approved medication <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                            data-placement="right">

                        <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" disabled
                            name="approved_medication" value="<?php echo $approved_medication;?>"><br>

                        Attachments <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                            data-placement="right">

                        <input type='file' id='category' class="shadow p-3 mb-5 bg-white rounded" disabled
                            name="attachments" value="<?php echo $attachments;?>"><br>

                    </div>
                </form>



                <frame class="framebordertop" src="index.php?action_type=login-info" name="mainframe" scrolling="auto"
                    noresize="noresize" id="mainframe" title="" />

            </frameset>

    </frameset>

    <noframes>

    </noframes>

    </frameset>


</body>

</html>