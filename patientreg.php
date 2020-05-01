<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient'sProfile</title>
    <link rel="stylesheet" href="pstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

<body>
    <hr>
    <h5 style="text-align: center;">Patient's Profile</h5>

    <section id="formdetails">
        <div class="container">
            <form action="dbpatientreg.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <table style=cellpadding="5">
                            <tr>
                                <td>Full Name</td>
                                <td><input type="text" class="form-control" name="fullname"></td>
                            </tr>
                            <tr>
                                <td> Telephone</td>
                                <td><input type="text" class="form-control " name="telephone"></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><input type="text" class="form-control " name="address"></td>
                            </tr>
                            <tr>
                                <td>NIC</td>
                                <td><input type="text" class="form-control " name="nic"></td>
                            </tr>
                            <tr>
                                <td>DOB</td>
                                <td><input type='text' class="form-control " name="dob"></td>
                            </tr>
                            <tr>
                                <td>Blood Group</td>
                                <td><input type="text" class="form-control" name="bloodgroup"></td>
                            </tr>
                            <tr>
                                <td>Height(cm)</td>
                                <td><input type="text" class="form-control " name="height"></td>
                            </tr>
                            <tr>
                                <td>Weight(kg)</td>
                                <td><input type='text' class="form-control" name="weight"></td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><input name="image" type="file">
                                </td>
                            </tr>


                        </table>


                        <form name='form' id='' action='' method='post'>
                            <div>
                                <table cellpadding="5">

                                    <tr>
                                        <td><label>Doctor Name: </label></td>
                                        <td><input type="text" class="form-control" disabled></td>
                                    </tr>
                                </table>
                                <h5>Date <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                                        data-placement="right">

                                    <input type='text' id='category' class="shadow p-3 mb-5 bg-white rounded"
                                        style="height:40px; width:200px;">
                                    <h5>Syptomes <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                                            data-placement="right" title="write here syptomes detial.">
                                    </h5>
                                    <input type='text' name='txt_category' id='category'
                                        class="shadow p-3 mb-5 bg-white rounded"
                                        placeholder='write here syptomes detial.'><br>

                                    <h5>Causes of the disease <img src="contact_support-24px.svg" alt=""
                                            data-toggle="tooltip" data-placement="right"
                                            title="write here Causes of the disease detial.">
                                    </h5>
                                    <input type='text' name='txt_category' id='category'
                                        class="shadow p-3 mb-5 bg-white rounded"
                                        placeholder='write here Causes of the disease detial.'><br>

                                    <h5>Solution <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                                            data-placement="right" title="write here Solution detial.">
                                    </h5>
                                    <input type='text' name='txt_category' id='category'
                                        class="shadow p-3 mb-5 bg-white rounded"
                                        placeholder='write here Solution detial.'><br>

                                    <h5>Approved medication <img src="contact_support-24px.svg" alt=""
                                            data-toggle="tooltip" data-placement="right"
                                            title="write here Approved medication detial.">
                                    </h5>
                                    <input type='text' name='txt_category' id='category'
                                        class="shadow p-3 mb-5 bg-white rounded"
                                        placeholder='write here Approved medication detial.'><br>


                                    <h5>Advice <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                                            data-placement="right" title="write here Advice detial.">
                                    </h5>
                                    <input type='text' name='txt_category' id='category'
                                        class="shadow p-3 mb-5 bg-white rounded"
                                        placeholder='write here Advice detial.'><br>


                                    <div class="custom-file">
                                        <h5>Attachments <img src="contact_support-24px.svg" alt="" data-toggle="tooltip"
                                                data-placement="right">
                                        </h5>
                                        <input type="file" class="custom-file-input" id="inputGroupFile04"
                                            aria-describedby="inputGroupFileAddon04">
                                        <label class="custom-file-label" for="inputGroupFile04">Choose file...(image,
                                            x-ray, ECG,
                                            etc...)</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button"
                                            id="inputGroupFileAddon04">Upload</button>

                                    </div>
                            </div>

                            <div>
                                <button type="button" style="margin-left: 45%; width: 10%;" class="btn btn-success"
                                    data-toggle="modal" data-target="#exampleModal">
                                    Save
                                </button></br>
                            </div>


                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Save and change</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            This details all correct.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

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