<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mutasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Mutasi</h2>
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
        <table id="dataMutasi" border="1px" class="table table-bordered">
            <thead class="thead-light text-center">
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">ID Produk</th>
                    <th rowspan="2">ID Transaksi</th>
                    <th rowspan="2">Nama Barang</th>
                    <th rowspan="2">Keterangan</th>
                    <th colspan="2">Mutasi</th>
                </tr>
                <tr>
                    <th>Pembelian</th>
                    <th>Penjualan</th>
                </tr>
            </thead>
            <tr>
                <td>1</td>
                <td>ID</td>
                <td>ID</td>
                <td>Nama</td>
                <td>Keterangan</td>
            </tr>
        </table>
    </div>
</body>