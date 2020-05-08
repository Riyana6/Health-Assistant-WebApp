<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor'sProfile</title>
    <link rel="stylesheet" href="dstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <hr>
    <h4 style="text-align: center;">Doctor's Profile</h4>

    <section id="formdetails">
        <div class="container">
            <form action="dbdoctorreg.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <table style=cellpadding="5">
                            <tr>
                                <td>Full Name</td>
                                <td><input type="text" class="form-control" name="fullname"></td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td><input type="text" class="form-control " name="age"></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><input type="text" class="form-control " name="gender"></td>
                            </tr>
                            <tr>
                                <td>NIC</td>
                                <td><input type="text" class="form-control " name="nic"></td>
                            </tr>
                            <tr>
                                <td>MBBS ID</td>
                                <td><input type="text" class="form-control " name="mbbsid"></td>
                            </tr>
                            <tr>
                                <td>Work Hospital</td>
                                <td><input type="text" class="form-control " name="workhospital"></td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td><input type="text" class="form-control " name="position"></td>
                            </tr>
                            <tr>
                                <td>Specialist</td>
                                <td><input type="text" class="form-control " name="specialist"></td>
                            </tr>
                            <tr>
                                <td>Telephone</td>
                                <td><input type="text" class="form-control " name="telephone"></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><input type="text" class="form-control " name="address"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="text" class="form-control " name="password"></td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><input name="image" type="file"></td>

                            </tr>
                        </table>

                        <div class="buttn">
                            <input class="btn btn-primary btn-lg" type="submit" value="Register" name="submit">
                            <a href="register.php"><input class="btn btn-danger btn-lg" type="reset" value="Cancel"></a>

                        </div>

                    </div>
                </div>
            </form>
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>