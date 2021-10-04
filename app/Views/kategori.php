<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>
        <form action="<?php echo base_url(); ?>/CategoryController/insertCategory" method="post">
            List Kategori 
            <button type="submit">Add New</button>
        </form>
        <form action="" method="post">
            <input type="text" id="nama" style="width: 30%;" placeholder="Masukkan Nama">
            <button id="btnSearch" type="submit" name="action">Search</button>
        </form>
        <table id="dataKategori" border="1px">
        </table>
    </div>
</body>