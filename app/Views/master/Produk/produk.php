<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <h2>List Produk</h2>
    <div class="row">
        <form class="col float-right" action="<?php echo base_url(); ?>/ProdukController/insertProduk" method="post">
            <button class="btn btn-secondary float-end" type="submit"><i class="fa fa-plus"></i> Add New</button>
        </form>
        <form class="col" action="" method="post">
            <div class="input-group mb-3">
            <input class="form-control" type="text" id="search" name="search" placeholder="Search" value="">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <table id="dataProduk" border="1px" class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Quantity</th>
            <th colspan=3>Action</th>
        </tr>
        <?php
            if (count($data)>0)
            {
                foreach ($data as $key=>$value)
                {
                    echo "<tr>";
                        echo "<td>$value[id_product]</td>";    
                        echo "<td>$value[name_product]</td>";    
                        echo "<td>$value[quantity_product]</td>";
                        echo "<td><button type='submit'>Lihat</button></td>";    
                        echo "<td><button type='submit'>Edit</button></td>";    
                        echo "<td><button type='submit'>Delete</button></td>";    
                    echo "</tr>";    
                }
            }
        ?>
    </table>
</div>
</body>