<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Edit User</title>
    </head>

    <body>
        <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="col-5">
                    <h2>Edit User</h2>

                    <?php if(isset($validation)):?>
                    <div class="alert alert-warning">
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>

                    <form action="<?php echo base_url(); ?>/KaryawanController/update" method="post">
                        <input type='hidden' name='id' value="<?= $id_user ?>">
                        <div class="form-group mb-3">
                            <input type="text" name="username" placeholder="Username" value="<?= $username_user ?>" class="form-control" >
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="name" placeholder="Name" value="<?= $name_user ?>" class="form-control" >
                        </div>

                        <div class="form-group mb-3">
                            <input type="email" name="email" placeholder="Email" value="<?= $email_user ?>" class="form-control" >
                        </div>

                        <div class="form-group mb-3">
                            <input type="password" name="password" placeholder="Password" value="" class="form-control" >
                        </div>

                        <div class="form-group mb-3">
                            <input type="password" name="confirmpassword" placeholder="Confirm Password" value="" class="form-control" >
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="phone_number" placeholder="Phone Number" value="<?= $phone_number_user ?>" class="form-control" >
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="address" placeholder="Address" value="<?= $address_user ?>" class="form-control" >
                        </div>

                        <div class="form-group mb-3">
                            <select name="type" id="type">
                                <option value="Admin">Admin</option>
                                <option value="Karyawan">Karyawan</option>
                            </select>
                        </div>


                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-dark">Update</button>
                        </div>
                        
                    </form>
                    <div class="d-grid">
                        <button class="btn btn-danger" onclick="location.href='<?php echo base_url();?>/KaryawanController/index'">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>