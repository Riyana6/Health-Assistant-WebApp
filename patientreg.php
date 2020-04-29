<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient'sProfile</title>
    <link rel="stylesheet" href="pstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <hr>
    <h3 style="text-align: center;">Patient's Profile</h3>

    <section id="formdetails">
        <div class="container">
            <form>
                <div class="row">
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
                    <div class="col">
                        <img src="images/brand.png" class="ppic" alt="Doctor's pro pic">
                        <div class="buttn">
                            <input class="btn btn-primary btn-lg" type="submit" value="Register">
                            <input class="btn btn-danger btn-lg" type="reset" value="Cancel">

                        </div>

                    </div>
                </div>
            </form>
        </div>

    </section>

    <script type="text/javascript">
    $(function() {
        $('#datetimepicker3').datetimepicker({
            format: 'LT'
        });
    });
    </script>
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