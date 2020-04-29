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
                <img src="hospital-medicine-icon-png-favpng-r1z9JHyesUSmRqNn7WL3xkb7Q.png" width="30" height="30"
                    class="d-inline-block align-top" alt="">
                Patient profile
            </a>

            <a href="" style="margin-left: 75%;">

                <img src="doctor-icon-medical-icon-people-icon-black-symbol-cross-logo-circle-png-clip-art.png"
                    width="30" height="30" class="d-inline-block align-top" alt="">
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


    <form name='form' id='' action='' method='post'>

        <h5>Syptomes <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right"
                title="write here syptomes detial.">
        </h5>
        <div><button><a href="page2.html" target="Frame2">Add New Test</a></button>
        </div>
        <div class="col">
            <h4>First Name</h4>
            <input type="text" class="form-control">
            <h4>Last Name</h4>
            <input type="text" class="form-control">
            <h4>Age</h4>
            <input type="text" class="form-control ">
            <h4>Blood Group</h4>

            <select class="form-control" id="exampleFormControlSelect1">
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB+</option>
                <option>AB-</option>
            </select>
            <h4>Adress</h4>
            <input type="text" class="form-control ">
            <h4>NIC</h4>
            <input type="text" class="form-control ">
            <h4>DOB</h4>
            <input type='text' class="form-control" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-time"></span>
            </span>


        </div>
        <input type='text' name='txt_category' id='category' class="shadow p-3 mb-5 bg-white rounded"
            placeholder='write here syptomes detial.' disabled><br>

        <h5>Causes of the disease <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                data-placement="right" title="write here Causes of the disease detial.">
        </h5>
        <input type='text' name='txt_category' id='category' class="shadow p-3 mb-5 bg-white rounded"
            placeholder='write here Causes of the disease detial.' disabled><br>


        <h5>Solution <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right"
                title="write here Solution detial.">
        </h5>
        <input type='text' name='txt_category' id='category' class="shadow p-3 mb-5 bg-white rounded"
            placeholder='write here Solution detial.' disabled><br>

        <h5>Approved medication <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right"
                title="write here Approved medication detial.">
        </h5>
        <input type='text' name='txt_category' id='category' class="shadow p-3 mb-5 bg-white rounded"
            placeholder='write here Approved medication detial.' disabled><br>


        <h5>Advice <img src="contact_support-24px.svg" alt="" data-toggle="tooltip" data-placement="right"
                title="write here Advice detial.">
        </h5>
        <input type='text' name='txt_category' id='category' class="shadow p-3 mb-5 bg-white rounded"
            placeholder='write here Advice detial.' disabled><br>


        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile04"
                    aria-describedby="inputGroupFileAddon04">
                <label class="custom-file-label" for="inputGroupFile04">Choose file...(image, x-ray, ECG,
                    etc...)</label>
            </div>

        </div>


    </form>


</body>

</html>