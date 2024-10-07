<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emp Application Form</title>
    <link rel="stylesheet" href="css/index.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-fluid">
        <div class="container con-form">
            <div class="row mt-5">
                <p class="text-center txt-head">Employee Application Form</p>
            </div>
            <form action="" class="formEmp mt-2">
                <div class="row">

                    <div class="col-6">
                    <input type="text" class="form-control" name="txt-id" id="txt-id" placeholder="id" hidden>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="txt-name" id="txt-name" placeholder="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Country</label>
                            <input type="text" class="form-control" name="txt-country" id="txt-country" placeholder="Country">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">City</label>
                            <input type="text" class="form-control" name="txt-city" id="txt-city" placeholder="city">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Department</label>
                            <input type="text" class="form-control" name="txt-dept" id="txt-dept" placeholder="Department">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Designation</label>
                            <input type="text" class="form-control" name="txt-designation" id="txt-designation" placeholder="designation">

                        </div>

                    </div>
                    <div class="btn">
                        <div class="btn btn-primary" id="btn-add">Add Employee</div>
                        <div class="btn btn-primary" id="btn-cancel">Cancel</div>
                    </div>
            </form>

        </div>
        <div class="row mt-2 p-0 row-form">
            <div class="col-12 p-0">
                <table class="table table-striped" id="tblData">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>#</td>
                            <td>id</td>
                            <td>Name</td>
                            <td>Country</td>
                            <td>City</td>
                            <td>Department</td>
                            <td>Designation</td>
                            <td ><i class="fa-solid fa-pen-nib row-update"></i></td>
                            <td><i class="fa-solid fa-trash row-delete"></i></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>



<!-- script -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="js/index.js?<?php echo time(); ?>"></script>

</html>