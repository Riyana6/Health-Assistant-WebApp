<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    body {
        background-color: #F5EEF8;
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

    <form action="">

        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="hospital-medicine-icon-png-favpng-r1z9JHyesUSmRqNn7WL3xkb7Q.png"
                    class="d-inline-block align-top" alt="" style="width:75px;height:90px;">
                Patient profile
            </a>
            <table class="centerTable">
                <tr>
                    <td></td>
                    <td></td>
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
                    <a class="dropdown-item" href="Dpatientdetails.php">Backt</a>
                    <a class="dropdown-item" href="#">Help&Contact</a>
                    <a class="dropdown-item" href="login.php">LogOut</a>
                </div>
            </div>
        </nav>
    </form>




    <form name='form' action='dbnewpatientreg.php' method='POST' enctype="multipart/form-data">



<div class="col">
    <table cellpadding="5">

        <tr>
            <td><label>Full Name: </label></td>
            <td><input type="text" class="form-control" name="fullname"> </td>
        </tr>
        <tr>
            <td><label>Age: </label></td>
            <td><input type="text" class="form-control" name="age"></td>
        </tr>
        <tr>
            <td><label>Blood Group: </label></td>
            <td><input type="text" class="form-control" name="bloodgroup"></td>
        </tr>
        <tr>
            <td><label>Address: </label></td>
            <td><input type="text" class="form-control" name="address"></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td><input type="text" class="form-control " name="telephone"></td>
        </tr>
        <tr>
            <td><label>NIC: </label></td>
            <td><input type="text" class="form-control" name="nic"></td>
        </tr>
        <tr>
            <td><label>DOB: </label></td>
            <td><input type="text" class="form-control" name="dob"></td>
        </tr>
        <tr>
            <td><label>Gender: </label></td>
            <td><input type="text" class="form-control" name="gender"></td>
        </tr>
        <tr>
            <td><label>Image: </label></td>
            <td><input type="file" class="form-control" name="image"></td>
        </tr>
        <tr>
            <td>Height(cm)</td>
            <td><input type="text" class="form-control " name="height"></td>
        </tr>
        <tr>
            <td>Weight(kg)</td>
            <td><input type='text' class="form-control" name="weight"></td>
        </tr>
    </table>

    <br>
    Date <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

    <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" style="height:40px; width:200px;"
        name="date"><br>

    Doctor nic <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

    <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" style="height:40px; width:200px;"
        name="doctor"><br>

    Syptomes <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

    <input type='text' name="symptomes" id='category' class="shadow p-3 mb-5 bg-white rounded"><br>

    Causes of the disease <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
        data-placement="right">

    <input type='text' name="cause_of_the_disease" id='category' class="shadow p-3 mb-5 bg-white rounded"><br>


    Solution <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

    <input type='text' name="solution" id='category' class="shadow p-3 mb-5 bg-white rounded"><br>

    Approved medication <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

    <input type='text' name="approved_medication" id='category' class="shadow p-3 mb-5 bg-white rounded"><br>




    Attachments <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

    <input type='file' name="attachments" id='category' class="shadow p-3 mb-5 bg-white rounded"><br>

    <div class="buttn">
        <input class="btn btn-primary btn-lg" type="submit" value="Register" name="submit">
        <a href="Dpatientdetails.php"><input class="btn btn-danger btn-lg" type="reset" value="Cancel"></a>

    </div>
</div>
</form>
</body>

</html>