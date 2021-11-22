<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <title>Produk</title>
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
              <li class="breadcrumb-item">Produk</li>
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
                <h3 class="card-title">Edit Produk</h3>
              </div>
              <form action="<?php echo base_url(); ?>/ProdukController/update" method="post">
                <input type='hidden' name='id' value="<?= $id_product ?>">
                <div class="card-body">
                  <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $name_product ?>" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" value="<?= $quantity_product ?>" placeholder="Quantity">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="type" id="type">
                            <?php
                                foreach($category as $key=>$value)
                                {
                                    echo "<option>$value[name_category]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?= $price_product ?>" placeholder="Price">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?php echo base_url();?>/ProdukController/index" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </section>
</div>
</body>
</html>