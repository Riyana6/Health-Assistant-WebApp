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
            <form action="dbdpatientdetails.php" method="POST">

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
                            User_name
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
                <form name='form' id='' action='dbdpatientdetails.php' method='POST'>



                    <div class="col">
                        <table cellpadding="5">

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
                                <td><label>NIC: </label></td>
                                <td><input type="text" class="form-control" disabled name="nic"
                                        value="<?php echo $nic;?>"></td>
                            </tr>
                            <tr>
                                <td><label>DOB: </label></td>
                                <td><input type="text" class="form-control" disabled name="dob"
                                        value="<?php echo $dob;?>"></td>
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
                        </table>

                        <br>
                        Date <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

                        <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded"
                            style="height:40px; width:200px;" disabled name="date"
                            value="<?php echo $date;?>"><br>

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


                        Advice <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

                        <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" disabled
                            name="advice" value="<?php echo $advice;?>"><br>

                        Attachments <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                            data-placement="right">

                        <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" disabled
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