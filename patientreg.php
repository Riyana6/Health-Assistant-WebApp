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
    <h5 style="text-align: center;">Patient's Profile</h5>

    <section id="formdetails">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col">
                        Full Name
                        <input type="text" class="form-control" name="fullname">
                        Telephone
                        <input type="text" class="form-control " name="telephone">
                        Address
                        <input type="text" class="form-control " name="address">
                        NIC
                        <input type="text" class="form-control " name="nic">
                        DOB
                        <input type='text' class="form-control " name="dob">
                        Blood Group

                        <select class="form-control" id="exampleFormControlSelect1" name="bloodgroup">
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                        </select>
                        Height(cm)
                        <input type="text" class="form-control " name="height">
                        Weight(kg)
                        <input type='text' class="form-control" name="weight">



                    </div>
                    <div class="col">
                        <img src="images/brand.png" class="ppic" alt="Patient's pro pic"><br>

                    
                        <div class="buttn">
                            <input class="btn btn-primary btn-lg" type="submit" value="Register" name="submit">
                            <a href="register.php"><input class="btn btn-danger btn-lg" type="reset" value="Cancel"></a>

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