<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Register User</title>
    </head>

    <body>
        <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="col-5">
                    <h2>Kategori</h2>

                    <?php if(isset($validation)):?>
                    <div class="alert alert-warning">
                    <?= $validation->listErrors() ?>
                    </div>
                    <?php endif;?>

                    <form action="<?php echo base_url(); ?>/CategoryController/store" method="post">
                        <div class="form-group mb-3">
                            <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control" >
                        </div>

                        <div class="form-group mb-3">
                            <textarea name="desc" id="desc" placeholder="description" cols="30" rows="10" value="<?= set_value('desc') ?>"></textarea>    
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>
                    </form>
                    <div class="d-grid">
                        <button class="btn btn-danger" onclick="location.href='<?php echo base_url();?>/KategoriController/index'">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>