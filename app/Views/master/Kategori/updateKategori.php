<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <title>Karyawan</title>
</head>
<body>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Karyawan</li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif;?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Karyawan</h3>
              </div>
              <form action="<?php echo base_url(); ?>/KaryawanController/update" method="post">
                <input type='hidden' name='id' value="<?= $id_user ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $username_user ?>" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $name_user ?>" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label>E-Mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $email_user ?>" placeholder="E-Mail">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?= $address_user ?>" placeholder="Address">
                  </div>
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?= $phone_number_user ?>" placeholder="Phone Number">
                  </div>
                  <div class="form-group">
                    <label>Type</label>
                    <select class="form-control" name="type" id="type">
                          <option value="Admin">Admin</option>
                          <option value="Karyawan">Karyawan</option>
                        </select>
                  </div>
                </div>
                <div class="card-footer">
                    <a href="<?php echo base_url();?>/KaryawanController/index" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </section>
</div>
</body>
</html>