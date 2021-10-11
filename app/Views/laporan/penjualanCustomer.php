<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan / Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Penjualan / Customer</h2>
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-12 col-lg-4 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Start Date</span>
                        </div>
                        <input class="form-control datepicker" type="date" name="" id=""> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">End Date</span>
                        </div>
                        <input class="form-control datepicker" type="date" name="" id=""> 
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 mb-3">
                    <button><i class="fa fa-sign-in"></i></button>
                </div>
            </div>
        </form>
        <table id="dataPenjualan" border="1px" class="table table-bordered table-striped">
            <tr>
                <th>NO</th>
                <th>ID Produk</th>
                <th>ID Transaksi</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th colspan="2">Penjualan</th>
                <th  colspan=3>Action</th>
            </tr>
        </table>
    </div>
</body>