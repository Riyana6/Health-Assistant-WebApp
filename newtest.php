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
                <img src="hospital-medicine-icon-png-favpng-r1z9JHyesUSmRqNn7WL3xkb7Q.png" width="50" height="50"
                    class="d-inline-block align-top" alt="">
                Patient profile
            </a>

            <a href="" style="margin-left: 55%;">

                <img src="doctor-icon-medical-icon-people-icon-black-symbol-cross-logo-circle-png-clip-art.png"
                    width="100" height="100" class="d-inline-block align-top" alt="">
            </a>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    User_name
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Help&Contact</a>
                    <a class="dropdown-item" href="#">LogOut</a>
                </div>
            </div>
        </nav>
    </form>
    <h3 class="animated pulse"><u>New Test</u></h3>

    <form name='form' id='' action='dbnewtest.php' method='post' enctype="multipart/form-data">
        <div>

            Date <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right" value="20200101">

            <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" style="height:40px; width:200px;"
                name="date" value=""><br>
            Doctor NIC<img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

            <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" style="height:40px; width:200px;"
                name="doctor" value=""><br>
            Patient NIC <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

            <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" style="height:40px; width:200px;"
                name="nic" value=""><br>

            Syptomes <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

            <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" name="symptomes" value=""><br>

            Causes of the disease <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                data-placement="right">

            <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" name="cause_of_the_disease"
                value=""><br>


            Solution <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

            <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" name="solution" value=""><br>

            Approved medication <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

            <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded" name="approved_medication"
                value=""><br>

            Attachments <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right">

            <input type='file' id='category' class="shadow p-3 mb-5 bg-white rounded" name="attachments" value=""><br>

        </div>

        <div>
            <table class="centerTable">
                <tr>

                    <td><input class="center-block" type="submit" name="submit" value="save"
                            style="height:25px; width:70px;"></td>
                </tr>
            </table>
        </div>


    </form>

</body>

</html>