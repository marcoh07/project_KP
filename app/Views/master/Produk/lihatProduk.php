<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>produk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>
<body>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <button class="btn btn-danger" onclick="location.href='<?php echo base_url();?>/ProdukController/index'">Back</button>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Produk</li>
                <li class="breadcrumb-item active">Lihat</li>
            </ol>
            </div>
        </div>
        </div>
    </section>
    <section class="content">
        <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <div class="form-group mb-3">
                    <label class="text-primary">Name</label> <br>
                    <label class="text-secondary"><?= $name_product ?></label>
                </div>

                <div class="form-group mb-3">
                    <label class="text-primary">Quantity</label> <br>
                    <label class="text-secondary"><?= $quantity_product ?></label>
                </div>

                <div class="form-group mb-3">
                    <label class="text-primary">Category</label> <br>
                    <label class="text-secondary"><?= $type_product ?></label>
                </div>

                <div class="form-group mb-3">
                    <label class="text-primary">Price</label> <br>
                    <label class="text-secondary"><?= $price_product ?></label>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>