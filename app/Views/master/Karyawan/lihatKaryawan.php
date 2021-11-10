<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>User</title>
    </head>

    <body>
        <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="col-5">
                    <div class="form-group mb-3">
                        <label class="text-primary">Username</label> <br>
                        <label class="text-secondary"><?= $username_user ?></label>
                    </div>

                    <div class="form-group mb-3">
                        <label class="text-primary">Name</label> <br>
                        <label class="text-secondary"><?= $name_user ?></label>
                    </div>

                    <div class="form-group mb-3">
                        <label class="text-primary">E-Mail</label> <br>
                        <label class="text-secondary"><?= $email_user ?></label>
                    </div>

                    <div class="form-group mb-3">
                        <label class="text-primary">Phone Number</label> <br>
                        <label class="text-secondary"><?= $phone_number_user ?></label>
                    </div>

                    <div class="form-group mb-3">
                        <label class="text-primary">Address</label> <br>
                        <label class="text-secondary"><?= $address_user ?></label>
                    </div>

                    <div class="form-group mb-3">
                        <label class="text-primary">type</label> <br>
                        <label class="text-secondary"><?= $type_user ?></label>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-danger" onclick="location.href='<?php echo base_url();?>/KaryawanController/index'">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>